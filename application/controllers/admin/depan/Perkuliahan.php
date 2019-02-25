<?php
class Perkuliahan extends CI_Controller{
	function __construct(){
		parent::__construct();
        $this->load->model('m_saldo');
        $this->load->model('m_pengeluaran');
        $this->load->model('m_pemasukan');
        $this->load->model('m_perkuliahan');
        $this->load->model('m_tugas');
        $this->load->model('m_kegiatan');
        $this->load->model('m_praktikum');
		$this->load->library('form_validation');
	}


	function index(){
		$data['matakuliah'] = $this->m_matakuliah->tampil_matkul();
        $this->load->view("admin/perkuliahan/v_tampil_matakuliah", $data);
	}
    
    function tampil_jadwal_kuliah(){
        $data['hari']=$this->m_perkuliahan->tampil_perkuliahan();
        $data['jadwal']=$this->m_perkuliahan->tampil_jadwal();
        $data['jadwalpraktikum']=$this->m_praktikum->tampil_jadwal_praktikum();
        $this->load->view("depan/perkuliahan/v_jadwal_kuliah", $data);
    }

    function tampil_jadwal_tugas(){
        $data['deadline']=$this->m_tugas->tampil_deadline();
        $data['tugas']=$this->m_tugas->tampil_tugas();
        $data['tugasselesai']=$this->m_tugas->tampil_tugas_selesai();
        $this->load->view("depan/perkuliahan/v_tampil_tugas", $data);
    }

    function tampil_jadwal_kegiatan(){
        $data['kegiatan']=$this->m_kegiatan->tampil_kegiatan();
        $this->load->view("depan/perkuliahan/v_tampil_kegiatan",$data);
    }

}