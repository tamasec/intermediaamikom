<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AcaraController
 *
 * @author zaenu
 */
class AcaraController extends CI_Controller {

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
        $data['acara'] = $this->DataModel->read('event', '*')->result_array();
        $this->load->view('admin/acaraM', $data);
    }

    function input() {
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;
        $data['jabatan'] = $this->DataModel->readWhere('jabatan', '*', 'idJabatan', $jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi', '*', 'idDivisi', $divisi)->row();
        $this->load->view('admin/acaraI', $data);
    }

    function prosesTambah() {
        $this->form_validation->set_rules('judul', 'Judul acara', 'required');
        $this->form_validation->set_rules('isi', 'Isi acara', 'required');

        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $tanggal = date("d-m-y");
        $file = "";
        $berkas = str_replace(" ", "_", $judul) . "_" . $this->session->userdata('id');
        if ($this->form_validation->run() == FALSE) {
            redirect('executive/tambah/acara');
        } else {
            if (!empty($_FILES['foto']['name'])) {
                $file = substr(strrchr($_FILES['foto']['name'], '.'), 1);
                $config['upload_path'] = 'assets/admin/uploads/event';
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
                        'judul' => $judul,
                        'isi' => $isi,
                        'tanggal' => $tanggal,
                        'gambar' => $berkas
                    );
                    //var_dump($data);
                    $input = $this->DataModel->create('event', $data);
                    if ($input == FALSE) {
                        echo "error cuy";
                    } else {
                        redirect('executive/acara');
                    }
                }
            } else {
                echo "error";
            }
        }
    }

    function edit($id) {
        $data['acara'] = $this->DataModel->readWhere('event', '*', 'idEvent', $id)->row();
        $this->load->view('admin/acaraE', $data);
    }

    function prosesEdit($id) {
        $this->form_validation->set_rules('judul', 'Judul acara', 'required');
        $this->form_validation->set_rules('isi', 'Isi acara', 'required');

        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $tanggal = date("d-m-y");
        $file = "";
        $berkas = str_replace(" ", "_", $judul) . "_" . $this->session->userdata('id');
        if ($this->form_validation->run() == FALSE) {
            redirect('executive/tambah/acara');
        } else {
            if (!empty($_FILES['foto']['name'])) {
                $config = 'assets/admin/uploads/acara/';
                $data = $this->DataModel->readWhere('event', '*', 'idEvent', $id)->row();
                $path = $config . $data->gambar;
                unlink(FCPATH . $path);
                $file = substr(strrchr($_FILES['foto']['name'], '.'), 1);
                $config['upload_path'] = 'assets/admin/uploads/event';
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
                        'judul' => $judul,
                        'isi' => $isi,
                        'tanggal' => $tanggal,
                        'gambar' => $berkas
                    );
                    //var_dump($data);
                    $input = $this->DataModel->update('event', 'idEvent', $id, $data);
                    if ($input == FALSE) {
                        echo "error cuy";
                    } else {
                        redirect('executive/acara');
                    }
                }
            } else {
                //$berkas = $berkas . '.' . $file;
                $data = array(
                    'idUser' => $this->session->userdata('id'),
                    'judul' => $judul,
                    'isi' => $isi,
                    'tanggal' => $tanggal,
                );
                $input = $this->DataModel->update('event', 'idEvent', $id, $data);
                if ($input == FALSE) {
                    echo "error cuy";
                } else {
                    redirect('executive/acara');
                }
            }
        }
    }

    function hapus($id) {
        $config = 'assets/admin/uploads/acara/';
        $data = $this->DataModel->readWhere('event', '*', 'idEvent', $id)->row();
        $path = $config . $data->gambar;
        unlink(FCPATH . $path);
        //var_dump($path);
        $hapus = $this->DataModel->delete('event', 'idEvent', $id);
        if ($hapus == FALSE) {
            echo "error baen cuk fck";
        } else {
            redirect('executive/acara');
        }
    }

}
