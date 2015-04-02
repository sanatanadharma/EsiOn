<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct() {
			parent::__construct();
			if ($this->session->userdata('level')=="1") {
				redirect('SuController');
			}
			if ($this->session->userdata('level')=="2") {
				redirect('AdminController');
			}
			if ($this->session->userdata('level')=="3") {
				redirect('PimpinanController');
			}
			elseif ($this->session->userdata('level')=="") {
				redirect('Otentifikasi');
			}
			$this->load->helper('text');
		}

	public function index() {
		$this->load->view('login/login');
	}
}