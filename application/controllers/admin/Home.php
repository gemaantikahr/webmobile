<?php
class Home extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('m_saldo');
        $this->load->model('m_pengeluaran');
        $this->load->model('m_pemasukan');
        $this->load->model('m_perkuliahan');
		$this->load->library('form_validation');
	}


	function index(){
        $data['saldo']=$this->m_saldo->tampil_saldo();
        $data['pemasukan']=$this->m_pemasukan->tampil_pemasukan();
        $data['pengeluaran']=$this->m_pengeluaran->tampil_pengeluaran();
        $data['hari']=$this->m_perkuliahan->tampil_perkuliahan();
        $data['jadwal']=$this->m_perkuliahan->tampil_jadwal();
        
        $this->load->view("depan/perkuliahan/v_jadwal_kuliah", $data);
    }

}