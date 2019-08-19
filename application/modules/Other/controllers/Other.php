<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Other extends CI_Controller
{
    function index()
    {
        $this->load->view('view_sideadmin');
    }
}
