<?php
class Home extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('m_saldo');
        $this->load->model('m_pengeluaran');
        $this->load->model('m_pemasukan');
		$this->load->library('form_validation');
	}


	function index(){
        $data['saldo']=$this->m_saldo->tampil_saldo();
        $data['pemasukan']=$this->m_pemasukan->tampil_pemasukan();
        $data['pengeluaran']=$this->m_pengeluaran->tampil_pengeluaran();
        $this->load->view("depan/home", $data);
    }

}