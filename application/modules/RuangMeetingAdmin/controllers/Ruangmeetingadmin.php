<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ruangmeetingadmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_ruangmeeting');
    }

    public function index()
    {
        $data_ruangan['dataRuangan'] = $this->Model_ruangmeeting->fetch_data();
        $this->load->view('view_ruangmeeting', $data_ruangan);
    }
}
