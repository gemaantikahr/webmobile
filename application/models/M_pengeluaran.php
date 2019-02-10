
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_pengeluaran extends CI_Model{

    function tampil_pengeluaran(){
        return $this->db->get('tbl_pengeluaran')->result();
    }

    function simpan_pengeluaran($namapengeluaran, $jumlahpengeluaran, $tempat){
        $tanggal = date("Y-m-d H:i:s");
        $query = $this->db->query("INSERT INTO tbl_pengeluaran (nama_pengeluaran,jumlah_pengeluaran, tempat, waktu)
        VALUES ('$namapengeluaran','$jumlahpengeluaran','$tempat', '$tanggal')");
        return $query;   
    }

    function delete_pengeluaran($xid){
        $query = $this->db->query("DELETE FROM tbl_pengeluaran WHERE id_pengeluaran='$xid'");
        return $query;
    }

    function edit_pengeluaran($where, $table){
        return $this->db->get_where($table, $where)->result();
    }

    function update_pengeluaran($id, $namapengeluaran, $jumlahpengeluaran, $tempat){
        $query = $this->db->query("UPDATE tbl_pengeluaran set nama_pengeluaran='$namapengeluaran', jumlah_pengeluaran='$jumlahpengeluaran', tempat='$tempat'
        WHERE id_pengeluaran='$id'");
        return $query;
    }

    function total_pengeluaran(){
        $query = $this->db->query("SELECT SUM(jumlah_pengeluaran) as jumlah_pengeluaran from tbl_pengeluaran");
        return $query->result();
    }


}