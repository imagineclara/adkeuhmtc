<?php 

class m_inventaris extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->library('upload','form_validation');
    }
    function getInventaris()
    {
        return $this->db->query("select * from inventaris");
    }
    
    function insertInventaris($nama_barang, $jumlah, $kondisi)
    {
        $data = array(
            'nama_barang'   => $nama_barang,
            'jumlah'        => $jumlah,
            'kondisi'       => $kondisi
            );
        $this->db->insert('inventaris',$data);
    }
}

?>