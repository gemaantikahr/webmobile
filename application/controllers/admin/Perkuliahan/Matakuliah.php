<?php
class Matakuliah extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_matakuliah');
		$this->load->model('m_hari');
		$this->load->library('form_validation');
	}


	function index(){
		$data['matakuliah'] = $this->m_matakuliah->tampil_matkul();
        $this->load->view("admin/perkuliahan/v_tampil_matakuliah", $data);
	}
	
	function delete_matakuliah(){
		$idmatkul = $this->input->post('xid');
		$this->m_matakuliah->delete_matakuliah($idmatkul);
		redirect('admin/perkuliahan/matakuliah');
	}

	function edit_matkul($idmatkul){
		$data['hari'] = $this->m_hari->tampil_hari();
		$data['editmatkul']= $this->m_matakuliah->editmatkul($idmatkul);
		$this->load->view('admin/perkuliahan/v_edit_matakuliah', $data);
	}

	function update_matakuliah(){
		$id = $this->input->post('xid');
		$matkul = $this->input->post('xnamamatkul');
		$kelas = $this->input->post('xkelas');
		$sks = $this->input->post('xsks');
		$semester = $this->input->post('xsemester');
		$dosen = $this->input->post('xnamadosen');
		$hari = $this->input->post('xhari');
		$mulai = $this->input->post('xmulai');
		$selesai = $this->input->post('xselesai');
		$tempat = $this->input->post('xtempat');

		$this->m_matakuliah->update_matakuliah($id, $matkul, $kelas, $sks, $semester, $dosen, $hari, $mulai, $selesai, $tempat);
		redirect('admin/perkuliahan/matakuliah');
	}


	function add_matkul(){
		$data['hari'] = $this->m_hari->tampil_hari();
		$this->load->view("admin/perkuliahan/v_tambah_matkul", $data);
	}

	function insert_matkul(){
		$matkul = $this->input->post('xnamamatkul');
		$kelas = $this->input->post('xkelas');
		$sks = $this->input->post('xsks');
		$semester = $this->input->post('xsemester');
		$dosen = $this->input->post('xnamadosen');
		$hari = $this->input->post('xhari');
		$mulai = $this->input->post('xmulai');
		$selesai = $this->input->post('xselesai');
		$tempat = $this->input->post('xtempat');
		$this->m_matakuliah->add_matkul($matkul, $kelas, $sks, $semester, $dosen, $hari, $mulai, $selesai, $tempat);
		redirect('admin/perkuliahan/matakuliah');
	}

	function lihat_presensi(){
		$this->load->view("depan/perkuliahan/v_presensi");
	}


}