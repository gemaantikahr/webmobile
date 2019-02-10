<?php

class Overview extends CI_Controller {
    public function __construct()
    {
	parent::__construct();
	$this->load->model('m_saldo');
	$this->load->library('form_validation');
	}

	public function index()
	{
	$data['banyaksaldo'] = $this->m_saldo->tampil_saldo();
        // load view admin/overview.php
        $this->load->view("admin/overview", $data);
	}
}
