
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_saldo extends CI_Model{

    function tampil_saldo(){
        $query = $this->db->query("SELECT SUM(jumlah_saldo) as jumlah_saldo FROM tbl_saldo");
        return $query->result();
    }

    function simpan_saldo_pengeluaran($jumlahpengeluaran){
        $waktu = date("Y-m-d H:i:s");
        $query = $this->db->query("INSERT INTO tbl_saldo (jumlah_saldo, waktu) VALUES ('-$jumlahpengeluaran', '$waktu') ");
        return $query;        
    }

    function simpan_saldo_pemasukan($jumlahpemasukan){
        $waktu = date("Y-m-d H:i:s");
        $query = $this->db->query("INSERT INTO tbl_saldo (jumlah_saldo, waktu) VALUES ('$jumlahpemasukan', '$waktu') ");
        return $query;
    }

}