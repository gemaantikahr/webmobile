<?php
class Kegiatan extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('m_hari');
        $this->load->model('m_praktikum');
        $this->load->model('m_matakuliah');
        $this->load->model('m_tugas');
        $this->load->model('m_kegiatan');
        
		$this->load->library('form_validation');
    }
    
    function index(){
        $data['kegiatan']=$this->m_kegiatan->tampil_kegiatan();
        $this->load->view('admin/perkuliahan/kegiatan/v_tampil_kegiatan', $data);
    }

    function add_kegiatan(){
        $this->load->view('admin/perkuliahan/kegiatan/v_tambah_kegiatan');
    }

    function insert_kegiatan(){
        $nama = $this->input->post('xnama');
        $tanggal = $this->input->post('xtanggal');
        $tempat = $this->input->post('xtempat');
        $mulai = $this->input->post('xmulai');
        $selesai = $this->input->post('xselesai');
        $this->m_kegiatan->insert_kegiatan($nama, $tanggal, $tempat, $mulai, $selesai);
        $data['kegiatan']=$this->m_kegiatan->tampil_kegiatan();
        $this->load->view("depan/perkuliahan/v_tampil_kegiatan",$data);
    }

    function delete_kegiatan(){
        $id = $this->input->post('xid');
        $this->m_kegiatan->delete_kegiatan($id);
        redirect('admin/perkuliahan/kegiatan');
        
    }

    function edit_kegiatan($where){
        $data['editkegiatan'] = $this->m_kegiatan->editkegiatan($where);
        $this->load->view("admin/perkuliahan/kegiatan/v_edit_kegiatan", $data);
    }

    function update_kegiatan(){
        $id = $this->input->post('xid');
        $nama = $this->input->post('xnama');
        $tanggal = $this->input->post('xtanggal');
        $tempat = $this->input->post('xtempat');
        $mulai = $this->input->post('xmulai');
        $selesai = $this->input->post('xselesai');
        $this->m_kegiatan->update_kegiatan($id, $nama, $tanggal, $tempat, $mulai, $selesai);
        redirect('admin/perkuliahan/kegiatan');
    }

    function status_tugas(){
        $id = $this->input->post('xid');
        $status = $this->input->post('xstatus');
        $this->m_tugas->status_tugas($id,$status);
        redirect('admin/depan/perkuliahan/tampil_jadwal_tugas');
    }

    function status_kegiatan(){
        $id = $this->input->post('xid');
        $status = $this->input->post('xstatus');
        $this->m_kegiatan->status_kegiatan($id, $status);
        redirect('admin/depan/perkuliahan/tampil_jadwal_kegiatan');
    }


}