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
		$this->form_validation->set_rules('npm', 'NPM', 'trim|required|max_length[7]|callback_valid_number');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('no_hp', 'No. Hp', 'trim|callback_valid_number');
		$this->form_validation->set_rules('nama_depan', 'Nama Depan', 'trim|required|max_length[100]|alpha');
		$this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'trim|required|max_length[100]|alpha');
		$this->form_validation->set_rules('alamat_rumah', 'Alamat Rumah', 'trim|required');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'npm' => $this->input->post('npm'),
				'email' => $this->input->post('email'),
				'no_hp' => $this->input->post('no_hp'),
				'nama_depan' => $this->input->post('nama_depan'),
				'nama_belakang' => $this->input->post('nama_belakang'),
				'alamat_rumah' => $this->input->post('alamat_rumah'),
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