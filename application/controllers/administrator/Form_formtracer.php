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
	* show all Form Formtracers
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('form_formtracer_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['form_formtracers'] = $this->model_form_formtracer->get($filter, $field, $this->limit_page, $offset);
		$this->data['form_formtracer_counts'] = $this->model_form_formtracer->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/form_formtracer/index/',
			'total_rows'   => $this->model_form_formtracer->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Form Tracer Study List');
		$this->render('backend/standart/administrator/form_builder/form_formtracer/form_formtracer_list', $this->data);
	}

	/**
	* Update view Form Formtracers
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('form_formtracer_update');

		$this->data['form_formtracer'] = $this->model_form_formtracer->find($id);

		$this->template->title('Form Tracer Study Update');
		$this->render('backend/standart/administrator/form_builder/form_formtracer/form_formtracer_update', $this->data);
	}

	/**
	* Update Form Formtracers
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('form_formtracer_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
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

			
			$save_form_formtracer = $this->model_form_formtracer->change($id, $save_data);

			if ($save_form_formtracer) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/form_formtracer', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/form_formtracer');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
					set_message('Your data not change.', 'error');
					
            		$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/form_formtracer');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}

	/**
	* delete Form Formtracers
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('form_formtracer_delete');

		$this->load->helper('file');

		$arr_id = $this->input->get('id');
		$remove = false;

		if (!empty($id)) {
			$remove = $this->_remove($id);
		} elseif (count($arr_id) >0) {
			foreach ($arr_id as $id) {
				$remove = $this->_remove($id);
			}
		}

		if ($remove) {
            set_message(cclang('has_been_deleted', 'Form Formtracer'), 'success');
        } else {
            set_message(cclang('error_delete', 'Form Formtracer'), 'error');
        }

		redirect_back();
	}

	/**
	* View view Form Formtracers
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('form_formtracer_view');

		$this->data['form_formtracer'] = $this->model_form_formtracer->find($id);

		$this->template->title('Form Tracer Study Detail');
		$this->render('backend/standart/administrator/form_builder/form_formtracer/form_formtracer_view', $this->data);
	}

	/**
	* delete Form Formtracers
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$form_formtracer = $this->model_form_formtracer->find($id);

		
		return $this->model_form_formtracer->remove($id);
	}
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('form_formtracer_export');

		$this->model_form_formtracer->export('form_formtracer', 'form_formtracer');
	}
}


/* End of file form_formtracer.php */
/* Location: ./application/controllers/administrator/Form Formtracer.php */