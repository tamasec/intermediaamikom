<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AnggotaController
 *
 * @author zaenu
 */
class AnggotaController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('DataModel');
    }

    function index() {
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;
        $data['jabatan'] = $this->DataModel->readWhere('jabatan', '*', 'idJabatan', $jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi', '*', 'idDivisi', $divisi)->row();
        $data['listD'] = $this->DataModel->read('divisi', '*')->result_array();
        $data['listJ'] = $this->DataModel->read('jurusan', '*')->result_array();
        $data['listJb'] = $this->DataModel->read('jabatan', '*')->result_array();
        //$divisi = $this->DataModel->readWhere('divisi','*','idDivisi',$div)->row();
        $data['anggota'] = $this->DataModel->read('anggota', '*')->result_array();
        $data['noUser'] = $this->DataModel->noUser();
//        $data['anggota'] = $this->DataModel->innerJoinWhere('*',
//                    'anggota','detail_divisi','divisi',
//                    'detail_divisi.idAnggota=anggota.idAnggota',
//                    'divisi.idDivisi=detail_divisi.idDivisi',
//                    'divisi.nama_divisi',$data['divisi']->nama_divisi)->result_array();
        //var_dump($data);
        $this->load->view('admin/anggotaM', $data);
        //echo $divisi->nama_divisi;
    }

    function detail($id) {
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;
        $data['jabatan'] = $this->DataModel->readWhere('jabatan', '*', 'idJabatan', $jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi', '*', 'idDivisi', $divisi)->row();
        //$divisi = $this->DataModel->readWhere('divisi','*','idDivisi',$div)->row();
        //$data['anggota'] = $this->DataModel->read('anggota', '*')->result_array();
        $data['tampil'] = $this->DataModel->innerJoinWhere('*', 'anggota', 'detail_divisi', 'divisi', 'detail_divisi.idAnggota=anggota.idAnggota', 'divisi.idDivisi=detail_divisi.idDivisi', 'anggota.idAnggota', $id)->row();
        //var_dump($data);
        $this->load->view('admin/detailAnggota', $data);
    }

    function input() {
        $this->form_validation->set_rules('idA', 'Id Anggota', 'required');
        $this->form_validation->set_rules('nama', 'Nama Anggota', 'required');
        $this->form_validation->set_rules('email', 'email Anggota', 'required|valid_email');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin Anggota', 'required');
        $this->form_validation->set_rules('divisi', 'divisi Anggota', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan Anggota', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan Anggota', 'required');
        $this->form_validation->set_rules('password', 'Password Anggota', 'required');

        $idAnggota = $this->input->post('idA');
        $idU = $this->input->post('idU');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $jk = $this->input->post('jk');
        $idD = $this->input->post('divisi');
        $idJ = $this->input->post('jurusan');
        $idJb = $this->input->post('jabatan');
        $pass = $this->input->post('password');

        if ($this->form_validation->run() == FALSE) {
            echo "error";
            //redirect('executive/anggota');
        } else {
            $dataAnggota = array(
                'idAnggota' => $idAnggota,
                'nama_lengkap' => $nama,
                'jk' => $jk,
                'email' => $email
            );
            $dataJurusan = array(
                'idJurusan' => $idJ,
                'idAnggota' => $idAnggota,
                'keterangan' => ""
            );
            $dataJabatan = array(
                'idJabatan' => $idJb,
                'idAnggota' => $idAnggota,
                'keterangan' => "",
            );
            $dataDivisi = array(
                'idDivisi' => $idD,
                'idAnggota' => $idAnggota,
                'keterangan' => ""
            );
            $dataUser = array(
                'idUser' => $idU,
                'idAnggota' => $idAnggota,
                'password' => $pass
            );

            $query1 = $this->DataModel->create('anggota', $dataAnggota);
            $query2 = $this->DataModel->create('detail_divisi', $dataDivisi);
            $query3 = $this->DataModel->create('detail_jabatan', $dataJabatan);
            $query4 = $this->DataModel->create('detail_jurusan', $dataJurusan);
            $query5 = $this->DataModel->create('users', $dataUser);

            if ($query1 == FALSE || $query2 == FALSE || $query3 == FALSE || $query4 == FALSE || $query5 == FALSE) {
                echo "input data gagal";
            }else{
                redirect('executive/anggota');
            }
        }
    }

}
