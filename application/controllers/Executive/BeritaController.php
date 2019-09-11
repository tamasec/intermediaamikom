<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BeritaController
 *
 * @author zaenu
 */
class BeritaController extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('DataModel');
        $this->load->library('form_validation');
    }
    
    function index(){
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;
        $data['jabatan'] = $this->DataModel->readWhere('jabatan','*','idJabatan',$jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi','*','idDivisi',$divisi)->row();
        $data['berita'] = $this->DataModel->read('berita','*')->result_array();
        $this->load->view('admin/beritaM',$data);
    }
    
    function input(){
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;
        $data['jabatan'] = $this->DataModel->readWhere('jabatan', '*', 'idJabatan', $jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi', '*', 'idDivisi', $divisi)->row();
        $this->load->view('admin/beritaI',$data);
    }
    
    function prosesTambah(){
        $this->form_validation->set_rules('judul', 'Judul Berita', 'required');
        $this->form_validation->set_rules('isi', 'Isi Berita', 'required');

        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $tanggal = date("d-m-y");
        $file = "";
        $berkas = str_replace(" ", "_", $judul) . "_" . $this->session->userdata('id');
        if ($this->form_validation->run() == FALSE) {
            redirect('executive/tambah/berita');
        } else {
            if (!empty($_FILES['foto']['name'])) {
                $file = substr(strrchr($_FILES['foto']['name'], '.'), 1);
                $config['upload_path'] = 'assets/admin/uploads/berita';
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
                    $input = $this->DataModel->create('berita', $data);
                    if ($input == FALSE) {
                        echo "error cuy";
                    } else {
                        redirect('executive/berita');
                    }
                }
            } else {
                echo "error";
            }
        }
    }
    
    function edit($id){
        $data['berita'] = $this->DataModel->readWhere('berita', '*', 'idBerita', $id)->row();
        $this->load->view('admin/beritaE', $data);
    }
    
    function hapus($id){
        $config = 'assets/admin/uploads/berita/';
        $data = $this->DataModel->readWhere('berita','*', 'idBerita', $id)->row();
        $path = $config . $data->gambar;
        unlink(FCPATH . $path);
        var_dump($path);
        $hapus = $this->DataModel->delete('berita', 'idBerita', $id);
        if ($hapus == FALSE) {
            echo "error baen cuk fck";
        } else {
            redirect('executive/berita');
        }
    }
}
