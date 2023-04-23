<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/navbar');
        $this->load->view('dashboard/left-sidebar');
        $this->load->view('dashboard/right-sidebar');
        $this->load->view('dashboard/index');
        $this->load->view('dashboard/footer');
    }
}
