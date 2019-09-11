<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JurusanController
 *
 * @author zaenu
 */
class JurusanController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('DataModel');
        $this->load->library('form_validation');
    }

    function index() {
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;
        $data['jabatan'] = $this->DataModel->readWhere('jabatan', '*', 'idJabatan', $jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi', '*', 'idDivisi', $divisi)->row();
        $data['jurusan'] = $this->DataModel->read('jurusan', '*')->result_array();
        $this->load->view('admin/jurusanM', $data);
    }

    function input() {
        $this->form_validation->set_rules('nama','Nama Jurusan','required');
        $nama = $this->input->post('nama');
        $ket = $this->input->post('ket');
        $data = array(
            'nama_jurusan' => $nama,
            'keterangan' => $ket
        );
        $input = $this->DataModel->create('jurusan', $data);
        if ($input == FALSE) {
            echo "error cuk";
        } else {
            redirect('executive/jurusan');
        }
    }
    
    function edit($id){
        $data['jurusan'] = $this->DataModel->readWhere('jurusan','*','idJurusan',$id)->row();
        $this->load->view('admin/jurusanE',$data);
    }
    
    function prosesEdit($id){
        $this->form_validation->set_rules('nama','Nama Jurusan','required');
        $nama = $this->input->post('nama');
        $ket = $this->input->post('ket');
        $data = array(
            'nama_jurusan' => $nama,
            'keterangan' => $ket
        );
        $input = $this->DataModel->update('jurusan','idJurusan',$id, $data);
        if ($input == FALSE) {
            echo "error cuk";
        } else {
            redirect('executive/jurusan');
        }
    }

    function hapus($id){
        $hapus = $this->DataModel->delete('jurusan', 'idJurusan', $id);
        if ($hapus == FALSE) {
            echo "error baen cuk fck";
        } else {
            redirect('executive/jurusan');
        }
    }

}
