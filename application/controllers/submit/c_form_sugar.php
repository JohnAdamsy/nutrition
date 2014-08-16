<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
#processes form data before committing to the data-layer
class C_Form_Sugar extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function form_internalFort_A1() {
		$this -> load -> model('models_sugar/m_sugar_internalfort_a1');
		$this -> m_sugar_internalfort_a1 -> addRecord();

		if ($this -> m_sugar_internalfort_a1 -> response = 'ok') {
			//notify user of success
			$this->$data['form_id'] = "";
			$this->$data['form'] = '<p><b>' . $this -> m_sugar_internalfort_a1 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> m_sugar_internalfort_a1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			//$this -> load -> view('pages/vehicles/index', $data);
			$this->load_template_view();

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_A1()

	public function form_internalFort_B1() {
		$this -> load -> model('models_sugar/m_sugar_internalfort_b1');
		$this -> m_sugar_internalfort_b1 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> m_sugar_internalfort_b1 -> response = 'ok') {
			//notify user of success
			$this->$data['form_id'] = "";
			$this->$data['form'] = '<p><b>' . $this -> m_sugar_internalfort_b1 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> m_sugar_internalfort_b1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			//$this -> load -> view('pages/vehicles/index', $data);
			$this->load_template_view();

		} else {
			//notify user of error/failure
		}
		}
	public function form_internalFort_C1() {
		$this -> load -> model('models_sugar/m_sugar_internalfort_c1');
		$this -> m_sugar_internalfort_c1 -> addRecord();

		if ($this -> m_sugar_internalfort_c1 -> response = 'ok') {
			//notify user of success
			$this->$data['form_id'] = "";
			$this->$data['form'] = '<p><b>' . $this -> m_sugar_internalfort_c1 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> m_sugar_internalfort_c1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			//$this -> load -> view('pages/vehicles/index', $data);
			$this->load_template_view();

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_C1()
	
	public function form_internalFort_C2() {
		$this -> load -> model('models_sugar/m_sugar_internalfort_c2');
		$this -> m_sugar_internalfort_c2 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> m_sugar_internalfort_c2 -> response = 'ok') {
			//notify user of success
			$this->$data['form_id'] = "";
			$this->$data['form'] = '<p><b>' . $this -> m_sugar_internalfort_c2 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> m_sugar_internalfort_c2 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			//$this -> load -> view('pages/vehicles/index', $data);
			$this->load_template_view();

		} else {
			//notify user of error/failure
		}
	}//close form_internalFort_C1()
	
	public function form_internalFort_C3() {
		$this -> load -> model('models_sugar/m_sugar_internalfort_c3');
		$this -> m_sugar_internalfort_c3 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> m_sugar_internalfort_c3 -> response = 'ok') {
			//notify user of success
			$this->$data['form_id'] = "";
			$this->$data['form'] = '<p><b>' . $this -> m_sugar_internalfort_c3 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> m_sugar_internalfort_c3 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			//$this -> load -> view('pages/vehicles/index', $data);
			$this->load_template_view();

		} else {
			//notify user of error/failure
		}
	}//close form_internalFort_C1()
	

