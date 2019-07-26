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
		/*START::GRAFIK BIAYA KULIAH*/
		$biayaSendiri = $this->Model_grafik->getDataBiayaKuliah('[1] Biaya Sendiri');
		$keluarga = $this->Model_grafik->getDataBiayaKuliah('[2] Keluarga');
		$beasiswaADIK = $this->Model_grafik->getDataBiayaKuliah('[3] Beasiswa ADIK');
		$beasiswaBidikmisi = $this->Model_grafik->getDataBiayaKuliah('[4] Beasiswa Bidikmisi');
		$beasiswaAFIRMASI = $this->Model_grafik->getDataBiayaKuliah('[5] Beasiswa AFIRMASI');
		$beasiswaNegeri = $this->Model_grafik->getDataBiayaKuliah('[6] Beasiswa Perusahaan Negeri');
		$beasiswaSwasta = $this->Model_grafik->getDataBiayaKuliah('[7] Beasiswa Perusahaan Swasta');
		$lainnya = $this->Model_grafik->getDataBiayaKuliah('[8] Lainnya. . . ');
		/*START::STATUS PEKERJAAN*/
		$pengisi = $this->Model_grafik->getDataPekerjaan('');
		$sedang_bekerja = $this->Model_grafik->getDataPekerjaan('yes');
		$tidak_bekerja 	= $this->Model_grafik->getDataPekerjaan('no');	 
		$jmlPengisi = count($sedang_bekerja)+count($tidak_bekerja);
		$jmlSedangBekerja = (count($sedang_bekerja)/$jmlPengisi)*100;
		/*END::STATUS PEKERJAAN*/
		/*START::KETERKAITAN BIDANG STUDI DAN PEKERJAAN*/
		$ktProdiPekerjaanSangatErat = $this->Model_grafik->getDataKeterkaitanPekerjaan('Sangat Erat');
		$ktProdiPekerjaanErat = $this->Model_grafik->getDataKeterkaitanPekerjaan('Erat');
		$ktProdiPekerjaanCukupErat = $this->Model_grafik->getDataKeterkaitanPekerjaan('Cukup Erat');
		$ktProdiPekerjaanKurangErat = $this->Model_grafik->getDataKeterkaitanPekerjaan('Kurang Erat');
		$ktProdiPekerjaanTidakSamaSekali = $this->Model_grafik->getDataKeterkaitanPekerjaan('Tidak Sama Sekali');
		/*END::KETERKAITAN BIDANG STUDI DAN PEKERJAAN*/
		$data = [
			'jmlSedangBekerja' 	=> count($sedang_bekerja),
			'jmlTidakBekerja' 	=> count($tidak_bekerja),
			'ktProdiPekerjaanSangatErat' => count($ktProdiPekerjaanSangatErat),
			'ktProdiPekerjaanErat' => count($ktProdiPekerjaanErat),
			'ktProdiPekerjaanCukupErat' => count($ktProdiPekerjaanCukupErat),
			'ktProdiPekerjaanKurangErat' => count($ktProdiPekerjaanKurangErat),
			'biayaSendiri' => count($biayaSendiri),
			'keluarga' => count($keluarga),
			'beasiswaADIK' => count($beasiswaADIK),
			'beasiswaBidikmisi' => count($beasiswaBidikmisi),
			'beasiswaAFIRMASI' => count($beasiswaAFIRMASI),
			'beasiswaNegeri' => count($beasiswaNegeri),
			'beasiswaSwasta' => count($beasiswaSwasta),
			'lainnya' => count($lainnya),
		];
		$this->render('backend/standart/report/grafik', $data);
	}

}

/* End of file Report.php */
/* Location: ./application/controllers/administrator/Report.php */