<?php 

class m_surat extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->library('upload','form_validation');
    }
    function getSurat_masuk()
    {
        return $this->db->query("select * from surat_masuk");
    }
    function insertSurat_masuk($tanggal_masuk, $no_surat, $tujuan, $subjek, $tanggal_acara)
    {
        $this->db->query("insert into surat_masuk values($tanggal_masuk','$no_surat','$tujuan','$tanggal_acara')");
        // $this->db->query("update user set no_telp = '$no' where nrp_user = '$nrp'");
    }
}

?>