<?php
	session_start();
	class AdminController extends CI_Controller {

		public function __construct() {
			parent::__construct();
			if ($this->session->userdata('level')=="3") {
				redirect('Otentifikasi');
			}
		}

		public function index() {
			$data['username'] = $this->session->userdata('username');
			$this->load->view('share/head', $data);
			$this->load->view('share/nav/nav_bar');
			$this->load->view('share/nav/nav_open');
			if ($this->session->userdata('level')=="1"){
				$this->load->view('share/nav/nav_su');
			}
			$this->load->view('share/nav/nav_admin');
			$this->load->view('share/nav/nav_close');
			$this->load->view('admin/index');
			$this->load->view('share/foot');
		}

		public function logout() {
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('level');
			session_destroy();
			redirect('Otentifikasi');
		}
	}
?>