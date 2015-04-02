<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Indikator extends CI_Controller  {
		function __construct(){
			parent::__construct();
			$this--->load->model("tb_det_penilaian");
		}

		public function index()
		{
			$data['list'] = $this->tb_det_model->allIndikator();
			$this->load->view('ipmpab', $data);
		}

		public function addIndikator()
		{
			//Function yang dipanggil ketika ingin melakukan add produk kemudian menampilkan add_Indikator_view
		}

		public function addIndikatorDb()
		{
			//Function yang dipanggil ketika ingin memasukan produk ke dalam database
		}

		public function updateIndikator()
		{
			//Function yang dipanggil ketika ingin melakukan update produk kemudian menampilkan update_Indikator_view
		}

		public function updateIndikatorDb()
		{
			//Function yang dipanggil ketika ingin melakukan update terhadap produk yang ada di dalam database
		}

		public function deleteIndikatorDb()
		{
			//Function yang dipanggil ketika ingin melakukan delete produk dari database
		}
	}

?>