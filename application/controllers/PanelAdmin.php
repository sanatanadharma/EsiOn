<?php
	session_start();
	class PanelAdmin extends CI_Controller {

		public function __construct() {
			parent::__construct();
			if ($this->session->userdata('level')!="1") {
				redirect('Otentifikasi');
			}
			$this->load->model("tb_login");

		}

		public function index() {
			$data['username'] = $this->session->userdata('username');
			$data['daftar'] = $this->tb_login->admin();
				$this->load->view('share/head', $data);
				$this->load->view('share/nav/nav_bar');
				$this->load->view('share/nav/nav_open');
				$this->load->view('share/nav/nav_su');
				$this->load->view('share/nav/nav_admin');
				$this->load->view('share/nav/nav_close');
				$this->load->view('paneladmin/index');
				$this->load->view('share/foot');
		}

		public function addAdmin() {
			$data['username'] = $this->session->userdata('username');
				$this->load->view('share/head', $data);
				$this->load->view('share/nav/nav_bar');
				$this->load->view('share/nav/nav_open');
				$this->load->view('share/nav/nav_su');
				$this->load->view('share/nav/nav_admin');
				$this->load->view('share/nav/nav_close');
				$this->load->view('paneladmin/add');
				$this->load->view('share/foot');
		}

		public function addAdminDb() {
    	if ($this->form_validation->run()==true){
    		$tambah = array (
					'username' =>$this->input->post('username'),
					'password' =>$this->input->post('password'),
					'level' =>2
        );
				$this->tb_login->add($tambah);
        redirect("paneladmin");
	    }

	    else
	    {
				$this->load->view('paneladmin/gagal');
	    } 
		}

	}
?>