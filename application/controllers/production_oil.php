<?php
/*helps authenticate a user*/
//error_reporting(0);
class Production_oil extends MY_Controller {
	public $companies;

    public function __construct() {
        parent::__construct();
        $this->load->model("companymodel",'c');
		$this->is_logedIn();
      //  $this->load->model("companytype",'company_type');
      //  $this->load->model("foodtypes",'foodtypes');

    }

	public  function prodOil()
	{
	 $data['h_title']="Production Data";
	 $data['mh_title']="OIL";
	 $data['content_page'] = 'production/oil_production';
	 $tmpl = array ( 'table_open'  => '<table id="big_table" border="0" cellpadding="0" cellspacing="0" class="mytable" style="font-size:10px; width:100%">' );

     $this->table->set_template($tmpl);         
     $this->table->set_heading('Company Name','Company Code','Company Type','Food Type','Other Info','Actions');
	 $this -> load -> view('template_loggedin', $data);
    }
	
	function get_data()
	{
		
//$category = $this -> session -> userdata('category');
//        $user=$this->session->userdata('user_id');
		$this->datatables->select('company_id,company_name,company_code,company_type_id,foodtype,other_info')
        ->unset_column('company_id')
        ->add_column('Actions', get_buttons('$1'),'company_id')
		//->where('account_no', $user)
		//->where('name !=', "Per Child")
        ->from('company');        
        echo $this->datatables->generate();
	}
	
	/*
    public function add($id=""){
		if(isset($_POST))
		{
		if(empty($id))
		{	
        	$resp=$this->c->add_company();
			if($resp==TRUE)
			{
				redirect('manageCompanies');
			}
		}	
		else
		{
			$resp=$this->c->update($id);
			if($resp==TRUE)
			{
				redirect('manageCompanies');
			}
		}
		
		}
    }

    public function update(){
     $this->c->update_company();   
    }
	
	public function add_form($id="") 
	{
		$data['item_id']=$id;
		if(!empty($id))
		{
			$result= $this->c->get_details(array('company_id'=>$id));
			$data['result']=$result;			
		}
	    $data['comptypes']=$this->company_type->get_details();
		$data['foodtype']=$this->company_type->get_Typedetails();
		$this -> load -> view('dashboard/add_companies', $data);
	}
	
	private function getCompanyTypes() 
	{
		return $this -> c_companyTypes=$this->company_type->get_details();
	}	*/
}
?>