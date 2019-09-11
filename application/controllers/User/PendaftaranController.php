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
        $this->load->library('form_validation');
        $this->load->model('PendaftaranModel');
        
    }

    function index() {
        $getDiffAwal = ( $this->PendaftaranModel->getTimeAwalDaftar() - strtotime(date("Y/m/d H:i:s")) ) / 60 / 60 / 24;
        $getDiffAkhir = ( strtotime(date("Y/m/d H:i:s")) - $this->PendaftaranModel->getTimeAkhirDaftar() ) / 60 / 60 / 24;
        //echo $getDiffAwal;
        if (($getDiffAwal > 0) && ($getDiffAkhir <= 0)) {
            redirect('join','refresh');
        } else if (($getDiffAwal <= 0) && ($getDiffAkhir <= 0)) {
            $data['listD'] = $this->DataModel->readLimit('divisi', '*', '3')->result_array();
            $data['listJ'] = $this->DataModel->readLimit('jurusan', '*', '2')->result_array();
            $this->load->view('user/Form_Join', $data);
        } else if ($getDiffAkhir > 0) {
            redirect('join','refresh');
        }
    }

    function daftar() {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'No Handphone', 'required|min_length[11]|max_length[12]');
        $this->form_validation->set_rules('tl', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('divisi', 'Divisi', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');


        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $no = $this->input->post('phone');
        $ttl = $this->input->post('tl');
        $jk = $this->input->post('jk');
        $jurusan = $this->input->post('jurusan');
        $divisi = $this->input->post('divisi');
        $alamat = $this->input->post('alamat');

        $idDaftar = "";
        if ($divisi == "1") {
            $idDaftar = $this->DataModel->noDaf("PR");
        } else if ($divisi == "2") {
            $idDaftar = $this->DataModel->noDaf("MM");
        } else if ($divisi == "7") {
            $idDaftar = $this->DataModel->noDaf("NS");
        }
        $berkas1 = $idDaftar . "foto";
        $berkas2 = $idDaftar . "cv";

        if ($this->form_validation->run() == FALSE) {
            $message = "Anda Harus Mengisi form secara lengkap dan mengupload file yang dibutuhkan untuk mendaftar!";
            $this->session->set_tempdata('pesan',$message,30);
            redirect('daftar');
        } else {
            if (!empty($_FILES['foto']['name']) && !empty($_FILES['cv']['name'])) {
                $file1 = substr(strrchr($_FILES['foto']['name'], '.'), 1);
                $config['upload_path'] = 'assets/admin/uploads/pendaftar/images';
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size'] = '512';
                $config['file_name'] = $berkas1;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    $this->session->set_tempdata('pesan', $this->upload->display_errors(),30);
                    redirect('daftar');
                } else {
                    $this->upload->data();
                }
                $file2 = substr(strrchr($_FILES['cv']['name'], '.'), 1);
                $config1['upload_path'] = 'assets/admin/uploads/pendaftar/cv';
                $config1['allowed_types'] = 'pdf';
                $config1['max_size'] = '1048';
                $config1['file_name'] = $berkas2;
                $this->upload->initialize($config1);
                if (!$this->upload->do_upload('cv')) {
                    //echo 'Upload gagal';
                    $this->session->set_tempdata('pesan', $this->upload->display_errors(),30);
                    redirect('daftar');
                } else {
                    $this->upload->data();
                }
                $berkas1 = $berkas1 . '.' . $file1;
                $berkas2 = $berkas2 . '.' . $file2;
                $data = array(
                    'idDaftar' => $idDaftar,
                    'nama' => $nama,
                    'jk' => $jk,
                    'ttl' => $ttl,
                    'alamat' => $alamat,
                    'idJurusan' => $jurusan,
                    'idDivisi' => $divisi,
                    'email' => $email,
                    'nohp' => $no,
                    'cv' => $berkas2,
                    'foto' => $berkas1
                );
                $query = $this->DataModel->create('pendaftaran', $data);
                if ($query == FALSE) {
                    echo "Input data gagal";
                } else {
                    $this->load->view('user/daftar_sukses');
//                echo "berhasil cuuuy";
                }
            } else {
                $message = "Anda Harus Mengisi form secara lengkap dan mengupload file yang dibutuhkan untuk mendaftar!";
                $this->session->set_tempdata('pesan', $message,30);
                redirect('daftar');
            }
        }
    }

}
