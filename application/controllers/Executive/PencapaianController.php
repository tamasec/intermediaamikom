<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PencapaianController
 *
 * @author zaenu
 */
class PencapaianController extends CI_Controller {

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
        $data['pencapaian'] = $this->DataModel->read('achievement', '*')->result_array();
        $this->load->view('admin/pencapaianM', $data);
    }

    function input() {
        $this->form_validation->set_rules('juara', 'Field Juara', 'required');
        $this->form_validation->set_rules('ket', 'Field Keterangan', 'required');

        $juara = $this->input->post('juara');
        $keterangan = $this->input->post('ket');
        $tanggal = date("d-m-y");
        $file = "";
        $berkas = str_replace(" ", "_", $juara) . "_" . $tanggal;
        if ($this->form_validation->run() == FALSE) {
            redirect('executive/pencapaian');
        } else {
            if (!empty($_FILES['foto']['name'])) {
                //$file = $_FILES['berkas']['name'];
                $file = substr(strrchr($_FILES['foto']['name'], '.'), 1);
                $config['upload_path'] = 'assets/admin/uploads/pencapaian';
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
                        'juara' => $juara,
                        'keterangan' => $keterangan,
                        'tanggal' => $tanggal,
                        'foto' => $berkas
                    );
                    //var_dump($data);
                    $input = $this->DataModel->create('achievement', $data);
                    if ($input == FALSE) {
                        echo "error cuy";
                    } else {
                        redirect('executive/pencapaian');
                    }
                }
            } else {
                echo "error";
            }
        }
    }

    function edit($id) {
        $data['pencapaian'] = $this->DataModel->readWhere('achievement', '*', 'idAchievement', $id)->row();
        $this->load->view('admin/pencapaianE', $data);
    }

    function prosesEdit($id) {
        $this->form_validation->set_rules('juara', 'Field Juara', 'required');
        $this->form_validation->set_rules('ket', 'Field Keterangan', 'required');

        $juara = $this->input->post('juara');
        $keterangan = $this->input->post('ket');
        $tanggal = date("d-m-y");
        $file = "";
        $berkas = str_replace(" ", "_", $juara) . "_" . $tanggal;
        if ($this->form_validation->run() == FALSE) {
            redirect('executive/pencapaian');
        } else {
            if (!empty($_FILES['foto']['name'])) {
                //$file = $_FILES['berkas']['name'];
                $file = substr(strrchr($_FILES['foto']['name'], '.'), 1);
                $config['upload_path'] = 'assets/admin/uploads/pencapaian';
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
                        'juara' => $juara,
                        'keterangan' => $keterangan,
                        'tanggal' => $tanggal,
                        'foto' => $berkas
                    );
                    //var_dump($data);
                    $edit = $this->DataModel->update('achievement', 'idAchievement', $id, $data);
                    if ($edit == FALSE) {
                        echo "error cuy";
                    } else {
                        redirect('executive/pencapaian');
                    }
                }
            } else {
                $data = array(
                    'idUser' => $this->session->userdata('id'),
                    'juara' => $juara,
                    'keterangan' => $keterangan,
                    'tanggal' => $tanggal,
                );
                $edit = $this->DataModel->update('achievement', 'idAchievement', $id, $data);
                if ($edit == FALSE) {
                    echo "error cuy";
                } else {
                    redirect('executive/pencapaian');
                }
            }
        }
    }

    function hapus($id) {
        $config = 'assets/admin/uploads/pencapaian/';
        $data = $this->DataModel->readWhere('achievement','*', 'idAchievement', $id)->row();
        $path = $config . $data->foto;
        unlink(FCPATH . $path);
        var_dump($path);
        $hapus = $this->DataModel->delete('achievement', 'idAchievement', $id);
        if ($hapus == FALSE) {
            echo "error baen cuk fck";
        } else {
            redirect('executive/pencapaian');
        }
    }

}
