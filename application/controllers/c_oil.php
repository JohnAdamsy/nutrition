<?php
class C_oil extends  MY_Controller {
public $company_list;
	public function __construct() 
	{
        parent::__construct();
		$this->is_logedIn();		
		$this->load->model("companymodel",'c');	
		$this->load->model("companyproduction",'cp');
		//$filter=array('affiliation' => 'Oil');
   	  	//$this->company_list=$this->c->get_details($filter);
   	  	$this->company_list=$this->getCompaniesByAffiliation('Oil');	
		
    }
public function fortifiedOil_A1()
{
   $data['form'] = 'oil/fortifiedOil_A1';
   $data['form_id'] = 'fortifiedOil_A1';
   $this -> load -> view('form', $data);
}
public function fortifiedOil_B1()
{
   $data['form'] = 'oil/fortifiedOil_B1';
   $data['form_id'] = 'fortifiedOil_B1';
   $this -> load -> view('form', $data);
}
public function fortifiedOil_B1_1()
{
   $data['sub_title']="add to database";
   $data['main_title']="FORTIFIED OIL PRODUCTION FORMS";
   $data['company_list']=$this->company_list;
   $data['form'] = 'oil/fortifiedOil_B1_1';
   $data['form_id'] = 'fortifiedOil_B1_1';
   $this -> load -> view('form', $data);
}
public function fortifiedOil_B2()
{
   $data['form'] = 'oil/fortifiedOil_B2';
   $data['form_id'] = 'fortifiedOil_B2';
   $this -> load -> view('form', $data);
}
public function fortifiedOil_C1()
{
	$data['form'] = 'oil/fortifiedOil_C1';
	$data['form_id'] = 'fortifiedOil_C1';
	$this -> load -> view('form', $data);
}

public function addproductionOil()
	{					
		$data['h_title']="Add Production data";
        $data['mh_title']="OIL PRODUCTION FORM";	
        $data['content_page'] = 'oil/fortifiedOil_B1_1';
		$data['content']="Vehicles";
		$data['form_id'] = 'fortifiedOil_B1_1';
   		$data['company_list']=$this->company_list;
		$data['sub_title']="add to database";
		$this -> load -> view('template_loggedin', $data);	
	}
    public function Market_level_oil()
    {
		$data['sub_title']="add to database";
        $data['main_title']="FORTIFIED OIL MARKET LEVEL FORMS";
        $data['form'] = 'oil/market_level_oil';
        $data['form_id'] = 'market_level_oil';
        $this -> load -> view('form', $data);
    }
	public function productionOil()
	{
	   $data['sub_title']="add to database";
	   $data['main_title']="FORTIFIED OIL PRODUCTION FORMS";
	   $data['company_list']=$this->company_list;
	   $data['form'] = 'oil/productionOil';
	   $data['form_id'] = 'productionOil';
	   $this -> load -> view('form', $data);
	}
	public function editproductionOil($id)
	{
		$filter=array('OilProductionID'=>$id);
		$result= $this->cp->get_details($filter,'oil_productiontable');		
		$c_name=$this->cp->getCompanyName($id,'OilProductionID','oil_productiontable');						
		$data['h_title']="Edit Stored data - (Oil)";
        $data['mh_title']=$c_name;
        $data['content_page'] = 'oil/fortifiedOil_B1_1';
		$data['content']="Vehicles";
		$data['form_id'] = 'fortifiedOil_B1_1';
   		$data['company_list']=$this->company_list;
   		$data['details']=$result;
   		$data['item_id']=$id;
		$this -> load -> view('template_loggedin', $data);
		
	}
	public function viewproductionOil($id)
	{
		$filter=array('OilProductionID'=>$id);
		$result= $this->cp->get_details($filter,'oil_productiontable');
		$c_name=$this->cp->getCompanyName($id,'OilProductionID','oil_productiontable');					
		$data['h_title']="View Stored data - (Oil)";
        $data['mh_title']=$c_name;
        $data['content_page'] = 'oil/fortifiedOil_B1_1';
		$data['content']="Vehicles";
		$data['form_id'] = 'productionOil';
   		$data['company_list']=$this->company_list;
   		$data['details']=$result;
   		$data['item_id']=$id;
		$this -> load -> view('template_loggedin', $data);	
	}

