<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_water extends CI_Model{
    public function getData($table){
        $query = $this->db->get($table);
        return $query;
    }

    public function createData($table, $data){
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function get_whereData($id, $table){
        $query = $this->db->get_where($table, array('id' => $id));
        return $query;
    }

    public function updateData($table, $data, $where){
        $this->db->where('id', $where);
        return $this->db->update($table, $data);
    }

    public function deleteData($id, $table){
        $this->db->where('id', $id);
        return $this->db->delete($table);
    }
}