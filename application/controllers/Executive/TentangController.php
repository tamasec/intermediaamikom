<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TentangController
 *
 * @author zaenu
 */
class TentangController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('DataModel');
    }

    function index() {
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;
        $data['jabatan'] = $this->DataModel->readWhere('jabatan', '*', 'idJabatan', $jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi', '*', 'idDivisi', $divisi)->row();
        $data['intermedia'] = $this->DataModel->read('tentang', '*')->result_array();
        $this->load->view('admin/tentangI', $data);
    }

    function input() {
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;
        $data['jabatan'] = $this->DataModel->readWhere('jabatan', '*', 'idJabatan', $jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi', '*', 'idDivisi', $divisi)->row();
        $this->load->view('admin/tentangAdd',$data);
    }
    
    function prosesTambah(){
        $informasi = $this->input->post('informasi');
        $sejarah = $this->input->post('sejarah');
        $visi = $this->input->post('visi');
        $misi = $this->input->post('misi');
        $motto = $this->input->post('motto');
        $tujuan = $this->input->post('tujuan');
        $asas = $this->input->post('asas');
        
        $data = array(
            'informasi' => $informasi,
            'sejarah' => $sejarah,
            'visi' => $visi,
            'misi' => $misi,
            'motto' => $motto,
            'tujuan' => $tujuan,
            'asas' => $asas,
            'idAnggota' => $this->session->userdata('data')->idAnggota
        );
        
        $input = $this->DataModel->create('tentang',$data);
        if($input == FALSE){
            echo "yah error";
        }else{
            redirect('executive/tentang');
        }
        
    }

}
