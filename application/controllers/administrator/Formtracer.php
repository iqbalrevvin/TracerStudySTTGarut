<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Formtracer Controller
*| --------------------------------------------------------------------------
*| Formtracer site
*|
*/
class Formtracer extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_formtracer');
	}

	/**
	* show all Formtracers
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('formtracer_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['formtracers'] = $this->model_formtracer->get($filter, $field, $this->limit_page, $offset);
		$this->data['formtracer_counts'] = $this->model_formtracer->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/formtracer/index/',
			'total_rows'   => $this->model_formtracer->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Formtracer List');
		$this->render('backend/standart/administrator/formtracer/formtracer_list', $this->data);
	}
	
	
	
	/**
	* delete Formtracers
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('formtracer_delete');

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
            set_message(cclang('has_been_deleted', 'formtracer'), 'success');
        } else {
            set_message(cclang('error_delete', 'formtracer'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Formtracers
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('formtracer_view');

		$this->data['formtracer'] = $this->model_formtracer->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Formtracer Detail');
		$this->render('backend/standart/administrator/formtracer/formtracer_view', $this->data);
	}
	
	/**
	* delete Formtracers
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$formtracer = $this->model_formtracer->find($id);

		
		
		return $this->model_formtracer->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('formtracer_export');

		$this->model_formtracer->export('formtracer', 'formtracer');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('formtracer_export');

		$this->model_formtracer->pdf('formtracer', 'formtracer');
	}
}


/* End of file formtracer.php */
/* Location: ./application/controllers/administrator/Formtracer.php */