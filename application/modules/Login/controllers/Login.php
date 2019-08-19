<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_login');
    }

    public function index()
    {
        $this->load->view('view_login');
    }

    public function Process()
    {
        echo 'test';
    }

    function Auth()
    {
        $username = $this->input->post('username', TRUE);
        $password = md5($this->input->post('password', TRUE));
        $validate = $this->Model_login->validate($username, $password);
        if ($validate->num_rows() > 0) {
            $data = $validate->row_array();
            $name = $data['employeename'];
            $username = $data['username'];
            $level = $data['level'];
            $sesdata = array(
                'nama' => $name,
                'user' => $username,
                'level' => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            // access untuk admin 
            if ($level === '0') {
                redirect("Antrianadmin/index");
            } elseif ($level === '1') {
                redirect("Antrianuser/index");
            }
        } else {
            echo $this->session->set_flashdata('msg', 'Username atau Password Salah !');
            redirect('Login/index');
        }
    }

    // function Check_login()
    // {
    //     if (isset($_POST['login'])) {
    //         $user = $this->input->post('user', true);
    //         $pass = $this->input->post('pass', true);
    //         $cek = $this->Model_login->proseslogin($user, $pass);
    //         $hasil = count($cek);
    //         if ($hasil > 0) {
    //             $pelogin = $this->Queque->get_where('employee', array('username' => $user, 'password' => $pass))->row();
    //             if ($pelogin->status == 'admin') {
    //                 redirect('Antrianadmin/index');
    //             } elseif ($pelogin->status == 'user') {
    //                 redirect('Antrianuser/index');
    //             }
    //         } else {
    //             redirect('Login/index');
    //         }
    //     }
    // }

    // function Logout()
    // {
    //     $this->session->sess_destroy();
    //     redirect(base_url());
    // }
}
