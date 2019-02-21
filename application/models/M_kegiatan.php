<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_kegiatan extends CI_Model{

    public function tampil_kegiatan(){
        return $this->db->get('tbl_kegiatan')->result();
    }

    public function insert_kegiatan($nama, $tanggal, $tempat, $mulai, $selesai){
        $status = "belum";
        $query = $this->db->query("INSERT INTO tbl_kegiatan(nama_kegiatan, tanggal, tempat, jam_mulai, jam_selesai, status_kegiatan)
        VALUES('$nama', '$tanggal', '$tempat', '$mulai', '$selesai', '$status')");
        return $query;
    }

    function editkegiatan($where){
        $query = $this->db->query("SELECT *FROM tbl_kegiatan WHERE id_kegiatan='$where'");
        return $query->result();
    }

    function update_kegiatan($id, $nama, $tanggal, $tempat, $mulai, $selesai){
        
        $query = $this->db->query("UPDATE tbl_kegiatan SET nama_kegiatan='$nama', tanggal='$tanggal', tempat='$tempat', jam_mulai='$mulai', jam_selesai='$selesai'
        WHERE id_kegiatan='$id'");
        return $query;
    }

    function delete_kegiatan($id){
        $query = $this->db->query("DELETE FROM tbl_kegiatan WHERE id_kegiatan='$id'");
        return $query;
    }

    function status_kegiatan($id, $status){
        $query = $this->db->query("UPDATE tbl_kegiatan SET status_kegiatan='$status' WHERE id_kegiatan='$id'");
        return $query;
    }



}