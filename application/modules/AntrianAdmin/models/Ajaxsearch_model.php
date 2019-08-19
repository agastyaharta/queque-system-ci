<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Model_login extends CI_Model
{
    function fetch_data($query)
    {
        // masukin querynya disini
        $this->Queque->select("*");
        $this->db->from("registration");
    }
}
