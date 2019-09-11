<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PengurusDivisiController
 *
 * @author zaenu
 */
class PengurusDivisiController extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('DataModel');
    }
    
    function index(){
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;
        $data['jabatan'] = $this->DataModel->readWhere('jabatan','*','idJabatan',$jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi','*','idDivisi',$divisi)->row();
        //$divisi = $this->DataModel->readWhere('divisi','*','idDivisi',$div)->row();
        //$data['anggota'] = $this->DataModel->read('anggota','*')->result_array();
        $data['anggota'] = $this->DataModel->innerJoinWhere('*',
                    'anggota','detail_divisi','divisi',
                    'detail_divisi.idAnggota=anggota.idAnggota',
                    'divisi.idDivisi=detail_divisi.idDivisi',
                    'divisi.nama_divisi',$data['divisi']->nama_divisi)->result_array();
        //var_dump($data);
        $this->load->view('admin/divisiP',$data);
    }
}
