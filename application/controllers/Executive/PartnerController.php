<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PartnerController
 *
 * @author zaenu
 */
class PartnerController extends CI_Controller {

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
        $data['mp'] = $this->DataModel->read('mediapartner', '*')->result_array();
        $this->load->view('admin/partnerM', $data);
    }

    function input() {
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;
        $data['jabatan'] = $this->DataModel->readWhere('jabatan', '*', 'idJabatan', $jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi', '*', 'idDivisi', $divisi)->row();
        $this->load->view('admin/partnerI', $data);
    }

    function prosesTambah() {
        $this->form_validation->set_rules('nama', 'Nama Media Partner', 'required');
//        $this->form_validation->set_rules('alamat', 'Alamat Media Partner', 'required');
//        $this->form_validation->set_rules('email', 'Email Media Partner', 'required');
//        $this->form_validation->set_rules('nohp', 'No Hp Media Partner', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan Media Partner', 'required');

        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $nohp = $this->input->post('nohp');
        $keterangan = $this->input->post('keterangan');
        $tanggal = date("d-m-y");
        $file = "";
        $berkas = str_replace(" ", "_", $nama) . "_" . $this->session->userdata('id');
        if ($this->form_validation->run() == FALSE) {
            redirect('executive/tambah/partner');
        } else {
            if (!empty($_FILES['foto']['name'])) {
                $file = substr(strrchr($_FILES['foto']['name'], '.'), 1);
                $config['upload_path'] = 'assets/admin/uploads/partner';
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['file_name'] = $berkas;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo 'Upload gagal';
                } else {
                    $this->upload->data();
                    $berkas = $berkas . '.' . $file;
                    $data = array(
                        'idUser' => $this->session->userdata('id'),
                        'nama' => $nama,
                        'alamat' => $alamat,
                        'email' => $email,
                        'nohp' => $nohp,
                        'keterangan' => $keterangan,
                        'logo' => $berkas
                    );
                    //var_dump($data);
                    $input = $this->DataModel->create('mediapartner', $data);
                    if ($input == FALSE) {
                        echo "error cuy";
                    } else {
                        redirect('executive/partner');
                    }
                }
            } else {
                echo "error";
            }
        }
    }

    function edit($id) {
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;
        $data['jabatan'] = $this->DataModel->readWhere('jabatan', '*', 'idJabatan', $jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi', '*', 'idDivisi', $divisi)->row();
        $data['mp'] = $this->DataModel->readWhere('mediapartner', '*', 'idPartner', $id)->row();
        $this->load->view('admin/partnerE', $data);
    }

    function prosesEdit($id) {
        $this->form_validation->set_rules('nama', 'Nama Media Partner', 'required');
//        $this->form_validation->set_rules('alamat', 'Alamat Media Partner', 'required');
//        $this->form_validation->set_rules('email', 'Email Media Partner', 'required');
//        $this->form_validation->set_rules('nohp', 'No Hp Media Partner', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan Media Partner', 'required');

        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $nohp = $this->input->post('nohp');
        $keterangan = $this->input->post('keterangan');
        $tanggal = date("d-m-y");
        $file = "";
        $berkas = str_replace(" ", "_", $nama) . "_" . $this->session->userdata('id');
        if ($this->form_validation->run() == FALSE) {
            redirect('executive/tambah/acara');
        } else {
            if (!empty($_FILES['foto']['name'])) {
                $config = 'assets/admin/uploads/partner/';
                $data = $this->DataModel->readWhere('mediapartner', '*', 'idPartner', $id)->row();
                $path = $config . $data->logo;
                unlink(FCPATH . $path);
                $file = substr(strrchr($_FILES['foto']['name'], '.'), 1);
                $config['upload_path'] = 'assets/admin/uploads/partner';
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['file_name'] = $berkas;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo 'Upload gagal';
                } else {
                    $this->upload->data();
                    $berkas = $berkas . '.' . $file;
                    $data = array(
                        'idUser' => $this->session->userdata('id'),
                        'nama' => $nama,
                        'alamat' => $alamat,
                        'email' => $email,
                        'nohp' => $nohp,
                        'keterangan' => $keterangan,
                        'logo' => $berkas
                    );
                    //var_dump($data);
                    $input = $this->DataModel->update('mediapartner', 'idPartner', $id, $data);
                    if ($input == FALSE) {
                        echo "error cuy";
                    } else {
                        redirect('executive/partner');
                    }
                }
            } else {
                //$berkas = $berkas . '.' . $file;
                $data = array(
                    'idUser' => $this->session->userdata('id'),
                        'nama' => $nama,
                        'alamat' => $alamat,
                        'email' => $email,
                        'nohp' => $nohp,
                        'keterangan' => $keterangan,
                );
                $input = $this->DataModel->update('mediapartner', 'idPartner', $id, $data);
                if ($input == FALSE) {
                    echo "error cuy";
                } else {
                    redirect('executive/partner');
                }
            }
        }
    }

    function hapus($id) {
        $config = 'assets/admin/uploads/partner/';
        $data = $this->DataModel->readWhere('mediapartner', '*', 'idPartner', $id)->row();
        $path = $config . $data->logo;
        unlink(FCPATH . $path);
        //var_dump($path);
        $hapus = $this->DataModel->delete('mediapartner', 'idPartner', $id);
        if ($hapus == FALSE) {
            echo "error baen cuk fck";
        } else {
            redirect('executive/partner');
        }
    }
    
    function detail($id){
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;
        $data['jabatan'] = $this->DataModel->readWhere('jabatan', '*', 'idJabatan', $jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi', '*', 'idDivisi', $divisi)->row();
        //$divisi = $this->DataModel->readWhere('divisi','*','idDivisi',$div)->row();
        //$data['anggota'] = $this->DataModel->read('anggota', '*')->result_array();
        $data['tampil'] = $this->DataModel->readWhere('mediapartner', '*', 'idPartner',$id)->row();
        //var_dump($data);
        $this->load->view('admin/detailPartner', $data);
    }

}
