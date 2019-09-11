<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataModel
 *
 * @author zaenu
 */
class DataModel extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function create($table, $data) {
        $query = $this->db->insert($table, $data);
        return $query;
    }

    function update($table, $where, $kondisi, $data) {
        $this->db->where($where, $kondisi);
        $query = $this->db->update($table, $data);
        return $query;
    }

    function delete($table, $where, $kondisi) {
        $this->db->where($where, $kondisi);
        $query = $this->db->delete($table);
        return $query;
    }

    function read($table, $col) {
        $this->db->select($col);
        $query = $this->db->get($table);
        return $query;
    }

    function readOrder($table, $col, $order, $col2) {
        $this->db->select($col);
        $this->db->order_by($col2, $order);
        $query = $this->db->get($table);
        return $query;
    }

    function readLimit($table, $col, $limit) {
        $this->db->select($col);
        $this->db->limit($limit);
        $query = $this->db->get($table);
        return $query;
    }

    function readWhere($table, $col, $where, $kondisi) {
        $this->db->select($col);
        $this->db->where($where, $kondisi);
        $query = $this->db->get($table);
        return $query;
    }

    function CekLogin($table, $where) {
        return $this->db->get_where($table, $where);
    }

    function innerJoin($col, $table1, $table2, $where) {
        $query = $this->db->select($col);
        $query = $this->db->from($table1);
        $query = $this->db->join($table2, $where, 'inner');
        $query = $this->db->get();
        return $query;
    }

    function innerJoinLimit($col, $table1, $table2, $where, $limit, $start) {
        $query = $this->db->select($col);
//        $query = $this->db->from($table1);
        $query = $this->db->join($table2, $where, 'inner');
//        $query = $this->db->limit($limit,$start);
        $query = $this->db->get($table1, $limit, $start);
        return $query;
    }

    function innerJoinWhere2($col, $table1, $table2, $where, $col1, $where1, $table3, $join2) {
        $query = $this->db->select($col);
        $query = $this->db->from($table1);
        $query = $this->db->join($table2, $where);
        $qeury = $this->db->join($table3, $join2, 'inner');
        $query = $this->db->where($col1, $where1);
        $query = $this->db->get();
        return $query;
    }

    function innerJoinWhere($col, $table1, $table2, $table3, $join, $join2, $col2, $where) {
        $query = $this->db->select($col);
        $query = $this->db->from($table1);
        $query = $this->db->join($table2, $join);
        $qeury = $this->db->join($table3, $join2, 'inner');
        $query = $this->db->where($col2, $where);
        $query = $this->db->get();
        return $query;
    }

    function noDaf($idD) {
        $query = $this->db->select('RIGHT(idDaftar,2) as kode', FALSE);
        $query = $this->db->like('idDaftar', $idD);
        $query = $this->db->order_by('idDaftar', 'DESC');
        $query = $this->db->limit(1);
        $query = $this->db->get('pendaftaran');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodefix = $idD . $kodemax;
        return $kodefix;
    }

    function noUser() {
        $query = $this->db->select('RIGHT(idUser,2) as kode', FALSE);
        $query = $this->db->order_by('idUser', 'DESC');
        $query = $this->db->limit(1);
        $query = $this->db->get('users');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodefix = "user" . $kodemax;
        return $kodefix;
    }

    function page($base, $uri, $page, $jumlah) {
//        $baseUrl = base_url('index.php/coba/DataController/searchBuku/');
        $config = [
            'base_url' => $base,
            'uri_segment' => $uri,
            'per_page' => $page,
            'total_rows' => $jumlah,
            'use_page_numbers' => true,
            'num_links' => 5,
            'first_link' => 'First',
            'last_link' => 'Last',
            'next_link' => 'Next',
            'prev_link' => 'Prev',
            'full_tag_open' => '<div class="pagging text-center"><nav><ul class="pagination justify-content-right">',
            'full_tag_close' => '</ul></nav></div>',
            'num_tag_open' => '<li class="page-item"><span class="page-link">',
            'num_tag_close' => '</span></li>',
            'cur_tag_open' => '<li class="page-item active"><span class="page-link">',
            'cur_tag_close' => '<span class="sr-only">(current)</span></span></li>',
            'next_tag_open' => '<li class="page-item"><span class="page-link">',
            'next_tagl_close' => '<span aria-hidden="true">&raquo;</span></span></li>',
            'prev_tag_open' => '<li class="page-item"><span class="page-link">',
            'prev_tagl_close' => '</span>Next</li>',
            'first_tag_open' => '<li class="page-item"><span class="page-link">',
            'first_tagl_close' => '</span></li>',
            'last_tag_open' => '<li class="page-item"><span class="page-link">',
            'last_tagl_close' => '</span></li>'
        ];
        return $config;
    }

}
