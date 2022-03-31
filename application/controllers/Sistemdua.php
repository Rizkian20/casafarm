<?php

class Sistemdua extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_sistemdua');
    }
    // public function index()
    // {
    //     $data['sensor'] = $this->m_sistemdua->get_datasensor_new();      
    //     $this->load->view('template/header');
    //     $this->load->view('sistemdua/index', $data);
    //     $this->load->view('template/footer');
    //     $this->load->view('template/sidebar');
    // }
    public function index()
    {
        $this->load->model('m_sistemdua');
        if (isset($_GET['tinggi_e']) && isset($_GET['tinggi_f']) && isset($_GET['tinggi_g']) && isset($_GET['tinggi_h'])) {
            $tinggi_e = $this->input->get('tinggi_e');
            $tinggi_f = $this->input->get('tinggi_f');
            $tinggi_g = $this->input->get('tinggi_g');
            $tinggi_h = $this->input->get('tinggi_h');
            // $temperature = $this->input->get('temperature');
            // $humidity = $this->input->get('humidity');
            // echo $tinggi1, $temperature, $humidity;
            $sensor  = array(
                // "temperature" => $this->input->post('layanan'),
                "tinggi_e" => $tinggi_e,
                "tinggi_f" => $tinggi_f,
                "tinggi_g" => $tinggi_g,
                "tinggi_h" => $tinggi_h,
                // "temperature" => $temperature,
                // "humidity" => $humidity
            );
            $this->m_sistemdua->insertdata($sensor);
            redirect('sistemdua/index', $sensor);
        } else {
            echo "Wrong Variable";
        }
        // $data['datasensor'] = $this->m_sistemdua->get_datasensor();
        $data['sensor'] = $this->db->get('sistem2')->result_array();
        $this->load->view('template/header');
        $this->load->view('sistemdua/index', $data);
        $this->load->view('template/footer');
        $this->load->view('template/sidebar');
    }
}
