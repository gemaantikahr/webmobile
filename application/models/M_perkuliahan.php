<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_perkuliahan extends CI_Model{
    
    function tampil_perkuliahan(){
        $query=$this->db->query("SELECT *FROM tbl_hari");
        return $query->result();
    }
    function tampil_jadwal(){
        $query=$this->db->query("SELECT tbl_matakuliah.nama_matkul, tbl_matakuliah.hari AS harikuliah, tbl_matakuliah.jam_mulai AS mulaikuliah, tbl_matakuliah.jam_selesai AS selesaikuliah, tbl_matakuliah.tempat AS tempatkuliah,
        tbl_praktikum.nama_praktikum, tbl_praktikum.hari AS haripraktikum, tbl_praktikum.jam_mulai AS mulaipraktikum, tbl_praktikum.jam_selesai AS selesaipraktikum, tbl_praktikum.tempat AS tempatpraktikum 
        FROM tbl_matakuliah, tbl_praktikum");
        return $query->result();
    }

}