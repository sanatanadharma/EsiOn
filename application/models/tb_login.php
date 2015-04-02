<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class tb_login extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('tb_login', $data);
			return $query;
		}

		public function admin() {
      $query = $this->db->get_where("tb_login","level = 2");
      return $query;
    }

		public function pimpinan() {
      $query = $this->db->get_where("tb_login","level = 3");
      return $query;
    }

    function add($tambah)
    {
        $this->db->insert('tb_login', $tambah);
    }

	}
?>