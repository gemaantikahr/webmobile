
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_tugas extends CI_Model{

    public function tampil_deadline(){
        $query = $this->db->query("SELECT *FROM tbl_tugas WHERE status_tugas='belum' GROUP BY deadline ");
        return $query->result();
    }

    function tampil_tugas(){
        return $this->db->get('tbl_tugas')->result();
        return $query->result();
    }

    public function insert_tugas($nama, $deadline, $status, $ket){
        $tanggal = date("Y-m-d H:i:s");
        $query = $this->db->query("INSERT INTO tbl_tugas(nama_tugas, deadline, status_tugas, keterangan, tanggal)
        VALUES('$nama', '$deadline', '$status', '$ket', '$tanggal')");
        return $query;
    }

    function delete_tugas($where){
        $query = $this->db->query("DELETE FROM tbl_tugas WHERE id_tugas = '$where'");
        return $query;
    }

    function edittugas($where){
        $query = $this->db->query("SELECT *FROM tbl_tugas WHERE id_tugas='$where'");
        return $query->result();
    }

    function update_tugas($nama, $deadline, $status, $ket, $id){
        $tanggal = date("Y-m-d H:i:s");
        $query = $this->db->query("UPDATE tbl_tugas SET nama_tugas='$nama', deadline='$deadline', status_tugas='$status', keterangan='$ket', tanggal='$tanggal'
        WHERE id_tugas='$id'");
        return $query;
    }

    function tampil_tugas_selesai(){
        $query = $this->db->query("SELECT *FROM tbl_tugas WHERE status_tugas='selesai'");
        return $query->result();
    }

    function status_tugas($id,$status){
        $query = $this->db->query("UPDATE tbl_tugas SET status_tugas='$status' WHERE id_tugas='$id'");
        return $query;
    }

}