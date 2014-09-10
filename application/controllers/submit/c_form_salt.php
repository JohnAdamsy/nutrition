<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
#processes form data before committing to the data-layer
class C_Form_Salt extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
	}
	
	public function form_internalFort_A1(){
		$this->load->model('models_salt/m_internalfortifieda1');
		$this->m_internalfortifieda1->addRecord();		
		if($this->m_internalfortifieda1->response='ok')
		{
			//notify user of success
			$this->data['form_id']="";
			$this->data['status'] = "ok";
			$this->data['form']='<p><b>'.$this->m_internalfortifieda1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->m_internalfortifieda1->executionTime.'</b> seconds.</p>';
			$this->load_template_view();			
		}
		else{
			//notify user of error/failure
		}
		
	}//close form_internalFort_A1()
	
	public function form_internalFort_A2(){
		$this->load->model('models_salt/m_internalfortifieda2');
		$this->m_internalfortifieda2->addRecord();
		
		if($this->m_internalfortifieda2->response='ok'){
			//notify user of success
			$this->data['form_id']="";
			$this->data['form']='<p><b>'.$this->m_internalfortifieda2->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->m_internalfortifieda2->executionTime.'</b> seconds.</p>';
			$this->load_template_view();			
		}
		else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_A2()
	
	public function form_internalFort_B1(){
     	$this->load->model('models_salt/m_internalfortifiedb1');
		$this->m_internalfortifiedb1->addRecord($this->session->userdata('affiliation'));
		
		if($this->m_internalfortifiedb1->response='ok'){
			//notify user of success
			$this->data['form_id']="";
			$this->data['form']='<p><b>'.$this->m_internalfortifiedb1->rowsInserted.'</b> record(s) submitted successfully in approximately <b>'.$this->m_internalfortifiedb1->executionTime.'</b> seconds.</p>';
			$this->load_template_view();
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_B1()
	
	public function form_internalFort_B2(){
		$this->load->model('models_salt/m_internalfortifiedb2');
		$this->m_internalfortifiedb2->addRecord($this->session->userdata('affiliation'));
		
		if($this->m_internalfortifiedb2->response=='ok'){
			//notify user of success
			$this->data['form_id']="";
			$this->data['form']='<p><b>'.$this->m_internalfortifiedb2->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->m_internalfortifiedb2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
			$this->load_template_view();
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_B2()
	
	public function form_internalFort_C1(){
		$this->load->model('models_salt/m_internalfortifiedc1');
		$this->m_internalfortifiedc1->addRecord($this->session->userdata('affiliation'));
		
		if($this->m_internalfortifiedc1->response=='ok'){
			//notify user of success
			$this->data['form_id']="";
			$this->data['form']='<p><b>'.$this->m_internalfortifiedc1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->m_internalfortifiedc1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
			$this->load_template_view();
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_C1()
	
	public function form_externalFort_B1(){
		$this->load->model('models_salt/m_externalfortifiedb1');
		$this->m_externalfortifiedb1->addRecord();
		
		if($this->m_externalfortifiedb1->response=='ok'){
			//notify user of success
			$this->data['form_id']="";
			$this->data['form']='<p><b>'.$this->m_externalfortifiedb1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->m_externalfortifiedb1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
			$this->load_template_view();
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_externalFort_B1()
	
	public function form_externalFort_B2(){
		$this->load->model('models_salt/m_externalfortifiedb2');
		$this->m_externalfortifiedb2->addRecord($this->session->userdata('affiliation'));
		
		if($this->m_externalfortifiedb2->response=='ok'){
			//notify user of success
			$this->data['form_id']="";
			$this->data['form']='<p><b>'.$this->m_externalfortifiedb2->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->m_externalfortifiedb2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
			$this->load_template_view();
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_externalFort_B2()
	
	public function form_externalFort_B3(){
		$this->load->model('models_salt/m_externalfortifiedb3');
		$this->m_externalfortifiedb3->addRecord($this->session->userdata('affiliation'));
		
		if($this->m_externalfortifiedb3->response=='ok'){
			//notify user of success
			$this->data['form_id']="";
			$this->data['form']='<p><b>'.$this->m_externalfortifiedb3->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->m_externalfortifiedb3->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
			$this->load_template_view();
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_externalFort_B3()
	
	public function form_externalIod_B1(){
		$this->load->model('models_salt/m_externaliodizedb1');
		$this->m_externaliodizedb1->addRecord($this->session->userdata('affiliation'));
		
		if($this->m_externaliodizedb1->response=='ok'){
			//notify user of success
			$this->data['form_id']="";
			$this->data['form']='<p><b>'.$this->m_externaliodizedb1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->m_externaliodizedb1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
			$this->load_template_view();
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_externalIod_B1()
	
		public function form_smallScale_A1(){
		$this->load->model('models_salt/m_smallscalea1');
		$this->m_smallscalea1->addRecord($this->session->userdata('affiliation'));
		
		if($this->m_smallscalea1->response=='ok'){
			//notify user of success
			$this->data['form_id']="";
			$this->data['form']='<p><b>'.$this->m_smallscalea1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->m_smallscalea1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
			$this->load_template_view();
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_smallScale_A1()
	
		public function form_smallScale_A2(){
		$this->load->model('models_salt/m_smallscalea2');
		$this->m_smallscalea2->addRecord($this->session->userdata('affiliation'));
		
		if($this->m_smallscalea2->response=='ok'){
			//notify user of success
			$this->data['form_id']="";
			$this->data['form']='<p><b>'.$this->m_smallscalea2->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->m_smallscalea2->executionTime.'</b> seconds.</p>';
			$this->load_template_view();
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_smallScale_A2()
	
	public function fortifiedSalt_market($id) 
	{	
	    $this -> load -> model('models_salt/m_salt_market');
		$this -> m_salt_market -> addRecord($this -> session -> userdata('affiliation'));
		if($this->m_salt_market->response=='ok') 
		{
			//notify user of success		
			if($id==1)	
			{
			  $newdata = array('link_id' =>"Market_level_salt_li");
			  $this -> session -> set_userdata($newdata);		  
			  redirect('c_redirect/addAnotherEntry');
			}
			else
			{
				$this->data['form_id'] ="";
		    	$this->data['form'] = '<p><b>' . $this -> m_salt_market -> rowsInserted . '</b> record(s) submitted successfully in approximately <b>' . $this -> m_salt_market -> executionTime . '</b> seconds.</p>';
				$this->load_template_view();
			}			
		} 
		else 
		{
	//		//notify user of error/failure
		}
	}	
}