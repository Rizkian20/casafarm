<?php

class Sistemtiga extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_sistemtiga');
    }
    // public function index()
    // {
    //     $data['sensor'] = $this->m_sistemtiga->get_datasensor_new();      
    //     $this->load->view('template/header');
    //     $this->load->view('sistemtiga/index', $data);
    //     $this->load->view('template/footer');
    //     $this->load->view('template/sidebar');
    // }
    public function index()
    {
        $this->load->model('m_sistemtiga');
        if (isset($_GET['tinggi_i']) && isset($_GET['tinggi_j']) && isset($_GET['tinggi_k']) && isset($_GET['tinggi_l'])) {
            $tinggi_i = $this->input->get('tinggi_i');
            $tinggi_j = $this->input->get('tinggi_j');
            $tinggi_k = $this->input->get('tinggi_k');
            $tinggi_l = $this->input->get('tinggi_l');
            // $temperature = $this->input->get('temperature');
            // $humidity = $this->input->get('humidity');
            // echo $tinggi1, $temperature, $humidity;
            $sensor  = array(
                // "temperature" => $this->input->post('layanan'),
                "tinggi_i" => $tinggi_i,
                "tinggi_j" => $tinggi_j,
                "tinggi_k" => $tinggi_k,
                "tinggi_l" => $tinggi_l,
                // "temperature" => $temperature,
                // "humidity" => $humidity
            );
            $this->m_sistemtiga->insertdata($sensor);
            redirect('sistemtiga/index', $sensor);
        } else {
            echo "Wrong Variable";
        }
        // $data['datasensor'] = $this->m_sistemtiga->get_datasensor();
        $data['sensor'] = $this->db->get('sistem3')->result_array();
        $this->load->view('template/header');
        $this->load->view('sistemtiga/index', $data);
        $this->load->view('template/footer');
        $this->load->view('template/sidebar');
    }
}
