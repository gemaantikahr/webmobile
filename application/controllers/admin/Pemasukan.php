<?php
class Pemasukan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_saldo');
        $this->load->model('m_pengeluaran');
        $this->load->model('m_pemasukan');
		$this->load->library('form_validation');
	}


	function index(){
        $data['pemasukan']=$this->m_pemasukan->tampil_pemasukan();
        $data['pengeluaran']=$this->m_pengeluaran->tampil_pengeluaran();
        $this->load->view("depan/home", $data);
    }

    function tampil_pemasukan(){
        $data['pemasukan']=$this->m_pemasukan->tampil_pemasukan();
        $this->load->view("admin/pemasukan/v_tampil_pemasukan", $data);
	}
	
	function delete_pemasukan(){
		$xid = $this->input->post('xid');
        $this->m_pemasukan->delete_pemasukan($xid);
        redirect("admin/pemasukan");
	}

	function add_pemasukan(){
		$this->load->view('admin/pemasukan/v_tambah_pemasukan');
	}

	function simpan_pemasukan(){
		$namapemasukan = $this->input->post("xnamapemasukan");
        $jumlahpemasukan = $this->input->post("xjumlahpemasukan");
		$keterangan = $this->input->post("xketerangan");
		$this->m_saldo->simpan_saldo_pemasukan($jumlahpemasukan);
        $this->m_pemasukan->simpan_pemasukan($namapemasukan, $jumlahpemasukan, $keterangan);
        redirect("admin/pemasukan/tampil_pemasukan");
	}

}