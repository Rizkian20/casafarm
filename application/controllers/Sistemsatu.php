<?php

class sistemsatu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_sistemsatu');
    }
    public function index()
    {
        $this->load->model('m_sistemsatu');
        if (isset($_GET['tinggi_a']) && isset($_GET['tinggi_b']) && isset($_GET['tinggi_c']) && isset($_GET['tinggi_d'])) {
            $tinggi_a = $this->input->get('tinggi_a');
            $tinggi_b = $this->input->get('tinggi_b');
            $tinggi_c = $this->input->get('tinggi_c');
            $tinggi_d = $this->input->get('tinggi_d');
            // $temperature = $this->input->get('temperature');
            // $humidity = $this->input->get('humidity');
            // echo $tinggi1, $temperature, $humidity;
            $sensor  = array(
                // "temperature" => $this->input->post('layanan'),
                "tinggi_a" => $tinggi_a,
                "tinggi_b" => $tinggi_b,
                "tinggi_c" => $tinggi_c,
                "tinggi_d" => $tinggi_d,
                // "temperature" => $temperature,
                // "humidity" => $humidity
            );
            $this->m_sistemsatu->insertdata($sensor);
            redirect('sistemsatu/index', $sensor);
        } else {
            echo "Wrong Variable";
        }
        // $data['datasensor'] = $this->m_sistemsatu->get_datasensor();
        $data['sensor'] = $this->db->get('sistem1')->result_array();
        $this->load->view('template/header');
        $this->load->view('sistemsatu/index', $data);
        $this->load->view('template/footer');
        $this->load->view('template/sidebar');
    }
}
