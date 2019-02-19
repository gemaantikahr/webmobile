
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_hari extends CI_Model{

    public function tampil_hari(){
        return $this->db->get('tbl_hari')->result();
    }

}