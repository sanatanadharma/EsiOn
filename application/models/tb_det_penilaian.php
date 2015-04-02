<?php
    class tb_det_penilaian extends CI_Model  {
        function __construct() { 
            parent::__construct(); } 

    public function indikatorMpab() {
        $query = $this->db->get_where("tb_det_penilaian","id_jk = 1");
        return $query;
    }

    public function indikatorDmo() {
        $query = $this->db->get_where("tb_det_penilaian","id_jk = 2");
        return $query;
    }

    public function indikatorTot() {
        $query = $this->db->get_where("tb_det_penilaian","id_jk = 2");
        return $query;
    }

    public function getIndikator($id_det_penilaian)
    {
        $this->db->select("*");
        $this->db->from("tb_det_penilaian");
        $this->db->where('id_det_penilaian', $id_det_penilaian);
        return $this->db->get();
    }

    public function addIndikator($tambah)
    {
        $this->db->insert('tb_det_penilaian', $tambah);
    }

    public function updateIndikator($data, $cek_id)
    {
        $this->db->where($cek_id);
        $this->db->update('tb_det_penilaian', $data);
    }

    public function deleteIndikator($id_det_penilaian)
    {
        $this->db->where("id_det_penilaian",$id_det_penilaian);
        $this->db->delete("tb_det_penilaian");
    }
}