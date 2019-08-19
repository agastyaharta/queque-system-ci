<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Antrianadmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_antrian');
    }

    function index()
    {
        $data_user['dataAntrian'] = $this->Model_antrian->fetch_data();
        $this->load->view('view_antrian', $data_user);
    }
}
