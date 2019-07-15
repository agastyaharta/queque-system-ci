<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Antrian extends CI_Controller
{

    // public function 
    public function index()
    {

        $this->load->view('Antrian/view_antrian');
    }
}
