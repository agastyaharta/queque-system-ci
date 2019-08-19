<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Validasiantrian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_validasiantrian');
    }

    function index()
    {
        $data_validasi['dataValidasi'] = $this->Model_validasiantrian->fetch_data();
        $this->load->view('view_validasiantrian', $data_validasi);
    }
}
