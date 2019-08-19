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
    public function validate($username, $password)
    {
        $this->Queque->where('username', $username);
        $this->Queque->where('password', $password);
        $result = $this->Queque->get('employee', 1);
        return $result;
    }
}
