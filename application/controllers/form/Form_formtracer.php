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
		$this->form_validation->set_rules('lama_waktu_yang_di_habiskan_untuk_memperoleh_pekerjaan_pertama_', 'Lama Waktu Yang Di Habiskan Untuk Memperoleh Pekerjaan Pertama?', 'trim|required');
		$this->form_validation->set_rules('perkuliahan', 'Perkuliahan', 'trim|required');
		$this->form_validation->set_rules('demonstrasi', 'Demonstrasi', 'trim|required');
		$this->form_validation->set_rules('input123', 'Input123', 'trim|required');
		$this->form_validation->set_rules('custom_option1', 'Custom Option1', 'trim|required');
		$this->form_validation->set_rules('custom_option2', 'Custom Option2', 'trim|required');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'nomor_mahasiswa' => $this->input->post('nomor_mahasiswa'),
				'kode_pt' => $this->input->post('kode_pt'),
				'tahun_lulus' => $this->input->post('tahun_lulus'),
				'kode_prodi' => $this->input->post('kode_prodi'),
				'nama' => $this->input->post('nama'),
				'nomor_telephone_handphone' => $this->input->post('nomor_telephone_handphone'),
				'alamat_email' => $this->input->post('alamat_email'),
				'lama_waktu_yang_di_habiskan_untuk_memperoleh_pekerjaan_pertama_' => $this->input->post('lama_waktu_yang_di_habiskan_untuk_memperoleh_pekerjaan_pertama_'),
				'sebutkan_sumber_dana_dalam_pembiayaan_kuliah_' => $this->input->post('sebutkan_sumber_dana_dalam_pembiayaan_kuliah_'),
				'perkuliahan' => $this->input->post('perkuliahan'),
				'demonstrasi' => $this->input->post('demonstrasi'),
				'input123' => $this->input->post('input123'),
				'custom_option1' => $this->input->post('custom_option1'),
				'custom_option2' => $this->input->post('custom_option2'),
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