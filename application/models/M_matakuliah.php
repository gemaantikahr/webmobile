
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_matakuliah extends CI_Model{

    public function tampil_matkul(){
        return $this->db->get('tbl_matakuliah')->result();
    }

    public function delete_matakuliah($where){
        $query = $this->db->query("DELETE FROM tbl_matakuliah WHERE id_matkul='$where'");
        return $query;
    }

    function editmatkul($id){
        $query = $this->db->query("SELECT *FROM tbl_matakuliah WHERE id_matkul='$id'");
        return $query->result();
    }

    function add_matkul($matkul, $kelas, $sks, $semester, $dosen, $hari, $mulai, $selesai, $tempat){
        $query = $this->db->query("INSERT INTO tbl_matakuliah(nama_matkul, kelas, sks_matkul,semester,nama_dosen,hari,jam_mulai,jam_selesai,tempat)
        VALUES ('$matkul','$kelas', '$sks', '$semester', '$dosen', '$hari', '$mulai', '$selesai', '$tempat')");
        return $query;
    }

    function update_matakuliah($id, $matkul,$kelas, $sks, $semester, $dosen, $hari, $mulai, $selesai, $tempat){
        $query = $this->db->query("UPDATE tbl_matakuliah SET nama_matkul='$matkul', kelas='$kelas', sks_matkul='$sks', semester='$semester',nama_dosen='$dosen',
        hari='$hari',jam_mulai='$mulai',jam_selesai='$selesai',tempat='$tempat' WHERE id_matkul='$id'");
        return $query;
    }
}