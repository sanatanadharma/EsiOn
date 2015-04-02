<?php
	session_start();
	class IpMpab extends CI_Controller {

		public function __construct(){
			parent::__construct();
			if ($this->session->userdata('level')=="3") {
				redirect('Otentifikasi');
			}
			$this->load->model("tb_det_penilaian");
		}

		public function index() {
			$data['username'] = $this->session->userdata('username');
			$data['daftar'] = $this->tb_det_penilaian->indikatorMpab();
				$this->load->view('share/head', $data);
				$this->load->view('share/nav/nav_bar');
				$this->load->view('share/nav/nav_open');
				if ($this->session->userdata('level')=="1"){
					$this->load->view('share/nav/nav_su');
				}
				$this->load->view('share/nav/nav_admin');
				$this->load->view('share/nav/nav_close');
				$this->load->view('ipmpab/index');
				$this->load->view('share/foot');
		}

		public function addIpMpab() {
			$data['username'] = $this->session->userdata('username');
				$this->load->view('share/head', $data);
				$this->load->view('share/nav/nav_bar');
				$this->load->view('share/nav/nav_open');
				if ($this->session->userdata('level')=="1"){
					$this->load->view('share/nav/nav_su');
				}
				$this->load->view('share/nav/nav_admin');
				$this->load->view('share/nav/nav_close');
				$this->load->view('ipmpab/add');
				$this->load->view('share/foot');
		}

		public function addIpMpabDb() {
			$this->form_validation->set_rules('indikator','indikator','required');
    	if ($this->form_validation->run()==true){
    		$tambah = array (
					'indikator' =>$this->input->post('indikator'),
					'id_jk'=>1
        );
				$this->tb_det_penilaian->addIndikator($tambah);
        redirect("ipmpab");
	    }

	    else
	    {
				$this->load->view('ipmpab/gagal');
	    } 
		}

		public function updateIpMpab($id_det_penilaian) {
			$data['id_det_penilaian'] = $this->tb_det_penilaian->getIndikator($id_det_penilaian);
			$data['indikator'] = $this->tb_det_penilaian->getIndikator($id_det_penilaian);
      $this->load->view('ipmpab/update', $data);
		}

		public function updateIpMpabDb()
		{
      $data = array(
				'id_det_penilaian' => $this->input->post('id_det_penilaian'),
				'indikator' => $this->input->post('indikator')
			);
      $cek_id['id_det_penilaian'] = $this->input->post('id_det_penilaian');
      $this->tb_det_penilaian->updateIndikator($data, $cek_id);
      //print_r($data);
			redirect('ipmpab');
		}

		public function deleteIpMpabDb($id_det_penilaian)
		{
      $this->tb_det_penilaian->deleteIndikator($id_det_penilaian);
      redirect('ipmpab');
		}

	}
?>