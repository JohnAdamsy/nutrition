<?php
class C_Wheat extends MY_Controller {
public $company_list;
	public function __construct() 
	{
        parent::__construct();
		$this->is_logedIn();
		$this->load->model("companymodel",'c');
		$this->load->model("companyproduction",'cp');
		//$filter=array('affiliation' => 'Wheat');
   	  	//$this->company_list=$this->c->get_details($filter);
   	  	$this->company_list=$this->getCompaniesByAffiliation('Wheat');	
    }
	public function productionWheat()
	{
		$data['sub_title']="add to database";
	    $data['main_title']="FORTIFIED WHEAT PRODUCTION FORMS";
		$data['company_list']=$this->company_list;
		$data['form'] = 'wheat/productionWheat';
		$data['form_id'] = 'productionWheat';
		$this -> load -> view('form', $data);
	}
	
	public function addproductionWheat()
	{					
		$data['h_title']="Add Production data";
        $data['mh_title']="WHEAT PRODUCTION FORM";	
        $data['content_page'] = 'wheat/productionWheat';
		$data['content']="Vehicles";
		$data['form_id'] = 'productionWheat';
   		$data['company_list']=$this->company_list;
		$data['sub_title']="add to database";
		$this -> load -> view('template_loggedin', $data);	
	}
	
	
	
	
	public function externalWheatFlour_B1() 
	{
		$data['form'] = 'wheat/externalWheatFlour_B1';
		$data['form_id'] = 'externalWheatFlour_B1';
		$this -> load -> view('form', $data);
	}

	public function externalWheatFlour_B2() 
	{
		$data['form'] = 'wheat/externalWheatFlour_B2';
		$data['form_id'] = 'externalWheatFlour_B2';
		$this -> load -> view('form', $data);
	}

	public function externalWheatFlour_B3() 
	{
		$data['form'] = 'wheat/externalWheatFlour_B3';
		$data['form_id'] = 'externalWheatFlour_B3';
		$this -> load -> view('form', $data);
	}

	public function internalWheatFlour_A1() 
	{
		$data['form'] = 'wheat/internalWheatFlour_A1';
		$data['form_id'] = 'internalWheatFlour_A1';
		$this -> load -> view('form', $data);
	}

	public function internalWheatFlour_A2() 
	{
		$data['form'] = 'wheat/internalWheatFlour_A2';
		$data['form_id'] = 'internalWheatFlour_A2';
		$this -> load -> view('form', $data);
	}

	public function internalWheatFlour_B1() 
	{
		$data['form'] = 'wheat/internalWheatFlour_B1';
		$data['form_id'] = 'internalWheatFlour_B1';
		$this -> load -> view('form', $data);
	}

	public function internalWheatFlour_B2() 
	{
		$data['form'] = 'wheat/internalWheatFlour_B2';
		$data['form_id'] = 'internalWheatFlour_B2';
		$this -> load -> view('form', $data);
	}

