<?php 

class database extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    function loginpinjam($user, $pass)
    {
        $this->db->where('nama_admin', $user);
        $this->db->where('pass_admin', $pass);
        $data = $this->db->get('adminlab');
        $jml_hasil = $data->num_rows();

        if ($jml_hasil > 0)
            return TRUE;
        else
            return FALSE;
    }
}
