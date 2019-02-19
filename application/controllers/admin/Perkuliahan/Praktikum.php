<?php
class Praktikum extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('m_hari');
        $this->load->model('m_praktikum');
		$this->load->model('m_matakuliah');
		$this->load->library('form_validation');
    }
    
    function index(){
        $data['praktikum']=$this->m_praktikum->tampil_praktikum();
        $this->load->view('admin/perkuliahan/praktikum/v_tampil_praktikum', $data);
    }

    function add_praktikum(){
        $data['hari'] = $this->m_hari->tampil_hari();
        $data['namaprak']=$this->m_matakuliah->tampil_matkul();
        $this->load->view('admin/perkuliahan/praktikum/v_tambah_praktikum', $data);
    }

    function insert_praktikum(){
        $nama = $this->input->post('xnama');
        $asisten = $this->input->post('xnamaasisten');
        $hari = $this->input->post('xhari');
        $jammulai = $this->input->post('xmulai');
        $jamselesai = $this->input->post('xselesai');
        $tempat = $this->input->post('xtempat');
        $this->m_praktikum->insert_praktikum($nama, $asisten, $hari, $jammulai, $jamselesai, $tempat);
        redirect('admin/perkuliahan/praktikum');
    }

    function edit_praktikum($where){
        $data['hari'] = $this->m_hari->tampil_hari();
        $data['praktikum'] = $this->m_praktikum->edit_tampil_praktikum($where);
        $this->load->view('admin/perkuliahan/praktikum/v_edit_praktikum', $data);
    }

    function update_praktikum(){
        $where = $this->input->post('xid');
        $nama = $this->input->post('xnama');
        $asisten = $this->input->post('xnamaasisten');
        $hari = $this->input->post('xhari');
        $jammulai = $this->input->post('xmulai');
        $jamselesai = $this->input->post('xselesai');
        $tempat = $this->input->post('xtempat');
        $this->m_praktikum->update_praktikum($nama, $asisten, $hari, $jammulai, $jamselesai, $tempat, $where);
        redirect('admin/perkuliahan/praktikum');
    }

    function delete_praktikum(){
        $where = $this->input->post('xid');
        $this->m_praktikum->delete_praktikum($where);
        redirect('admin/perkuliahan/praktikum');
    }

	



}