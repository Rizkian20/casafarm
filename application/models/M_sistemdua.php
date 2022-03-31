<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_sistemdua extends CI_Model
{
    public function get_datasensor_new()
    {
        $this->db->select('*');
        $this->db->from('sistem2');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        return $this->db->get()->result_array();
    }
    public function insertdata($sensor)
    {
        return $this->db->insert('sistem2', $sensor);
    }
}