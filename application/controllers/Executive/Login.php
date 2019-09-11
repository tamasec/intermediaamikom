<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author zaenu
 */
class Login extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('DataModel');
    }
    
    public function index(){
        $this->load->view('login');
    }
    
    public function login(){
        $username = $this->input->post('idA');
        $password = $this->input->post('password');
        
        $data = array(
            'idAnggota' => $username,
            'password' => $password
        );
        
        $result = $this->DataModel->CekLogin("users",$data)->row();
        
        if($result != null){
            $id = $result->idUser;
            $idA = $result->idAnggota;
            $dataAnggota = $this->DataModel->innerJoinWhere('*',
                    'anggota','detail_jabatan','detail_divisi',
                    'detail_jabatan.idAnggota=anggota.idAnggota',
                    'detail_divisi.idAnggota=anggota.idAnggota',
                    'anggota.idAnggota',$idA)->row();
            $data_session = array(
                'id' => $id,
                'idAnggota' => $idA,
                'data' => $dataAnggota,
                'status' => "login"
            );
             //var_dump($data_session);
             $this->session->set_userdata($data_session);
             redirect(base_url('executive'));
        }else{
            echo "username atau password salah";
        }
        
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('executive'));
    }
}
