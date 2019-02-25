<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_perkuliahan extends CI_Model{
    
    function tampil_perkuliahan(){
        $query=$this->db->query("SELECT *FROM tbl_hari");
        return $query->result();
    }
    function tampil_jadwal(){
        $query=$this->db->query("SELECT tbl_matakuliah.nama_matkul, tbl_matakuliah.hari AS harikuliah, tbl_matakuliah.jam_mulai AS mulaikuliah, tbl_matakuliah.jam_selesai AS selesaikuliah, tbl_matakuliah.tempat AS tempatkuliah 
        FROM tbl_matakuliah GROUP BY tbl_matakuliah.nama_matkul");
        return $query->result();
    }
}