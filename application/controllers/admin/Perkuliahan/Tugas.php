<?php
class Tugas extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('m_hari');
        $this->load->model('m_praktikum');
        $this->load->model('m_matakuliah');
        $this->load->model('m_tugas');
		$this->load->library('form_validation');
    }
    
    function index(){
        $data['tugas']=$this->m_tugas->tampil_tugas();
        $this->load->view('admin/perkuliahan/tugas/v_tampil_tugas', $data);
    }


}