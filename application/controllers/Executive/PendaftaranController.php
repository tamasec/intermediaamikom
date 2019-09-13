<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PendaftaranController
 *
 * @author zaenu
 */
class PendaftaranController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('DataModel');
        $this->load->library('pagination');
    }

    function index() {
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;

        $data['jabatan'] = $this->DataModel->readWhere('jabatan', '*', 'idJabatan', $jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi', '*', 'idDivisi', $divisi)->row();
        $data['pendaftar'] = $this->DataModel->innerJoin('*', 'pendaftaran', 'jurusan', 'pendaftaran.idJurusan=jurusan.idJurusan')->result_array();
        $config = $this->DataModel->page(base_url('executive/pendaftaran'), 3, 5, count($data['pendaftar']));
//        var_dump($config);
        $data['pagination'] = $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pendaftar'] = $this->DataModel->innerJoinLimit('*', 'pendaftaran', 'jurusan', 'pendaftaran.idJurusan=jurusan.idJurusan',$config['per_page'],$page)->result_array();
//        var_dump($data['pagination']);
////        $data['pendaftar'] = $this->DataModel->read('pendaftaran','*')->result_array();
////        foreach ($data['pendaftar'] as $dt) {
////            $idJurusan = $dt['idJurusan'];
////        }
////        $data['jurusan'] = $this->DataModel->readWhere('jurusan','*','idJurusan',$idJurusan)->result_array();
//        //var_dump($data['jurusan']);
//        var_dump($data['pendaftar']);
        $this->load->view('admin/pendaftaranM', $data);
    }

    function pendaftar($id) {
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;
        $data['jabatan'] = $this->DataModel->readWhere('jabatan', '*', 'idJabatan', $jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi', '*', 'idDivisi', $divisi)->row();
        $data['tampil'] = $this->DataModel->innerJoinWhere2('*', 'pendaftaran', 'jurusan', 'pendaftaran.idJurusan=jurusan.idJurusan', 'idDaftar', $id, 'divisi', 'pendaftaran.idDivisi=divisi.idDivisi')->row();
        $this->load->view('admin/detailPendaftar', $data);
    }

    function hapus($id) {
        $config1 = 'assets/admin/uploads/pendaftar/images/';
        $config2 = 'assets/admin/uploads/pendaftar/cv/';
        $data = $this->DataModel->readWhere('pendaftaran', '*', 'idDaftar', $id)->row();
        $path1 = $config1 . $data->foto;
        $path2 = $config2 . $data->cv;
        if (file_exists($path1)) {
            unlink(FCPATH . $path1);
            if (file_exists($path2)) {
                unlink(FCPATH . $path2);
            }
        } 
        var_dump($path1);
        $hapus = $this->DataModel->delete('pendaftaran', 'idDaftar', $id);
        if ($hapus == FALSE) {
            echo "error baen cuk fck";
        } else {
            redirect('executive/pendaftaran');
            //echo "berhasil yeay";
        }
    }

}
