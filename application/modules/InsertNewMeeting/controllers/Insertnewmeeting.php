<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insertnewmeeting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_insertnewmeeting');
    }

    public function index()
    {
        $this->load->view('view_insertnewmeeting');
    }

    function Insertdata()
    {
        $idruangan = $this->input->post('idmeeting', TRUE);
        $namaruangan = $this->input->post('namaruangan', TRUE);
        $kapasitas = $this->input->post('kapasitasruangan', TRUE);
        $lokasi = $this->input->post('lokasi', TRUE);
        $fasilitas = $this->input->post('fasilitas', TRUE);
        $this->Model_insertnewmeeting->savedata($idruangan, $namaruangan, $kapasitas, $lokasi, $fasilitas);
        $this->session->set_flashdata('msg', '<div class="alert alert-success">Product Saved</div>');
    }
}