	public function form_internalFort_D1() {
		$this -> load -> model('models_sugar/m_sugar_internalfort_d1');
		$this -> m_sugar_internalfort_d1 -> addRecord();

		if ($this -> m_sugar_internalfort_d1 -> response = 'ok') {
			//notify user of success
			$this->$data['form_id'] = "";
			$this->$data['form'] = '<p><b>' . $this -> m_sugar_internalfort_d1 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> m_sugar_internalfort_d1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			//$this -> load -> view('pages/vehicles/index', $data);
			$this->load_template_view();

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_C1()

	public function form_externalFort_B1() {
		$this -> load -> model('models_sugar/m_sugar_externalfort_b1');
		$this -> m_sugar_externalfort_b1 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> m_sugar_externalfort_b1 -> response = 'ok') {
			//notify user of success
			$this->$data['form_id'] = "";
			$this->$data['form'] = '<p><b>' . $this -> m_sugar_externalfort_b1 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> m_sugar_externalfort_b1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			//$this -> load -> view('pages/vehicles/index', $data);
			$this->load_template_view();

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_C1()

	public function form_externalFort_B2() {
		$this -> load -> model('models_sugar/m_sugar_externalfort_b2');
		$this -> m_sugar_externalfort_b2 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> m_sugar_externalfort_b2 -> response = 'ok') {
			//notify user of success
			$this->$data['form_id'] = "";
			$this->$data['form'] = '<p><b>' . $this -> m_sugar_externalfort_b2 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> m_sugar_externalfort_b2 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			//$this -> load -> view('pages/vehicles/index', $data);
			$this->load_template_view();

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_C1()
	
	public function form_externalFort_B3() {
		$this -> load -> model('models_sugar/m_sugar_externalfort_b3');
		$this -> m_sugar_externalfort_b3 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> m_sugar_externalfort_b3 -> response = 'ok') {
			//notify user of success
			$this->$data['form_id'] = "";
			$this->$data['form'] = '<p><b>' . $this -> m_sugar_externalfort_b3 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> m_sugar_externalfort_b3 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			//$this -> load -> view('pages/vehicles/index', $data);
			$this->load_template_view();

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_C1()
	

	public function form_internalQC_A1() {
		$this -> load -> model('models_sugar/m_sugar_internalqc_a1');
		$this -> m_sugar_internalqc_a1 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> m_sugar_internalqc_a1 -> response = 'ok') {
			//notify user of success
			$this->$data['form_id'] = "";
			$this->$data['form'] = '<p><b>' . $this -> m_sugar_internalqc_a1 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> m_sugar_internalqc_a1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			//$this -> load -> view('pages/vehicles/index', $data);
			$this->load_template_view();

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_C1()

	public function form_internalQC_B1() {
		$this -> load -> model('models_sugar/m_sugar_internalqc_b1');
		$this -> m_sugar_internalqc_b1 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> m_sugar_internalqc_b1 -> response = 'ok') {
			//notify user of success
			$this->$data['form_id'] = "";
			$this->$data['form'] = '<p><b>' . $this -> m_sugar_internalqc_b1 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> m_sugar_internalqc_b1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			//$this -> load -> view('pages/vehicles/index', $data);
			$this->load_template_view();

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_C1()

	public function form_internalQC_B2() {
		$this -> load -> model('models_sugar/m_sugar_internalqc_b2');
		$this -> m_sugar_internalqc_b2 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> m_sugar_internalqc_b2 -> response = 'ok') {
			//notify user of success
			$this->$data['form_id'] = "";
			$this->$data['form'] = '<p><b>' . $this -> m_sugar_internalqc_b2 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> m_sugar_internalqc_b2 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			//$this -> load -> view('pages/vehicles/index', $data);
			$this->load_template_view();

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_C1()

	public function form_internalQC_C1() {
		$this -> load -> model('models_sugar/m_sugar_internalqc_c1');
		$this -> m_sugar_internalqc_c1 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> m_sugar_internalqc_c1 -> response = 'ok') {
			//notify user of success
			$this->$data['form_id'] = "";
			$this->$data['form'] = '<p><b>' . $this -> m_sugar_internalqc_c1 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> m_sugar_internalqc_c1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			//$this -> load -> view('pages/vehicles/index', $data);
			$this->load_template_view();

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_C1()
	
	
	public function fortifiedSugar_market($id) 
	{	
	    $this -> load -> model('models_sugar/m_sugar_market');
		$this -> m_sugar_market -> addRecord($this -> session -> userdata('affiliation'));
		if($this->m_sugar_market->response=='ok') 
		{
			//notify user of success		
			if($id==1)	
			{
			  $newdata = array('link_id' =>"Market_level_sugar_li");
			  $this -> session -> set_userdata($newdata);		  
			 redirect('c_redirect/addAnotherEntry');
			}
			else
			{
				$this->data['form_id'] ="";
		    	$this->data['form'] = '<p><b>' . $this -> m_sugar_market -> rowsInserted . '</b> record(s) submitted successfully in approximately <b>' . $this -> m_sugar_market -> executionTime . '</b> seconds.</p>';
				$this->load_template_view();
			}			
		} 
		else 
		{
	//		//notify user of error/failure
		}
	}	

}
	