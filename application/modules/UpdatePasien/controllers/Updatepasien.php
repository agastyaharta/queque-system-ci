<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Updatepasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_updatepasien');
    }

    // public function 
    public function index()
    {
        $data['active'] = "UpdatePasien";

        $data_get_update = $this->Model_updatepasien->get_keluhan();
        $data['dt_get_update'] = $data_get_update;

        $this->load->view('view_updatepasien', $data);
    }

    public function ShowUpdateItem()
    {
        $data['active'] = "UpdatePasien";
    }

    public function ProcessUpdateItem()
    {
        $data_update['IdRegistration'] = $this->input->post('IdItem');
        $data_update['diagnosa'] = $this->input->post('Diag');
        $data_update['alergi'] = $this->input->post('Alg');
        $data_update['obat'] = $this->input->post('Obt');
        $data_update['tekanan_darah'] = $this->input->post('Tkn_drh');

        $this->Model_updatepasien->Update_Keluhan($data_update);
    }
}
