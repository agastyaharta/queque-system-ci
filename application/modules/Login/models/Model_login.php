<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Model_login extends CI_Model
{
    public function __construct()
    {
        // ambil db dari database.php disini
        parent::__construct();
        $this->Queque = $this->load->database('Queque', TRUE);
    }


    # LOGIN -----------------------------------------------------------------------
    //parameter input $userid sama $passwd
    function check_login($userid, $passwd)
    {
        // masukin query disini
        $sql = "SELECT * FROM employee WHERE employeeuser='$userid' AND employeepassword='$passwd' LIMIT 1";
        $query = $this->Queque->query($sql);
        if ($query) return $query->result_array();
    }

    // REMOVE LATER IF NECESSARY

    // function count_user()
    // {

    //     $sql = "SELECT COUNT(*) AS numrows FROM tb_user";
    //     $query = $this->Snapcard->WHERE("status", "0");
    //     return $this->db->get();
    // }
}
