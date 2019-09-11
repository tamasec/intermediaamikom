<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class PendaftaranModel extends CI_Model {

    protected $awalDaftar = "2019-09-16 00:00:00";
    protected $akhirDaftar = "2019-09-28 23:59:59";

    public function getTimeAwalDaftar()
    {
        return strtotime($this->awalDaftar);// Declare and define two dates 
    }

    public function getTimeAkhirDaftar()
    {
        return strtotime($this->akhirDaftar); 
    }

    public function getAwalDaftar()
    {
        return $this->awalDaftar;
    }

    public function getAkhirDaftar()
    {
        return $this->akhirDaftar;
    }
}

/* End of file PendaftaranModel.php */
