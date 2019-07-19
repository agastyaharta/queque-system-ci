<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Model_antrian extends CI_Model
{
    public function __construct()
    {
        // ambil db dari database.php disini
        parent::__construct();
        $this->Snapcard = $this->load->database('Snapcard', TRUE);
    }

    public function fetch_data()
    {
        $sql = "SELECT registration.`registrationid`, patient.`patientname`
        FROM registration
        INNER JOIN patient ON patient.`patientid` = registration.`patientid`
        WHERE registration.`statuss` = 'Valid' AND registration.`doctorid` IS NULL
        ORDER BY registrationdate ";

        $query = $this->Snapcard->query($sql);
        if ($query) return $query->result_array();
    }
}
