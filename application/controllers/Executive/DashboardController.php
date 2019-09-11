<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DashboardController
 *
 * @author zaenu
 */
class DashboardController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('upload');
        $this->load->model('DataModel');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('Executive/login'));
        }
    }

    function index() {
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;
        $data['jabatan'] = $this->DataModel->readWhere('jabatan', '*', 'idJabatan', $jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi', '*', 'idDivisi', $divisi)->row();
//var_dump($data);
        $this->load->view('admin/homePage', $data);
    }

    function profile($id) {
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;
        $data['jabatan'] = $this->DataModel->readWhere('jabatan', '*', 'idJabatan', $jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi', '*', 'idDivisi', $divisi)->row();
        $data['tampil'] = $this->DataModel->innerJoinWhere('*', 'anggota', 'detail_divisi', 'divisi', 'detail_divisi.idAnggota=anggota.idAnggota', 'divisi.idDivisi=detail_divisi.idDivisi', 'anggota.idAnggota', $id)->row();
        $this->load->view('admin/detailProfile', $data);
    }

    function editProfile($id) {
//        $idAnggota = $this->input->post('idAnggota');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $email = $this->input->post('email');
        $jk = $this->input->post('jk');
        $ttl = $this->input->post('ttl');
        $alamat = $this->input->post('alamat');
        $angkatan = $this->input->post('angkatan');
        $noHp = $this->input->post('noHp');
        $foto = $id . "_" . $nim;
        var_dump($_FILES['foto']['name']);

        if (!empty($_FILES['foto']['name'])) {
            $base = 'assets/admin/uploads/anggota/images/';
            $data = $this->DataModel->readWhere('anggota', '*', 'idAnggota', $id)->row();
            $path = $base . $data->foto;
            if (file_exists($path)) {
                unlink(FCPATH . $path);
            }
            $file = substr(strrchr($_FILES['foto']['name'], '.'), 1);
            $config2['upload_path'] = 'assets/admin/uploads/anggota/images';
            $config2['allowed_types'] = '*';
//            $config2['max_size'] = '400';
            $config2['file_name'] = $foto . '.' . $file;
            $this->upload->initialize($config2);
            if (!$this->upload->do_upload('foto')) {
                echo '<br>Upload gagal ';
                var_dump($this->upload->display_errors());
            } else {
                $this->upload->data();
                echo "berhasil upload";
            }
            $this->upload->data();
            $foto = $foto . '.' . $file;
            $data = array(
                'nama_lengkap' => $nama,
                'nim' => $nim,
                'jk' => $jk,
                'ttl' => $ttl,
                'alamat' => $alamat,
                'angkatan' => $angkatan,
                'email' => $email,
                'noHp' => $noHp,
                'foto' => $foto
            );
            $dataS = $this->session->userdata('data');
            $dataS->nama_lengkap = $nama;
            $this->session->set_userdata('data',$dataS);
            $dataS->foto = $foto;
            $this->session->set_userdata('data',$dataS);
            $query = $this->DataModel->update('anggota', 'idAnggota', $id, $data);
            if ($query == FALSE) {
                echo "edit data gagal";
            } else {
                echo "berhasil cuuuy";
                redirect(base_url('executive'));
            }
        } else {
//$berkas = $berkas . '.' . $file;
            $data = array(
                'nama_lengkap' => $nama,
                'nim' => $nim,
                'jk' => $jk,
                'ttl' => $ttl,
                'alamat' => $alamat,
                'angkatan' => $angkatan,
                'email' => $email,
                'noHp' => $noHp,
            );
            $dataS = $this->session->userdata('data');
            $dataS->nama_lengkap = $nama;
            $this->session->set_userdata('data',$dataS);
            $input = $this->DataModel->update('anggota', 'idAnggota', $id, $data);
            if ($input == FALSE) {
                echo "error cuy";
            } else {
                redirect('executive');
            }
        }
    }

}
