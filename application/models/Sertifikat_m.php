<?php

class Sertifikat_m extends CI_Model
{
	function validate($kode)
	{
		$this->db->from('tb_sertifikat');
		$this->db->where('kode',$kode);
		$query = $this->db->get();
		return $query;
	}

	public function get_by_kode($kode = null)
	{
		$this->db->from('tb_sertifikat');
		$this->db->where('kode', $kode);
		$query = $this->db->get();
		return $query;
	}

	public function getByEmail($kode = null, $keperluan = null)
	{
		$this->db->from('tb_sertifikat');
		$this->db->where('email', $kode);
		$this->db->where('keperluan', $keperluan);
		$query = $this->db->get();
		return $query;
	}
}
