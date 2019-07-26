<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_grafik extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getDataPekerjaan($where = NULL)
	{
		$this->db->select('sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_');
		$this->db->from('form_formtracer');
		$this->db->where('sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_', $where);
		$query = $this->db->get();
		$execute = $query->result();
		return $execute;
	}

	public function getDataKeterkaitanPekerjaan($where = NULL)
	{
		$this->db->select('hubungan_antara_bidang_studi_dengan_pekerjaan_anda_');
		$this->db->from('form_formtracer');
		$this->db->where('hubungan_antara_bidang_studi_dengan_pekerjaan_anda_', $where);
		$query = $this->db->get();
		$execute = $query->result();
		return $execute;
	}

	public function getDataBiayaKuliah($where = NULL)
	{
		$this->db->select('sebutkan_sumberdana_dalam_pembiayaan_kuliah_');
		$this->db->from('form_formtracer');
		$this->db->where('sebutkan_sumberdana_dalam_pembiayaan_kuliah_', $where);
		$query = $this->db->get();
		$execute = $query->result();
		return $execute;
	}

}

/* End of file Model_grafik.php */
/* Location: ./application/models/Model_grafik.php */