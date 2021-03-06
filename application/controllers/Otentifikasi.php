<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Otentifikasi extends CI_Controller {

		public function index() {
			$this->load->view('login/login');
		}

		public function cek_login() {
			$data = array('username' => $this->input->post('username', TRUE),
							'password' => $this->input->post('password', TRUE) //md5($this->input->post('password', TRUE))
				);
			$this->load->model('tb_login'); // load tb_login
			$hasil = $this->tb_login->cek_user($data);
			if ($hasil->num_rows() == 1) {
				foreach ($hasil->result() as $sess) {
					$sess_data['logged_in'] = 'Sudah Loggin';
					$sess_data['id'] = $sess->id;
					$sess_data['username'] = $sess->username;
					$sess_data['level'] = $sess->level;
					$this->session->set_userdata($sess_data);
				}
				if ($this->session->userdata('level')=='1') {
					redirect('SuController');
				}
				if ($this->session->userdata('level')=='2') {
					redirect('AdminController');
				}
				elseif ($this->session->userdata('level')=='3') {
					redirect('PimpinanController');
				}		
			}
			else {
				echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
			}
		}
	}
?>