<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
    public function get_datasensor_new()
    {
        $this->db->select('*');
        $this->db->from('sistem1');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        return $this->db->get()->result_array();
    }
    public function get_datasensor_new1()
    {
        $this->db->select('*');
        $this->db->from('sistem2');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        return $this->db->get()->result_array();
    }
    public function get_datasensor_new2()
    {
        $this->db->select('*');
        $this->db->from('sistem3');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        return $this->db->get()->result_array();
    }
    public function get_datasensor_new3()
    {
        $this->db->select('*');
        $this->db->from('sistem4');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        return $this->db->get()->result_array();
    }

}
