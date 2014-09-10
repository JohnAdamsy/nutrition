<?php
class C_salt extends MY_Controller {
public $company_list;
	public function __construct() 
	{
        parent::__construct();
		$this->is_logedIn();
		
		$this->load->model("companymodel",'c');
		//$filter=array('affiliation' => 'Salt');
   	  	//$this->company_list=$this->c->get_details($filter);
   	  	$this->company_list=$this->getCompaniesByAffiliation('Salt');	
    }

	public function internalFort_A1() 
	{
		$data['form'] =  'salt/internalFortified_A1';
		$data['form_id'] = 'internalFortified_A1';
		$this -> load -> view('form', $data);
	}

	public function internalFort_A2() 
	{		
		$data['form'] = 'salt/internalFortified_A2';
		$data['form_id'] = 'internalFortified_A2';
		$this -> load -> view('form', $data);
	}

	public function internalFort_B1() 
	{
		$data['form'] = 'salt/internalFortified_B1';
		$data['form_id'] = 'internalFortified_B1';
		$this -> load -> view('form', $data);
	}
	
	 public function getRecordsViaJSON(){
    	/*retrieve files under this form if any*/
		$this->load->model('models_salt/m_internalfortifiedb1');
		if(($this->m_internalfortifiedb1->retrieveForms($this -> session -> userdata('affiliation')))==true){
			//retrieve existing data..else just load a blank form
			print $this->m_internalfortifiedb1->formRecords;
		}
    }
	

	public function internalFort_B2() 
	{
		$data['form'] = 'salt/internalFortified_B2';
		$data['form_id'] = 'internalFortified_B2';
		$this -> load -> view('form', $data);
	}

	public function internalFort_C1() 
	{
		$data['form'] = 'salt/internalFortified_C1';
		$data['form_id'] = 'internalFortified_C1';
		$this -> load -> view('form', $data);
	}

	private function getFactories() {
		if ($this -> session -> userdata('affiliation'))
			$this -> load -> model('models_salt/m_externalfortifiedb1');
		$this -> $manufacturer = $this -> M_ExternalFortifiedB1 -> getManufacturerNameByUserAffiliation($this -> session -> userdata('affiliation'));

		$this -> load -> model('models_salt/m_externaliodizedb1');
		$this -> M_ExternalIodizedB1 -> getIodizationCentresByFactory($this -> manufacturer);

		foreach ($this->m_externalIodizedb1->centres as $key => $value) {
			$this -> selectIodizationCentre .= '<option value="' . $value['factoryNumber'] . '">' . $value['factoryName'] . '</option>' . '<br />';
		}
		return $this -> selectIodizationCentre;
	}
	

	public function externalFort_B1() 
	{
		$data['form'] = 'salt/externalfortifiedB1';
		$data['form_id'] = 'externalfortifiedB1';
		$this -> load -> view('form', $data);
	}

	public function externalFort_B2() 
	{
		$data['form'] = 'salt/externalFortified_B2';
		$data['form_id'] = 'externalFortified_B2';
		$this -> load -> view('form', $data);
	}

	public function externalFort_B3() 
	{		
		$data['form'] = 'salt/externalFortified_B3';
		$data['form_id'] = 'externalFortified_B3';
		$this -> load -> view('form', $data);
	}

	public function externalIod_B1() 
	{
		$data['form_id'] = 'externalIodizationB1';
		$data['form'] = 'salt/externalIodizationB1';
		$this -> load -> view('form', $data);
	}

	public function smallScale_A1() 
	{
		$data['form'] = 'salt/smallScale_A1';
		$data['form_id'] = 'smallScale_A1';
		$this -> load -> view('form', $data);
	}

	public function smallScale_A2() 
	{
		$data['form'] = 'salt/smallScale_A2';
		$data['form_id'] = 'smallScale_A2';
		$this -> load -> view('form', $data);
	}
	public function Market_level_salt()
    {
		$data['sub_title']="add to database";
        $data['main_title']="FORTIFIED SALT MARKET LEVEL FORMS";
		$data['company_list']=$this->company_list;
        $data['form'] = 'salt/market_level_salt';
        $data['form_id'] = 'market_level_salt';
        $this -> load -> view('form', $data);
    }
}