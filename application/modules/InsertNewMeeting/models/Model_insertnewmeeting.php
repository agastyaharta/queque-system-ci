<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Model_insertnewmeeting extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->Queque = $this->load->database('Queque', TRUE);
    }

    public function savedata($idruangan, $namaruangan, $kapasitas, $lokasi, $fasilitas)
    {
        $data = array(
            'roomid' => $idruangan,
            'roomname' => $namaruangan,
            'capacity' => $kapasitas,
            'location' => $lokasi,
            'facility' => $fasilitas,
            'status' => '1'
        );
        $this->Queque->insert('meetingroom', $data);
    }
}
