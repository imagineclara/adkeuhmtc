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
        $data = array(
            'tanggal_masuk' => $tanggal_masuk,
            'no_surat'      => $no_surat,
            'tujuan'        => $tujuan,
            'subjek'        => $subjek,
            'tanggal_acara' => $tanggal_acara
            );
        $this->db->insert('surat_masuk',$data);
        // $this->db->query("update user set no_telp = '$no' where nrp_user = '$nrp'");
    }
}

?>