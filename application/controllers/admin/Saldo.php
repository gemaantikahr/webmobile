<?php
class Pengeluaran extends CI_Controller{
	function __construct(){
		parent::__construct();
        $this->load->model('m_pengeluaran');
        $this->load->model('m_pemasukan');
        $this->load->model(m_saldo);
		$this->load->library('form_validation');
	}


	function index(){
        $data['pemasukan']=$this->m_pemasukan->tampil_pemasukan();
        $data['pengeluaran']=$this->m_pengeluaran->tampil_pengeluaran();
        $this->load->view("depan/home", $data);
    }
    

}