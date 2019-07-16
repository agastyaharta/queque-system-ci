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
    function check_login($userid, $pass)
    {

        // masukin query disini
        $this->Queque->select('*');
        $this->Queque->from('employee');
        $this->Queque->where('employeeuser', $userid);
        $this->Queque->where('employeepassword', $pass);
        $this->Queque->limit(1);
        $this->load->database('Queque', TRUE);
        $query = $this->Queque->get('employee');
        return $query->row();
    }
}
 