	public function internalWheatFlour_C1() 
	{
		$data['form'] = 'wheat/internalWheatFlour_C1';
		$data['form_id'] = 'internalWheatFlour_C1';
		$this -> load -> view('form', $data);
	}
	
function addAnother()
	{
		$this->data['form']='';
		$this->data['return_page']=1;
		$this->data['page']='Front-End';
		$this->data['content'] = 'Vehicles';
		$this->data['title']='Vehicles';
		$this -> load -> view('template_loggedin', $this->data);
	}
	 public function Market_level_wheat()
    {
		$data['sub_title']="add to database";
        $data['main_title']="FORTIFIED WHEAT MARKET LEVEL FORMS";
        $data['form'] = 'wheat/market_level_wheat';
        $data['form_id'] = 'market_level_wheat';
        $this -> load -> view('form', $data);
    }
	public function editproductionWheat($id)
	{
		$filter=array('WheatProductionID'=>$id);
		$result= $this->cp->get_details($filter,'wheat_productiontable');
		$c_name=$this->cp->getCompanyName($id,'WheatProductionID','wheat_productiontable');					
		$data['h_title']="Edit Stored data - (Wheat)";
        $data['mh_title']=$c_name;
        $data['content_page'] = 'wheat/productionWheat';
		$data['content']="Vehicles";
		$data['form_id'] = 'productionWheat';
   		$data['company_list']=$this->company_list;
   		$data['details']=$result;
   		$data['item_id']=$id;
		$this -> load -> view('template_loggedin', $data);		
	}
	public function viewproductionWheat($id)
	{
		$filter=array('WheatProductionID'=>$id);
		$result= $this->cp->get_details($filter,'wheat_productiontable');
		
	
		$c_name=$this->cp->getCompanyName($id,'WheatProductionID','wheat_productiontable');					
		$data['h_title']="View Stored data - (Wheat)";
        $data['mh_title']=$c_name;
        $data['content_page'] = 'wheat/productionWheat';
		$data['content']="Vehicles";
		$data['form_id'] = 'productionWheat';
   		$data['company_list']=$this->company_list;
   		$data['details']=$result;
   		$data['item_id']=$id;
		$this -> load -> view('template_loggedin', $data);	
	}

//====================================================== Take to relevant comntroller wheat==================
 public function wheatData()
    {
		$this->company_list=$this->getCompaniesByAffiliation('Wheat');	
		
		$category = trim($this -> session -> userdata('vehicle'));
		$c_name="Production data";		
		if($category!=="MOPHS" )
		{
		 $id= $this ->session -> userdata('companyID');
		 
		 $filter=array('company_id'=>$id);
       	 $result= $this->c->get_details($filter);
	   	 foreach($result as $row):
	    	 $c_name=strtoupper(trim($row->company_name));
	     endforeach;	   
		}
		
             $data['h_title']="Stored data - (Wheat)";
             $data['mh_title']=$c_name;
             $data['content_page'] = 'production/wheat';
             $tmpl = array ( 'table_open'  => '<table id="big_table" border="0" cellpadding="0" cellspacing="0" class="mytable" style="font-size:10px; width:100%">' );
             $this->table->set_template($tmpl);
			 		 
			
			 $this->table->set_heading('Year','Month','Opening Balance (kg)','Quantity Delivered (kg)','Supplier/ Manufacturer','Quantity Rejected (kg)','Quantity Issued (kg)','Closing Balance (kg)','Dosage Rate (g/mt)','Theoretical Production (mt)','Actual Production (mt)','Production Un-fortified (mt)','Fortified Exports (mt)','Actions');
			
			
	         $data['content']="Vehicles";
   			 $data['company_list']=$this->company_list;
             $this -> load -> view('template_loggedin', $data);
    }
    function getwheatData($id)
        {
		$category = trim($this -> session -> userdata('vehicle'));
		if($category!=="MOPHS")
		{
			$this->datatables->select('WheatProductionID,year,prod_month,opening_balance,qty_delivered,supplier,qty_rejected,qty_issued,closing_balance,dosage_rate,theoretical_prod,actual_prod,production_unfort,exp_fort')
			 ->unset_column('WheatProductionID')
			->edit_column('opening_balance', '$1', 'format_values(opening_balance)')
					->edit_column('qty_delivered', '$1', 'format_values(qty_delivered)')
					->edit_column('qty_rejected', '$1', 'format_values(qty_rejected)')
					->edit_column('qty_issued', '$1', 'format_values(qty_issued)')
					->edit_column('closing_balance', '$1', 'format_values(closing_balance)')
					->edit_column('dosage_rate', '$1', 'format_values(dosage_rate)')
					->edit_column('theoretical_prod', '$1', 'format_values(theoretical_prod)')
					->edit_column('actual_prod', '$1', 'format_values(actual_prod)')
					->edit_column('production_unfort', '$1', 'format_values(production_unfort)')
					->edit_column('exp_fort', '$1', 'format_values(exp_fort)')						
                    ->add_column('Actions', get_buttons_editWheat1('$1'),'WheatProductionID')
					->where('company_id', $id)
                    ->from('wheat_productiontable');  
		}
		else if($id>1 && $category==="MOPHS")
		{
			$this->datatables->select('WheatProductionID,year,prod_month,opening_balance,qty_delivered,supplier,qty_rejected,qty_issued,closing_balance,dosage_rate,theoretical_prod,actual_prod,production_unfort,exp_fort')
			 ->unset_column('WheatProductionID')
			 ->edit_column('opening_balance', '$1', 'format_values(opening_balance)')
					->edit_column('qty_delivered', '$1', 'format_values(qty_delivered)')
					->edit_column('qty_rejected', '$1', 'format_values(qty_rejected)')
					->edit_column('qty_issued', '$1', 'format_values(qty_issued)')
					->edit_column('closing_balance', '$1', 'format_values(closing_balance)')
					->edit_column('dosage_rate', '$1', 'format_values(dosage_rate)')
					->edit_column('theoretical_prod', '$1', 'format_values(theoretical_prod)')
					->edit_column('actual_prod', '$1', 'format_values(actual_prod)')
					->edit_column('production_unfort', '$1', 'format_values(production_unfort)')
					->edit_column('exp_fort', '$1', 'format_values(exp_fort)')	
					->where('company_id', $id)
                    ->add_column('Actions', get_buttons_editWheat('$1'),'WheatProductionID')
                    ->from('wheat_productiontable');
		}
		else if($id==="" && $category==="MOPHS")
		{
			$this->datatables->select('WheatProductionID,year,prod_month,opening_balance,qty_delivered,supplier,qty_rejected,qty_issued,closing_balance,dosage_rate,theoretical_prod,actual_prod,production_unfort,exp_fort')
			->edit_column('opening_balance', '$1', 'format_values(opening_balance)')
					->edit_column('qty_delivered', '$1', 'format_values(qty_delivered)')
					->edit_column('qty_rejected', '$1', 'format_values(qty_rejected)')
					->edit_column('qty_issued', '$1', 'format_values(qty_issued)')
					->edit_column('closing_balance', '$1', 'format_values(closing_balance)')
					->edit_column('dosage_rate', '$1', 'format_values(dosage_rate)')
					->edit_column('theoretical_prod', '$1', 'format_values(theoretical_prod)')
					->edit_column('actual_prod', '$1', 'format_values(actual_prod)')
					->edit_column('production_unfort', '$1', 'format_values(production_unfort)')
					->edit_column('exp_fort', '$1', 'format_values(exp_fort)')	
			 ->unset_column('WheatProductionID')
					->where('company_id', $id)
                    ->add_column('Actions', get_buttons_editWheat('$1'),'WheatProductionID')
                    ->from('wheat_productiontable');
		}
		else
		{
			$this->datatables->select('WheatProductionID,year,prod_month,opening_balance,qty_delivered,supplier,qty_rejected,qty_issued,closing_balance,dosage_rate,theoretical_prod,actual_prod,production_unfort,exp_fort')
			->edit_column('opening_balance', '$1', 'format_values(opening_balance)')
					->edit_column('qty_delivered', '$1', 'format_values(qty_delivered)')
					->edit_column('qty_rejected', '$1', 'format_values(qty_rejected)')
					->edit_column('qty_issued', '$1', 'format_values(qty_issued)')
					->edit_column('closing_balance', '$1', 'format_values(closing_balance)')
					->edit_column('dosage_rate', '$1', 'format_values(dosage_rate)')
					->edit_column('theoretical_prod', '$1', 'format_values(theoretical_prod)')
					->edit_column('actual_prod', '$1', 'format_values(actual_prod)')
					->edit_column('production_unfort', '$1', 'format_values(production_unfort)')
					->edit_column('exp_fort', '$1', 'format_values(exp_fort)')	
			 ->unset_column('WheatProductionID')
                    ->add_column('Actions', get_buttons_editWheat('$1'),'WheatProductionID')
                    ->from('wheat_productiontable');
		}
	echo $this->datatables->generate();	   
	}	
}
?>