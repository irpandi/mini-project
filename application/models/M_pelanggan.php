<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelanggan extends CI_Model{
    public function getData($table){
        $query = $this->db->get($table);
        return $query;
    }

    public function get_whereData($id, $table){
        $this->db->where('id', $id);
        return $this->db->get($table);
    }

    public function insertData($table, $data){
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function updateData($id, $table, $data){
        $this->db->where('id', $id);
        return $this->db->update($table, $data);
    }
}