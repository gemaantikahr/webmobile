<?php
class Laporan extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('m_saldo');
        $this->load->model('m_pengeluaran');
        $this->load->model('m_pemasukan');
		$this->load->library('form_validation');
	}


	function index(){
        $data['saldo']=$this->m_saldo->tampil_saldo();
        $data['pemasukan']=$this->m_pemasukan->total_pemasukan();
        $data['pengeluaran']=$this->m_pengeluaran->total_pengeluaran();
        $this->load->view("admin/keuangan/laporan/v_tampil_laporan", $data);
    }


}