<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_sistemempat extends CI_Model
{
    public function get_datasensor_new()
    {
        $this->db->select('*');
        $this->db->from('sistem4');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        return $this->db->get()->result_array();
    }
    public function insertdata($sensor)
    {
        return $this->db->insert('sistem4', $sensor);
    }
}