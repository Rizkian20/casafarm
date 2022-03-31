<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dashboard');
    }
    public function index()
    {
        $data['sensor'] = $this->m_dashboard->get_datasensor_new();      
        $data['sensor2'] = $this->m_dashboard->get_datasensor_new1();      
        $data['sensor3'] = $this->m_dashboard->get_datasensor_new2();      
        $data['sensor4'] = $this->m_dashboard->get_datasensor_new3();      
        $this->load->view('template/header');
        $this->load->view('dashboard/index', $data);
        $this->load->view('template/footer');
        $this->load->view('template/sidebar');
    }
}
