<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends Admin {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_grafik');
	}
	public function grafik()
	{
		$this->is_allowed('grafik');
		$pengisi = $this->Model_grafik->getDataPekerjaan('');
		$sedang_bekerja = $this->Model_grafik->getDataPekerjaan('yes');
		$tidak_bekerja 	= $this->Model_grafik->getDataPekerjaan('no');	 
		$jmlPengisi = count($sedang_bekerja)+count($tidak_bekerja);
		$jmlSedangBekerja = (count($sedang_bekerja)/$jmlPengisi)*100;
		$data = [
			'jmlSedangBekerja' 	=> count($sedang_bekerja),
			'jmlTidakBekerja' 	=> count($tidak_bekerja)
		];
		$this->render('backend/standart/report/grafik', $data);
	}

}

/* End of file Report.php */
/* Location: ./application/controllers/administrator/Report.php */