	public function production(){
		$series = array(20, 45, 60, 22, 6, 36);
		$title = "Production";
		$series_name = "Production";
		$data['h_title']="Line Chart ";
		 $data['mh_title']="COMPANIES";
		 $data['chart'] = $this->line_chart($series,$series_name,$title);
		 $data['content_page'] = "production-reports";//$data['chart'];
		$this -> load -> view('template_loggedin', $data);  
	}
//====================================================== Take to relevant controller oil==================
 public function oilData()
    {
	//	echo "here";die();
	//	$filter=array('affiliation' => 'Oil');
   	//  	$this->company_list=$this->c->get_details($filter);
		$this->company_list=$this->getCompaniesByAffiliation('Oil');	
		
		$category = trim($this -> session -> userdata('vehicle'));
		$c_name="Production data";		
		if($category!=="MOPHS")
		{
		 $id= $this ->session -> userdata('companyID');
		 
		 $filter=array('company_id'=>$id);
       	 $result= $this->c->get_details($filter);
	   	 foreach($result as $row):
	    	 $c_name=strtoupper(trim($row->company_name));
	     endforeach;	   
		}
		
             $data['h_title']="Stored data - (Oil)";
             $data['mh_title']=$c_name;
             $data['content_page'] = 'production/oil';
             $tmpl = array ( 'table_open'  => '<table id="big_table" border="0" cellpadding="0" cellspacing="0" class="mytable" style="font-size:10px; width:100%">' );
             $this->table->set_template($tmpl);
			 
			
             $this->table->set_heading('Year','Month','Opening Balance (kg)','Quantity Delivered (kg)','Supplier/ Manufacturer','Quantity Rejected (kg)','Quantity Issued (kg)','Closing Balance (kg)','Dosage Rate Oils & Fats (g/mt)','Dosage Rate Margarine (g/mt)','Theoretical Production (mt)','Actual Production (mt)','Oils Exports (mt)','Fats Exports (mt)','Actions');
		  
			 
	         $data['content']="Vehicles";
   			 $data['company_list']=$this->company_list;
             $this -> load -> view('template_loggedin', $data);
    }
    function getoilData($id)
        {
		$category = trim($this -> session -> userdata('vehicle'));
		if($category!=="MOPHS")
		{
			$this->datatables->select('OilProductionID,year,prod_month,opening_balance,qty_delivered,supplier,qty_rejected,qty_issued,closing_balance,dosage_rate1,dosage_rate2,theoretical_prod,actual_prod,exp_oil,exp_fats')
					->edit_column('opening_balance', '$1', 'format_values(opening_balance)')
					->edit_column('qty_delivered', '$1', 'format_values(qty_delivered)')
					->edit_column('qty_rejected', '$1', 'format_values(qty_rejected)')
					->edit_column('qty_issued', '$1', 'format_values(qty_issued)')
					->edit_column('closing_balance', '$1', 'format_values(closing_balance)')
					->edit_column('dosage_rate1', '$1', 'format_values(dosage_rate1)')
					->edit_column('dosage_rate2', '$1', 'format_values(dosage_rate2)')
					->edit_column('theoretical_prod', '$1', 'format_values(theoretical_prod)')
					->edit_column('actual_prod', '$1', 'format_values(actual_prod)')
					->edit_column('exp_oil', '$1', 'format_values(exp_oil)')
					->edit_column('exp_fats', '$1', 'format_values(exp_fats)')
					 ->unset_column('OilProductionID')
                    ->add_column('Actions', get_buttons_editOil1('$1'),'OilProductionID')
					->where('company_id', $id)
                    ->from('view_oildata');  
		}
		else if($id>1 && $category==="MOPHS")
		{
			$this->datatables->select('OilProductionID,year,prod_month,opening_balance,qty_delivered,supplier,qty_rejected,qty_issued,closing_balance,dosage_rate1,dosage_rate2,theoretical_prod,actual_prod,exp_oil,exp_fats')
			 ->unset_column('OilProductionID')
                    ->add_column('Actions', get_buttons_editOil('$1'),'OilProductionID')
					->where('company_id', $id)
					->edit_column('qty_delivered', '$1', 'format_values(qty_delivered)')
					->edit_column('qty_rejected', '$1', 'format_values(qty_rejected)')
					->edit_column('qty_issued', '$1', 'format_values(qty_issued)')
					->edit_column('closing_balance', '$1', 'format_values(closing_balance)')
					->edit_column('dosage_rate1', '$1', 'format_values(dosage_rate1)')
					->edit_column('dosage_rate2', '$1', 'format_values(dosage_rate2)')
					->edit_column('theoretical_prod', '$1', 'format_values(theoretical_prod)')
					->edit_column('actual_prod', '$1', 'format_values(actual_prod)')
					->edit_column('exp_oil', '$1', 'format_values(exp_oil)')
					->edit_column('exp_fats', '$1', 'format_values(exp_fats)')
					->edit_column('opening_balance', '$1', 'format_values(opening_balance)')
                    ->from('view_oildata');
		}
		else if($id==="" && $category==="MOPHS")
		{
			$this->datatables->select('OilProductionID,year,prod_month,opening_balance,qty_delivered,supplier,qty_rejected,qty_issued,closing_balance,dosage_rate1,dosage_rate2,theoretical_prod,actual_prod,exp_oil,exp_fats')
			 ->unset_column('OilProductionID')
					->where('company_id', $id)
                    ->add_column('Actions', get_buttons_editOil('$1'),'OilProductionID')
					->edit_column('opening_balance', '$1', 'format_values(opening_balance)')
					->edit_column('qty_delivered', '$1', 'format_values(qty_delivered)')
					->edit_column('qty_rejected', '$1', 'format_values(qty_rejected)')
					->edit_column('qty_issued', '$1', 'format_values(qty_issued)')
					->edit_column('closing_balance', '$1', 'format_values(closing_balance)')
					->edit_column('dosage_rate1', '$1', 'format_values(dosage_rate1)')
					->edit_column('dosage_rate2', '$1', 'format_values(dosage_rate2)')
					->edit_column('theoretical_prod', '$1', 'format_values(theoretical_prod)')
					->edit_column('actual_prod', '$1', 'format_values(actual_prod)')
					->edit_column('exp_oil', '$1', 'format_values(exp_oil)')
					->edit_column('exp_fats', '$1', 'format_values(exp_fats)')
                    ->from('view_oildata');
		}
		else
		{
			$this->datatables->select('OilProductionID,year,prod_month,opening_balance,qty_delivered,supplier,qty_rejected,qty_issued,closing_balance,dosage_rate1,dosage_rate2,theoretical_prod,actual_prod,exp_oil,exp_fats')
			 ->unset_column('OilProductionID')
                    ->add_column('Actions', get_buttons_editOil('$1'),'OilProductionID')
					->edit_column('opening_balance', '$1', 'format_values(opening_balance)')
					->edit_column('qty_delivered', '$1', 'format_values(qty_delivered)')
					->edit_column('qty_rejected', '$1', 'format_values(qty_rejected)')
					->edit_column('qty_issued', '$1', 'format_values(qty_issued)')
					->edit_column('closing_balance', '$1', 'format_values(closing_balance)')
					->edit_column('dosage_rate1', '$1', 'format_values(dosage_rate1)')
					->edit_column('dosage_rate2', '$1', 'format_values(dosage_rate2)')
					->edit_column('theoretical_prod', '$1', 'format_values(theoretical_prod)')
					->edit_column('actual_prod', '$1', 'format_values(actual_prod)')
					->edit_column('exp_oil', '$1', 'format_values(exp_oil)')
					->edit_column('exp_fats', '$1', 'format_values(exp_fats)')
                    ->from('view_oildata');
		}
      // echo $category."  -  ".$id;
	   echo $this->datatables->generate();
}
	/***
	  pie chart 
	
	*/

	

	/*
function addAnother()
	{
		$this->data['form']='';
		$this->data['return_page']=1;
		$this->data['page']='Front-End';
		$this->data['content'] = 'Vehicles';
		$this->data['title']='Vehicles';
		$this -> load -> view('template_loggedin', $this->data);
	}*/

}
?>