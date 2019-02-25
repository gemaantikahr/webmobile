<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_praktikum extends CI_Model{

    public function tampil_praktikum(){
        return $this->db->get('tbl_praktikum')->result();
    }

    public function insert_praktikum($nama, $asisten, $hari, $jammulai, $jamselesai, $tempat){
        $query = $this->db->query("INSERT INTO tbl_praktikum(nama_praktikum, nama_asisten, hari, jam_mulai, jam_selesai, tempat)
        VALUES('$nama', '$asisten', '$hari', '$jammulai', '$jamselesai', '$tempat')");
        return $query;
    }
    
    public function edit_tampil_praktikum($where){
        $query = $this->db->query("SELECT *FROM tbl_praktikum WHERE id_praktikum='$where'");
        return $query->result();
    }

    public function update_praktikum($nama, $asisten, $hari, $jammulai, $jamselesai, $tempat, $where){
        $query = $this->db->query("UPDATE tbl_praktikum set nama_praktikum='$nama', nama_asisten='$asisten', hari='$hari', jam_mulai='$jammulai', jam_selesai='$jamselesai', tempat='$tempat'
        WHERE id_praktikum = '$where'");
        return $query;
    }

    public function delete_praktikum($where){
        $query = $this->db->query("DELETE FROM tbl_praktikum WHERE id_praktikum = '$where'");
        return $query;
    }

    function tampil_jadwal_praktikum(){
        $query = $this->db->query("SELECT tbl_praktikum.nama_praktikum, tbl_praktikum.hari, tbl_praktikum.jam_mulai, tbl_praktikum.jam_selesai, tbl_praktikum.tempat FROM tbl_praktikum, tbl_hari
        WHERE tbl_praktikum.hari = tbl_hari.nama_hari GROUP BY tbl_praktikum.nama_praktikum");
        return $query->result();
    }

    // public function delete_matakuliah($where){
    //     $query = $this->db->query("DELETE FROM tbl_matakuliah WHERE id_matkul='$where'");
    //     return $query;
    // }

    // function editmatkul($where, $table){
    //     return $this->db->get_where($table, $where)->result();
    // }

    // function add_matkul($matkul, $sks, $semester, $dosen, $hari, $mulai, $selesai, $tempat){
    //     $query = $this->db->query("INSERT INTO tbl_matakuliah(nama_matkul,sks_matkul,semester,nama_dosen,hari,jam_mulai,jam_selesai,tempat)
    //     VALUES ('$matkul', '$sks', '$semester', '$dosen', '$hari', '$mulai', '$selesai', '$tempat')");
    //     return $query;
    // }

    // function update_matakuliah($id, $matkul, $sks, $semester, $dosen, $hari, $mulai, $selesai, $tempat){
    //     $query = $this->db->query("UPDATE tbl_matakuliah SET nama_matkul='$matkul', sks_matkul='$sks', semester='$semester',nama_dosen='$dosen',
    //     hari='$hari',jam_mulai='$mulai',jam_selesai='$selesai',tempat='$tempat' WHERE id_matkul='$id'");
    //     return $query;
    // }
}