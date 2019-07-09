<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        // $this->load->view('template/template_header');
        $this->load->view('views/view_login');
        // $this->load->view('template/template_footer');
    }
}
