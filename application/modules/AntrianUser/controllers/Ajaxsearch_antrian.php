<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajaxsearch_antrian extends CI_Controller
{

    function index()
    {
        $this->load->view('Antrian/Ajaxsearch_antrian');
    }

    // fetching data from model 
    function fetch()
    {
        $output = '';
        $query = '';
        $this->load->model('Ajaxsearch_model');
        if ($this->input->post('query')) {
            $query = $this->input->post('query');
        }
        $data = $this->ajaxsearch_model->fetch_data($query);
        $output .= '
        $table = $this->
        <div class="table-responsive">
            <table id="lookup" class="table table-bordered table-striped">
                <tr>
                <th>ID Registrasi</th>
                <th>Nama Pasien</th>
                <th>Action</th>
                <th>Postal Code</th>
                <th>Country</th>
                </tr>
        ';
    }
}
