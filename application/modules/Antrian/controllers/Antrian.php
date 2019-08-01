<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Antrian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_antrian');
    }

    function index()
    {

        // $this->load->model('Model_antrian');
        $data_user['dataAntrian'] = $this->Model_antrian->fetch_data();
        // $data["fetch_data"] = $this->main_model->fetch_data();
        $this->load->view('view_antrian', $data_user);
    }
}
