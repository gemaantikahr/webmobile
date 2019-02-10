<?php
class Transaksi extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_transaksi');
		$this->load->library('upload');
	}


	function index(){
		$data['tabletransaksi']=$this->m_transaksi->get_transaksi();
		$data['transaksi']=$this->m_transaksi->get_all_transaksi();
        $this->load->view('admin/transaksi/v_tampil_transaksi', $data);
	}
	
	function add(){
		$data['sekolah'] = $this->m_transaksi->get_sekolah();
		$data['buku'] = $this->m_transaksi->get_buku();
		$this->load->view('admin/transaksi/v_tambah_transaksi', $data);
	}

	function simpan_transaksi(){
		$idsekolah = $this->input->post('xsekolah');
		$idbarang = $this->input->post('xbarang');
		$jumlah = count($idbarang);
		for($x=0;$x<$jumlah;$x++){
            $this->m_transaksi->simpan_transaksi($idsekolah, $idbarang[$x]);
        }
		redirect('admin/transaksi/kecil');
	}

	function delete_sekolah(){
		$id = $this->input->post('xid');
		$this->m_transaksi->delete_sekolah($id);
		redirect('admin/transaksi');
	}

	function kecil(){
		$data['tabletransaksi']=$this->m_transaksi->get_transaksi();
		$data['transaksi']=$this->m_transaksi->get_all_transaksi();
		$data['kecil']=$this->m_transaksi->transaksi_kecil();
        $this->load->view('admin/transaksi/v_transaksi_kecil', $data);
	}

	public function lanjutkan($where){
		$data['detailtransaksi']=$this->m_transaksi->detail_transaksi($where);
		$data['totalharga']=$this->m_transaksi->detail_harga($where);
		$data['namasekolah']=$this->m_transaksi->nama_sekolah($where);
        $this->load->view("admin/transaksi/v_transaksi_lanjut", $data);
    }

    
}