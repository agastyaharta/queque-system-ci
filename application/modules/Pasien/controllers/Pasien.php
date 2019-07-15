<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{

    // public function 
    public function index()
    {

        $this->load->view('Pasien/view_pasien');
    }
}
