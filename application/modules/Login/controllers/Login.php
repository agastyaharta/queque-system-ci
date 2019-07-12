<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //ngeload model duluan
        $this->load->model('Model_login');
        $this->no_cache();
    }

    protected function no_cache()
    {
        header('Cache-Control: no-store, no-cache, must-revalidate');
        header('Cache-Control: post-check=0, pre-check=0', false);
        header('Pragma: no-cache');
    }

    public function index()
    {

        if ($this->session->userdata('login')) {
            redirect('Login/Check_login');
        }
        // masih bingung yg ini codingannya yg mana 
        else {
            redirect('Login/Check_login');
        }
    }

    // pake employeeuser sama employeepassword
    function Check_login()
    {
        if ($this->session->userdata('login')) {
            redirect('Login/index');
        } else {
            if ($this->input->post('login_submit')) {
                # Ambil data dari form
                $userid = strtoupper($this->input->post('employeeuser'));
                $passwd = $this->input->post('employeepassword');
                $pass = md5($passwd);
                $query = $this->Queque->get('employee');

                $data = $this->Model_login->check_login($userid, $pass);
                if ($data <> NULL) {
                    foreach ($data as $row) {
                        $this->session->set_employeedata('employeeuser', $row['userid']);
                    }
                    redirect('Login/index');
                } elseif ($data <> NULL) {
                    $this->session->set_flashdata("error_message", ERROR_LOGIN_1);
                    redirect('Login/check_login');
                }
            } else {
                // $this->load->view('template/template_header');
                $this->load->view('Login/view_login');
                // $this->load->view('template/template_footer');
            }
        }


        function Logout()
        {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }
}
