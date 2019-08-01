<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //ngeload model duluan
        $this->load->model('Model_login');
    }

    public function index()
    {
        if ($this->session->userdata('login')) {
            redirect('Antrian');
        } else {
            redirect('Login/Check_login');
        }
        // $this->load->view('Login/view_login');
    }

    function Check_login()
    {
        if ($this->session->userdata('login')) {
            redirect('Login/index');
        } else {
            // fungsi di buttonya
            if ($this->input->post('login_submit')) {
                $userid = strtoupper($this->input->post('userid'));
                $passwd = $this->input->post('password');
                $pass = md5($passwd);

                $data = $this->Model_login->check_login($userid, $pass);
                if ($data <> NULL) {
                    foreach ($data as $row) {
                        // yang ini masih bingung buat apaan ya 
                        $this->session->set_userdata('status', $row['status']);
                        $this->session->set_userdata('nama_user', $row['nama_user']);
                        $this->session->set_userdata('userid', $row['userid']);
                        $this->session->set_userdata('numrows', $row['numrows']);
                        $this->session->set_userdata('login', TRUE);
                    }
                    redirect('login/index');
                } elseif ($data == NULL) {
                    $this->session->set_flashdata("error_message", ERROR_MSG_1);
                    redirect('login/check_login');
                } else {
                    $this->load->view('Login/view_login');
                }
            }
        }
    }
    function Logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}


    // public function run()
    // {
    //     $username = $this->input->post("username", TRUE);
    //     $password = $this->input->post("password", TRUE);
    //     $submit = $this->input->post("submit", TRUE);

    //     if ($submit == "Submit") { } else {
    //         show_404();
    //     }
    // }





    // // protected function no_cache()
    // // {
    // //     header('Cache-Control: no-store, no-cache, must-revalidate');
    // //     header('Cache-Control: post-check=0, pre-check=0', false);
    // //     header('Pragma: no-cache');
    // // }

    // public function index()
    // {

    //     $session = $this->session->userdata(isLogin);
    //     if ($session == FALSE) {
    //         $this->load->view('Login/view_login');
    //     } else {
    //         redirect('Antrian/view_antrian');
    //     }

    //     // if ($this->session->userdata('login')) {
    //     //     redirect('Login/Check_login');
    //     // }
    //     // masih bingung yg ini codingannya yg mana 
    //     // else {
    //     //     redirect('Login/view_login');
    //     // }
    // }

    // // belom selesaii 

    // function do_login()
    // {
    //     $userid = $this->input->post('employeeuser');
    //     $passwd = $this->input->post('employeepassword');

    //     $cek = $this->Model_login->check_login($userid, md5($passwd));
    //     if (count($cek) == 1) {
    //         foreach ($cek as $cek) { }
    //     }
    // }
    // // pake employeeuser sama employeepassword
    // function Check_login()
    // {
    //     if ($this->session->userdata('login')) {
    //         redirect('Login/index');
    //     } else {
    //         if ($this->input->post('login_submit')) {
    //             # Ambil data dari form
    //             $userid = strtoupper($this->input->post('employeeuser'));
    //             $passwd = $this->input->post('employeepassword');
    //             $pass = md5($passwd);
    //             $query = $this->Queque->get('employee');

    //             $data = $this->Model_login->check_login($userid, $pass);
    //             if ($data <> NULL) {
    //                 foreach ($data as $row) {
    //                     $this->session->set_employeedata('employeeuser', $row['userid']);
    //                 }
    //                 redirect('Login/index');
    //             } elseif ($data <> NULL) {
    //                 $this->session->set_flashdata("error_message", ERROR_LOGIN_1);
    //                 redirect('Login/check_login');
    //             }
    //         } else {
    //             // $this->load->view('template/template_header');
    //             $this->load->view('Login/view_login');
    //             // $this->load->view('template/template_footer');
    //         }
    //     }


    //     function Logout()
    //     {
    //         $this->session->sess_destroy();
    //         redirect(base_url());
    //     }
    // }
// }
