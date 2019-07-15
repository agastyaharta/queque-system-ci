<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PasienDone extends CI_Controller
{
    public function index()
    {
        $this->load->view('PasienDone/view_pasiendone');
    }
}
