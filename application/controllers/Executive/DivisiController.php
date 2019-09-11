<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DivisiController
 *
 * @author zaenu
 */
class DivisiController extends CI_Controller {

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
        $data['divisi'] = $this->DataModel->read('divisi', '*')->result_array();
        $this->load->view('admin/divisiM', $data);
    }
    
    function input(){
        $this->form_validation->set_rules('nama','Nama Divisi','required');
        $nama = $this->input->post('nama');
        $ket = $this->input->post('ket');
        $data = array(
            'nama_divisi' => $nama,
            'keterangan' => $ket
        );
        $input = $this->DataModel->create('divisi', $data);
        if ($input == FALSE) {
            echo "error cuk";
        } else {
            redirect('executive/divisi');
        }
    }
    
    function edit($id){
        $data['divisi'] = $this->DataModel->readWhere('divisi','*','idDivisi',$id)->row();
        $this->load->view('admin/divisiE',$data);
    }
    
    function prosesEdit($id){
        $this->form_validation->set_rules('nama','Nama Divisi','required');
        $nama = $this->input->post('nama');
        $ket = $this->input->post('ket');
        $data = array(
            'nama_divisi' => $nama,
            'keterangan' => $ket
        );
        $input = $this->DataModel->update('divisi','idDivisi',$id,$data);
        if ($input == FALSE) {
            echo "error cuk";
        } else {
            redirect('executive/divisi');
        }
    }
    
    function hapus($id){
        $hapus = $this->DataModel->delete('divisi', 'idDivisi', $id);
        if ($hapus == FALSE) {
            echo "error baen cuk fck";
        } else {
            redirect('executive/divisi');
        }
    }

}
