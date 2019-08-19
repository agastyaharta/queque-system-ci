<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Model_updatepasien extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->Queque = $this->load->database('Queque', TRUE);
    }


    function Update_Keluhan($data_update)
    {

        $data = array(
            // 'employeeid' => $data_update['id_pegawai'],

            'prediagnose' => $data_update['diagnosa'],
            'allergy' => $data_update['alergi'],
            'medication' => $data_update['obat'],
            'bloodpressure' => $data_update['tekanan_darah']
        );
        $this->db->where('registrationid', $data_update['IdItem']);
        $this->db->update('registration', $data);
    }

    function get_keluhan()
    {
        $this->Queque->select('*');
        $this->Queque->from('registration');
        $this->Queque->join('employee', 'employee.employeeid = registration.employeeid');

        return $this->Queque->get();
    }
}
