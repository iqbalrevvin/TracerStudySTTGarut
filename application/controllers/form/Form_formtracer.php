<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Form Formtracer Controller
*| --------------------------------------------------------------------------
*| Form Formtracer site
*|
*/
class Form_formtracer extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_form_formtracer');
	}

	/**
	* Submit Form Formtracers
	*
	*/
	public function submit()
	{
		$this->form_validation->set_rules('nomor_mahasiswa', 'Nomor Mahasiswa', 'trim|required|max_length[7]');
		$this->form_validation->set_rules('kode_pt', 'Kode PT', 'trim|required|max_length[6]|callback_valid_number');
		$this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'trim|required|max_length[4]');
		$this->form_validation->set_rules('kode_prodi', 'Kode Prodi', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|max_length[25]');
		$this->form_validation->set_rules('nomor_telephone_handphone', 'Nomor Telephone/ Handphone', 'trim|required');
		$this->form_validation->set_rules('alamat_email', 'Alamat Email', 'trim|required');
		$this->form_validation->set_rules('waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan', 'Waktu Yang Dihabiskan Untuk Memeproleh Pekerjaan', 'trim|required');
		$this->form_validation->set_rules('sebutkan_sumberdana_dalam_pembiayaan_kuliah_', 'Sebutkan Sumberdana Dalam Pembiayaan Kuliah?', 'trim|required');
		$this->form_validation->set_rules('sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_', 'Sedang Bekerja (termasuk Kerja Sambilan Dan Wirausaha) ?', 'trim|required');
		$this->form_validation->set_rules('hubungan_antara_bidang_studi_dengan_pekerjaan_anda_', 'Hubungan Antara Bidang Studi Dengan Pekerjaan Anda?', 'trim|required');
		$this->form_validation->set_rules('tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_', 'Tingkat Pendidikan Yang Tepat/sesuai Untuk Pekerjaan Saat Ini?', 'trim|required');
		$this->form_validation->set_rules('kira_kira_berapa_pendapatan_anda_setiap_bulannya_', 'Kira-kira Berapa Pendapatan Anda Setiap Bulannya?', 'trim|required|callback_valid_number');
		$this->form_validation->set_rules('perkuliahan', 'Perkuliahan', 'trim|required');
		$this->form_validation->set_rules('desmonstrasi', 'Desmonstrasi', 'trim|required');
		$this->form_validation->set_rules('partisipasi_dalam_proyek_riset', 'Partisipasi Dalam Proyek Riset', 'trim|required');
		$this->form_validation->set_rules('magang', 'Magang', 'trim|required');
		$this->form_validation->set_rules('praktikum', 'Praktikum', 'trim|required');
		$this->form_validation->set_rules('kerja_lapangan', 'Kerja Lapangan', 'trim|required');
		$this->form_validation->set_rules('diskusi', 'Diskusi', 'trim|required');
		$this->form_validation->set_rules('mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_', 'Mulai Mencari Pekerjaan, (pekerjaan Sambilan Tidak Dimasukan)', 'trim|required');
		$this->form_validation->set_rules('bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu[]', 'Bagaimana Cara Pekerjaan Tersebut? Jawaban Bisa Lebih Dari Satu', 'trim|required');
		$this->form_validation->set_rules('berapa_perusahaan_yang_dilamar_lewat_surat_email_', 'Berapa Perusahaan Yang Dilamar (lewat Surat/email)', 'trim|required|callback_valid_number');
		$this->form_validation->set_rules('_jumlah_perusahaan_yang_merespons_lamaran_anda_', ' Jumlah Perusahaan Yang Merespons Lamaran Anda?', 'trim|required|callback_valid_number');
		$this->form_validation->set_rules('jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_', 'Jumlah Perusahaan Yang Mengundang Anda Untuk Wawancara?', 'trim|required|callback_valid_number');
		$this->form_validation->set_rules('bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu[]', 'Bagaimana Situasi Anda Saat Ini? Jawaban Bisa Lebih Dari Satu', 'trim|required');
		$this->form_validation->set_rules('apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_', 'Apakah Anda Aktif Mencari Pekerjaan Dalam 4 Minggu Terkahir?', 'trim|required');
		$this->form_validation->set_rules('apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_', 'Apa Jenis Perusahaan Tempat Anda Bekerja Sekarang?', 'trim|required');
		$this->form_validation->set_rules('jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_', 'Jika Pekerjaan Tidak Sesuai, Kenapa Mengambilnya?', 'trim|required');
		$this->form_validation->set_rules('pengetahuan_di_bidang_atau_disiplin_ilmu_anda', 'Pengetahuan Di Bidang Atau Disiplin Ilmu Anda', 'trim|required');
		$this->form_validation->set_rules('pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda', 'Pengetahuan Di Luar Bidang Atau Disiplin Ilmu Anda', 'trim|required');
		$this->form_validation->set_rules('pengetahuan_umum', 'Pengetahuan Umum', 'trim|required');
		$this->form_validation->set_rules('bahasa_inggris', 'Bahasa Inggris', 'trim|required');
		$this->form_validation->set_rules('ketrampilan_internet_', 'Ketrampilan Internet ', 'trim|required');
		$this->form_validation->set_rules('ketrampilan_komputer', 'Ketrampilan Komputer', 'trim|required');
		$this->form_validation->set_rules('berpikir_kritis_', 'Berpikir Kritis ', 'trim|required');
		$this->form_validation->set_rules('ketrampilan_riset', 'Ketrampilan Riset', 'trim|required');
		$this->form_validation->set_rules('kemampuan_belajar', 'Kemampuan Belajar', 'trim|required');
		$this->form_validation->set_rules('kemampuan_berkomunikasi', 'Kemampuan Berkomunikasi', 'trim|required');
		$this->form_validation->set_rules('bekerja_di_bawah_tekanan', 'Bekerja Di Bawah Tekanan', 'trim|required');
		$this->form_validation->set_rules('manajemen_waktu', 'Manajemen Waktu', 'trim|required');
		$this->form_validation->set_rules('bekerja_secara_mandiri', 'Bekerja Secara Mandiri', 'trim|required');
		$this->form_validation->set_rules('bekerja_dalam_tim_bekerjasama_dengan_orang_lain', 'Bekerja Dalam Tim/bekerjasama Dengan Orang Lain', 'trim|required');
		$this->form_validation->set_rules('kemampuan_dalam_memecahkan_masalah', 'Kemampuan Dalam Memecahkan Masalah', 'trim|required');
		$this->form_validation->set_rules('negosiasi_', 'Negosiasi ', 'trim|required');
		$this->form_validation->set_rules('kemampuan_untuk_terus_belajar_sepanjang_hayat', 'Kemampuan Untuk Terus Belajar Sepanjang Hayat', 'trim|required');
		$this->form_validation->set_rules('input', 'Input', 'trim|required');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'nomor_mahasiswa' => $this->input->post('nomor_mahasiswa'),
				'kode_pt' => $this->input->post('kode_pt'),
				'tahun_lulus' => $this->input->post('tahun_lulus'),
				'kode_prodi' => $this->input->post('kode_prodi'),
				'nama' => $this->input->post('nama'),
				'nomor_telephone_handphone' => $this->input->post('nomor_telephone_handphone'),
				'alamat_email' => $this->input->post('alamat_email'),
				'waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan' => $this->input->post('waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan'),
				'sebutkan_sumberdana_dalam_pembiayaan_kuliah_' => $this->input->post('sebutkan_sumberdana_dalam_pembiayaan_kuliah_'),
				'sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_' => $this->input->post('sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_'),
				'hubungan_antara_bidang_studi_dengan_pekerjaan_anda_' => $this->input->post('hubungan_antara_bidang_studi_dengan_pekerjaan_anda_'),
				'tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_' => $this->input->post('tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_'),
				'kira_kira_berapa_pendapatan_anda_setiap_bulannya_' => $this->input->post('kira_kira_berapa_pendapatan_anda_setiap_bulannya_'),
				'perkuliahan' => $this->input->post('perkuliahan'),
				'desmonstrasi' => $this->input->post('desmonstrasi'),
				'partisipasi_dalam_proyek_riset' => $this->input->post('partisipasi_dalam_proyek_riset'),
				'magang' => $this->input->post('magang'),
				'praktikum' => $this->input->post('praktikum'),
				'kerja_lapangan' => $this->input->post('kerja_lapangan'),
				'diskusi' => $this->input->post('diskusi'),
				'mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_' => $this->input->post('mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_'),
				'bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu' => implode(',', (array) $this->input->post('bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu')),
				'berapa_perusahaan_yang_dilamar_lewat_surat_email_' => $this->input->post('berapa_perusahaan_yang_dilamar_lewat_surat_email_'),
				'_jumlah_perusahaan_yang_merespons_lamaran_anda_' => $this->input->post('_jumlah_perusahaan_yang_merespons_lamaran_anda_'),
				'jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_' => $this->input->post('jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_'),
				'bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu' => implode(',', (array) $this->input->post('bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu')),
				'apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_' => $this->input->post('apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_'),
				'apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_' => $this->input->post('apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_'),
				'jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_' => $this->input->post('jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_'),
				'pengetahuan_di_bidang_atau_disiplin_ilmu_anda' => $this->input->post('pengetahuan_di_bidang_atau_disiplin_ilmu_anda'),
				'pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda' => $this->input->post('pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda'),
				'pengetahuan_umum' => $this->input->post('pengetahuan_umum'),
				'bahasa_inggris' => $this->input->post('bahasa_inggris'),
				'ketrampilan_internet_' => $this->input->post('ketrampilan_internet_'),
				'ketrampilan_komputer' => $this->input->post('ketrampilan_komputer'),
				'berpikir_kritis_' => $this->input->post('berpikir_kritis_'),
				'ketrampilan_riset' => $this->input->post('ketrampilan_riset'),
				'kemampuan_belajar' => $this->input->post('kemampuan_belajar'),
				'kemampuan_berkomunikasi' => $this->input->post('kemampuan_berkomunikasi'),
				'bekerja_di_bawah_tekanan' => $this->input->post('bekerja_di_bawah_tekanan'),
				'manajemen_waktu' => $this->input->post('manajemen_waktu'),
				'bekerja_secara_mandiri' => $this->input->post('bekerja_secara_mandiri'),
				'bekerja_dalam_tim_bekerjasama_dengan_orang_lain' => $this->input->post('bekerja_dalam_tim_bekerjasama_dengan_orang_lain'),
				'kemampuan_dalam_memecahkan_masalah' => $this->input->post('kemampuan_dalam_memecahkan_masalah'),
				'negosiasi_' => $this->input->post('negosiasi_'),
				'kemampuan_untuk_terus_belajar_sepanjang_hayat' => $this->input->post('kemampuan_untuk_terus_belajar_sepanjang_hayat'),
				'input' => $this->input->post('input'),
			];

			
			$save_form_formtracer = $this->model_form_formtracer->store($save_data);

			$this->data['success'] = true;
			$this->data['id'] 	   = $save_form_formtracer;
			$this->data['message'] = cclang('your_data_has_been_successfully_submitted');
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}

	
}


/* End of file form_formtracer.php */
/* Location: ./application/controllers/administrator/Form Formtracer.php */