<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Model_antrian extends CI_Model
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
        $this->Queque->from('registration');
        $this->Queque->join('patient', 'patient.patientid = registration.patientid');
        // $this->Queque->get_where('registration.status = Valid');
        // $this->Queque->get_where('registration.employeeid', null);
        // $this->Queque->get_where('registration.registrationid');
        // $this->Queque->get('registration.registrationid, patient.patientname');
        // $sql = "SELECT registration.`registrationid`, patient.`patientname`FROM registration INNER JOIN patient ON patient.`patientid` = registration.`patientid` WHERE registration.`status` = 'Valid' AND registration.`employeeid` IS NULL AND  registration.`registrationid`";
        return $this->Queque->get();
    }
}
