<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Antrian extends CI_Controller
{

    // public function 
    public function index()
    {
        $this->load->model('Antrian/Model_antrian');
        $data["fetch_data"] = $this->main_model->fetch_data();
        $this->load->view('Antrian/view_antrian', $data);
    }
}
