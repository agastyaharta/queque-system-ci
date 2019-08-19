<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Model_ruangmeeting extends CI_Model
{
    public function __construct()
    {

        // ambil db dari database.php disini
        parent::__construct();
        $this->Queque = $this->load->database('Queque', TRUE);
    }


    // masih salah 
    public function fetch_data()
    {
        $this->Queque->select('*');
        $this->Queque->from('meetingroom');
        return $this->Queque->get();
    }
}
