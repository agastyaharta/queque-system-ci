<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Antrian extends CI_Controller
{

    // public function 
    public function index()
    {
        // echo 'Test';
        // $this->load->view('template/template_header');
        $this->load->view('Antrian/view_antrian');
        // $this->load->view('template/template_footer');
    }
}
