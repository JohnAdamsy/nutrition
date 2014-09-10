<?php
class C_Sugar extends  MY_Controller {
public $company_list;
	public function __construct() 
	{
        parent::__construct();
		$this->is_logedIn();
		$this->load->model("companymodel",'c');
		//$filter=array('affiliation' => 'Sugar');
   	  	//$this->company_list=$this->c->get_details($filter);
   	  	$this->company_list=$this->getCompaniesByAffiliation('Sugar');	
    }
	public function internalSugar_A1() 
	{
		$data['form'] = 'sugar/internalSugar_A1';
		$data['form_id'] = 'internalSugar_A1';
		$this -> load -> view('form', $data);
	}

	public function internalSugar_A2() 
	{
		$data['form'] = 'sugar/internalSugar_A2';
		$data['form_id'] = 'internalSugar_A2';
		$this -> load -> view('form', $data);
	}

	public function internalSugar_A3() 
	{
		$data['form'] = 'sugar/internalSugar_A3';
		$data['form_id'] = 'internalSugar_A3';
		$this -> load -> view('form', $data);
	}

	public function internalSugar_B1() 
	{
		$data['form'] = 'sugar/internalSugar_B1';
		$data['form_id'] = 'internalSugar_B1';
		$this -> load -> view('form', $data);
	}

	public function internalSugar_C1() 
	{
		$data['form'] = 'sugar/internalSugar_C1';
		$data['form_id'] = 'internalSugar_C1';
		$this -> load -> view('form', $data);
	}

	public function internalSugar_C2() 
	{
		$data['form'] = 'sugar/internalSugar_C2';
		$data['form_id'] = 'internalSugar_C2';
		$this -> load -> view('form', $data);
	}

	public function internalSugar_C3() 
	{
		$data['form'] = 'sugar/internalSugar_C3';
		$data['form_id'] = 'internalSugar_C3';
		$this -> load -> view('form', $data);
	}

	public function internalSugar_D1() 
	{
		$data['form'] = 'sugar/internalSugar_D1';
		$data['form_id'] = 'internalSugar_D1';
		$this -> load -> view('form', $data);
	}

	public function externalSugar_B1() 
	{
		$data['form'] = 'sugar/externalSugar_B1';
		$data['form_id'] = 'externalSugar_B1';
		$this -> load -> view('form', $data);

	}

	public function externalSugar_B2() 
	{
		$data['form'] = 'sugar/externalSugar_B2';
		$data['form_id'] = 'externalSugar_B2';
		$this -> load -> view('form', $data);
	}

	public function externalSugar_B3() 
	{
		$data['form'] = 'sugar/externalSugar_B3';
		$data['form_id'] = 'externalSugar_B3';
		$this -> load -> view('form', $data);
	}

	public function qualityAssurance_A1() 
	{
		$data['form'] = 'sugar/qualityAssurance_A1';
		$data['form_id'] = 'equalityAssurance_A1';
		$this -> load -> view('form', $data);
	}

	public function qualityAssurance_B1() 
	{
		$data['form'] = 'sugar/qualityAssurance_B1';
		$data['form_id'] = 'qualityAssurance_B1';
		$this -> load -> view('form', $data);
	}

	public function qualityAssurance_B2() 
	{
		$data['form'] = 'sugar/qualityAssurance_B2';
		$data['form_id'] = 'qualityAssurance_B2';
		$this -> load -> view('form', $data);
	}

	public function qualityAssurance_C1() 
	{
		$data['form'] = 'sugar/qualityAssurance_C1';
		$data['form_id'] = 'qualityAssurance_C1';
		$this -> load -> view('form', $data);
	}
	 public function Market_level_sugar()
    {
		$data['sub_title']="add to database";
        $data['main_title']="FORTIFIED SUGAR MARKET LEVEL FORMS";
		$data['company_list']=$this->company_list;
        $data['form'] = 'sugar/market_level_sugar';
        $data['form_id'] = 'market_level_sugar';
        $this -> load -> view('form', $data);
    }

}
?>