
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_pemasukan extends CI_Model{

    function tampil_pemasukan(){
        return $this->db->get('tbl_pemasukan')->result();
    }

    function delete_pemasukan($xid){
        $query = $this->db->query("DELETE FROM tbl_pemasukan WHERE id_pemasukan='$xid'");
        return $query;
    }

    function simpan_pemasukan($namapemasukan, $jumlahpemasukan, $keterangan){
        $tanggal = date("Y-m-d H:i:s");
        $query = $this->db->query("INSERT INTO tbl_pemasukan (nama_pemasukan,jumlah_pemasukan, keterangan, waktu)
        VALUES ('$namapemasukan','$jumlahpemasukan','$keterangan', '$tanggal')");
        return $query;  
    }

    function total_pemasukan(){
        $query = $this->db->query("SELECT SUM(jumlah_pemasukan) as jumlah_pemasukan from tbl_pemasukan");
        return $query->result();
    }


}