<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class tb_login extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('tb_login', $data);
			return $query;
		}

	}

?>