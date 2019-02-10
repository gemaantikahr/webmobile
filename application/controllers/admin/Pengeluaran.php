<?php
class Pengeluaran extends CI_Controller{
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

    function add_pengeluaran(){
        $this->load->view('admin/pengeluaran/v_tambah_pengeluaran');
    }

    function simpan_pengeluaran(){
        $namapengeluaran = $this->input->post("xnamapengeluaran");
        $jumlahpengeluaran = $this->input->post("xjumlahpengeluaran");
        $tempat = $this->input->post("xtempat");
        $this->m_saldo->simpan_saldo_pengeluaran($jumlahpengeluaran);
        $this->m_pengeluaran->simpan_pengeluaran($namapengeluaran, $jumlahpengeluaran, $tempat);
        redirect("admin/pengeluaran");
    }

    function tampil_pengeluaran(){
        $data['pengeluaran']=$this->m_pengeluaran->tampil_pengeluaran();
        $this->load->view("admin/pengeluaran/v_tampil_pengeluaran", $data);
    }

    function delete_pengeluaran(){
        $xid = $this->input->post('xid');
        $this->m_pengeluaran->delete_pengeluaran($xid);
        redirect("admin/pengeluaran");
    }

    function edit_pengeluaran($id){
        $where = array('id_pengeluaran'=>$id);
        $data['pengeluaran']=$this->m_pengeluaran->edit_pengeluaran($where, 'tbl_pengeluaran');
        $this->load->view("admin/pengeluaran/v_edit_pengeluaran", $data);
    }

    function update_pengeluaran(){
        $id = $this->input->post('xid');
        $namapengeluaran = $this->input->post('xnama');
        $jumlahpengeluaran = $this->input->post('xharga');
        $tempat = $this->input->post('xtempat');
        $this->m_pengeluaran->update_pengeluaran($id,$namapengeluaran, $jumlahpengeluaran, $tempat);
        redirect('admin/pengeluaran');
    }

}