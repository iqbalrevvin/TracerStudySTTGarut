<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_form_formtracer extends MY_Model {

	private $primary_key 	= 'id';
	private $table_name 	= 'form_formtracer';
	private $field_search 	= ['nomor_mahasiswa', 'kode_pt', 'tahun_lulus', 'kode_prodi', 'nama', 'nomor_telephone_handphone', 'alamat_email', 'waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan', 'sebutkan_sumberdana_dalam_pembiayaan_kuliah_', 'sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_', 'hubungan_antara_bidang_studi_dengan_pekerjaan_anda_', 'tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_', 'kira_kira_berapa_pendapatan_anda_setiap_bulannya_', 'perkuliahan', 'desmonstrasi', 'partisipasi_dalam_proyek_riset', 'magang', 'praktikum', 'kerja_lapangan', 'diskusi', 'mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_', 'bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu', 'berapa_perusahaan_yang_dilamar_lewat_surat_email_', '_jumlah_perusahaan_yang_merespons_lamaran_anda_', 'jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_', 'bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu', 'apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_', 'apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_', 'jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_', 'pengetahuan_di_bidang_atau_disiplin_ilmu_anda', 'pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda', 'pengetahuan_umum', 'bahasa_inggris', 'ketrampilan_internet_', 'ketrampilan_komputer', 'berpikir_kritis_', 'ketrampilan_riset', 'kemampuan_belajar', 'kemampuan_berkomunikasi', 'bekerja_di_bawah_tekanan', 'manajemen_waktu', 'bekerja_secara_mandiri', 'bekerja_dalam_tim_bekerjasama_dengan_orang_lain', 'kemampuan_dalam_memecahkan_masalah', 'negosiasi_', 'kemampuan_untuk_terus_belajar_sepanjang_hayat'];

	public function __construct()
	{
		$config = array(
			'primary_key' 	=> $this->primary_key,
		 	'table_name' 	=> $this->table_name,
		 	'field_search' 	=> $this->field_search,
		 );

		parent::__construct($config);
	}

	public function count_all($q = null, $field = null)
	{
		$iterasi = 1;
        $num = count($this->field_search);
        $where = NULL;
        $q = $this->scurity($q);
		$field = $this->scurity($field);

        if (empty($field)) {
	        foreach ($this->field_search as $field) {
	            if ($iterasi == 1) {
	                $where .= $field . " LIKE '%" . $q . "%' ";
	            } else {
	                $where .= "OR " . $field . " LIKE '%" . $q . "%' ";
	            }
	            $iterasi++;
	        }

	        $where = '('.$where.')';
        } else {
        	$where .= "(" . $field . " LIKE '%" . $q . "%' )";
        }

        $this->db->where($where);
		$query = $this->db->get($this->table_name);

		return $query->num_rows();
	}

	public function get($q = null, $field = null, $limit = 0, $offset = 0, $select_field = [])
	{
		$iterasi = 1;
        $num = count($this->field_search);
        $where = NULL;
        $q = $this->scurity($q);
		$field = $this->scurity($field);

        if (empty($field)) {
	        foreach ($this->field_search as $field) {
	            if ($iterasi == 1) {
	                $where .= $field . " LIKE '%" . $q . "%' ";
	            } else {
	                $where .= "OR " . $field . " LIKE '%" . $q . "%' ";
	            }
	            $iterasi++;
	        }

	        $where = '('.$where.')';
        } else {
        	$where .= "(" . $field . " LIKE '%" . $q . "%' )";
        }

        if (is_array($select_field) AND count($select_field)) {
        	$this->db->select($select_field);
        }

        $this->db->where($where);
        $this->db->limit($limit, $offset);
        $this->db->order_by($this->primary_key, "DESC");
		$query = $this->db->get($this->table_name);

		return $query->result();
	}

}

/* End of file Model_form_formtracer.php */
/* Location: ./application/models/Model_form_formtracer.php */