<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MainController
 *
 * @author zaenu
 */
class MainController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('DataModel');
    }

    function index() {
        $data['tentang'] = $this->DataModel->read('tentang', '*')->row();
        $data['berita'] = $this->DataModel->read('berita', '*')->result_array();
        $data['pemrograman'] = $this->DataModel->readWhere('divisi', 'keterangan', 'nama_divisi', 'pemrograman')->row();
        $data['multimedia'] = $this->DataModel->readWhere('divisi', 'keterangan', 'nama_divisi', 'multimedia')->row();
        $data['jaringan'] = $this->DataModel->readWhere('divisi', 'keterangan', 'nama_divisi', 'networking support')->row();
        $data['mp'] = $this->DataModel->read('mediapartner','*')->result_array();
        //var_dump($data);
        $this->load->view('user/index', $data);
    }

    function event() {
        $data['acara'] = $this->DataModel->readOrder('event', '*','desc','tanggal')->result_array();
        $this->load->view('user/event', $data);
    }

    function news() {
        $data['berita'] = $this->DataModel->readOrder('berita', '*','desc','tanggal')->result_array();
        $this->load->view('user/news', $data);
    }

    function join() {
        $this->load->model('PendaftaranModel');
        $getDiffAwal = ( $this->PendaftaranModel->getTimeAwalDaftar() - strtotime(date("Y/m/d H:i:s")) ) / 60 / 60 / 24;
        $getDiffAkhir = ( strtotime(date("Y/m/d H:i:s")) - $this->PendaftaranModel->getTimeAkhirDaftar() ) / 60 / 60 / 24;
        //echo $getDiffAwal;
        if (($getDiffAwal > 0) && ($getDiffAkhir <= 0)) {
            $data['status'] = "belum";
            $this->load->view('user/joinfalse', $data);
        } else if (($getDiffAwal <= 0) && ($getDiffAkhir <= 0)) {
            $data['status'] = "dibuka";
            $data['endDate'] = $this->PendaftaranModel->getAkhirDaftar();
            $this->load->view('user/joinfalse', $data);
        } else if ($getDiffAkhir > 0) {
            $data['status'] = "ditutup";
            $this->load->view('user/joinfalse', $data);
        }
    }

    function daftar() {
        $this->load->view('user/Form_Join');
    }

    function about() {
//        echo "Selamat Datang<br>";
//        echo "pilihan kendaraan : <br>";
//        echo "1. Motor<br>";
//        echo "2. Mobil<br>";
//        echo "<form>";
//        echo "<input type='text' name='pilihan'>";
//        echo "<input type='submit' value='kirim'>";
//        echo "</form>";
        
        
        $data['tentang'] = $this->DataModel->read('tentang','*')->row();
        $this->load->view('user/About',$data);
    }

    function achievement() {
        $data['pencapaian'] = $this->DataModel->read('achievement', '*')->result_array();
        $this->load->view('user/Achievement', $data);
    }

    function team() {
        $this->load->view('user/Team');
    }
    
    function tartib(){
        $this->load->view('user/tartib');
    }

}
