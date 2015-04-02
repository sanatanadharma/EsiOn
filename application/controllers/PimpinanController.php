<?php
	session_start();
	class PimpinanController extends CI_Controller {

		public function __construct() {
			parent::__construct();
			if ($this->session->userdata('level')!="3") {
				redirect('Otentifikasi');
			}
			$this->load->helper('text');
		}

		public function index() {
			$data['username'] = $this->session->userdata('username');
			$this->load->view('pimpinan/index', $data);
		}

			public function logout() {
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('level');
			session_destroy();
			redirect('Otentifikasi');
		}
	}
?>