<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    // public function 
    public function index()
    {
        // echo 'Test';
        // $this->load->view('template/template_header');
        $this->load->view('Login/view_login');
        // $this->load->view('template/template_footer');
    }
}
