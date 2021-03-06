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
    public function getSurat_keluar_internal()
    {
        return $this->db->query("select * from surat_keluar_a");
    }
    public function getSurat_keluar_eksternal()
    {
        return $this->db->query("select * from surat_keluar_b");
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
    }
    function insertSurat_keluar_a($tanggal_surat, $no_surat, $tujuan, $subjek)
    {
        $data = array(
            'tanggal_surat' => $tanggal_surat,
            'no_surat'      => $no_surat,
            'tujuan'        => $tujuan,
            'subjek'        => $subjek,
            );
        $this->db->insert('surat_keluar_a',$data);
    }
    function insertSurat_keluar_b($tanggal_surat, $no_surat, $tujuan, $subjek)
    {
        $data = array(
            'tanggal_surat' => $tanggal_surat,
            'no_surat'      => $no_surat,
            'tujuan'        => $tujuan,
            'subjek'        => $subjek,
            );
        $this->db->insert('surat_keluar_b',$data);
    }
}

?>