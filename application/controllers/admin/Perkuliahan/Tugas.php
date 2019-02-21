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

    function add_tugas(){
        $data['namatugas']=$this->m_matakuliah->tampil_matkul();
        $this->load->view('admin/perkuliahan/tugas/v_tambah_tugas', $data);
    }

    function insert_tugas(){
        $nama = $this->input->post('xnama');
        $deadline = $this->input->post('xdeadline');
        $status = $this->input->post('xstatus');
        $ket = $this->input->post('xketerangan');
        $this->m_tugas->insert_tugas($nama, $deadline, $status, $ket);
        $data['deadline']=$this->m_tugas->tampil_deadline();
        $data['tugas']=$this->m_tugas->tampil_tugas();
        $data['tugasselesai']=$this->m_tugas->tampil_tugas_selesai();
        $this->load->view("depan/perkuliahan/v_tampil_tugas", $data);
    }

    function delete_tugas(){
        $id= $this->input->post('xid');
        $this->m_tugas->delete_tugas($id);
        redirect('admin/perkuliahan/tugas');
    }

    function edit_tugas($where){
        $data['edittugas'] = $this->m_tugas->edittugas($where);
        $this->load->view("admin/perkuliahan/tugas/v_edit_tugas", $data);
    }

    function update_tugas(){
        $id = $this->input->post('xid');
        $nama = $this->input->post('xnama');
        $deadline = $this->input->post('xdeadline');
        $status = $this->input->post('xstatus');
        $ket = $this->input->post('xketerangan');
        $this->m_tugas->update_tugas($nama, $deadline, $status, $ket, $id);
        redirect("admin/perkuliahan/tugas");
    }

    function status_tugas(){
        $id = $this->input->post('xid');
        $status = $this->input->post('xstatus');
        $this->m_tugas->status_tugas($id,$status);
        redirect('admin/depan/perkuliahan/tampil_jadwal_tugas');
    }


}