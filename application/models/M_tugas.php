
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_tugas extends CI_Model{

    public function tampil_tugas(){
        return $this->db->get('tbl_tugas')->result();
    }

}