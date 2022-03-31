<?php

class Sistemempat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_sistemempat');
    }
    // public function index()
    // {
    //     $data['sensor'] = $this->m_sistemempat->get_datasensor_new();      
    //     $this->load->view('template/header');
    //     $this->load->view('sistemempat/index', $data);
    //     $this->load->view('template/footer');
    //     $this->load->view('template/sidebar');
    // }
    public function index()
    {
        $this->load->model('m_sistemempat');
        if (isset($_GET['tinggi_m']) && isset($_GET['tinggi_n']) && isset($_GET['tinggi_o']) && isset($_GET['tinggi_p'])) {
            $tinggi_m = $this->input->get('tinggi_m');
            $tinggi_n = $this->input->get('tinggi_n');
            $tinggi_o = $this->input->get('tinggi_o');
            $tinggi_p = $this->input->get('tinggi_p');
            // $temperature = $this->input->get('temperature');
            // $humidity = $this->input->get('humidity');
            // echo $tinggi1, $temperature, $humidity;
            $sensor  = array(
                // "temperature" => $this->input->post('layanan'),
                "tinggi_m" => $tinggi_m,
                "tinggi_n" => $tinggi_n,
                "tinggi_o" => $tinggi_o,
                "tinggi_p" => $tinggi_p,
                // "temperature" => $temperature,
                // "humidity" => $humidity
            );
            $this->m_sistemempat->insertdata($sensor);
            redirect('sistemempat/index', $sensor);
        } else {
            echo "Wrong Variable";
        }
        // $data['datasensor'] = $this->m_sistemempat->get_datasensor();
        $data['sensor'] = $this->db->get('sistem4')->result_array();
        $this->load->view('template/header');
        $this->load->view('sistemempat/index', $data);
        $this->load->view('template/footer');
        $this->load->view('template/sidebar');
    }
}
