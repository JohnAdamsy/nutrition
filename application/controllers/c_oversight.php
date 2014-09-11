<?php
class C_Oversight extends MY_Controller {
	public function __construct() 
	{
        parent::__construct();
		$this->is_logedIn();
		$this->load->model("marketdata",'md');		
		$this->load->model("companymodel",'c');
    }	
	public function addgain($id="")
	{	
		$filter=array('item_id'=>$id);
		$result= $this->md->get_details($filter);
						
		$data['h_title']="Add Market Sample Data";
        $data['mh_title']="MARKET SAMPLE FORM";	
        $data['content_page'] = 'oversight/adddatagain';
		$data['content']="Vehicles";
		$data['details']=$result;
		if($id!=="")
		{
		$data['item_id']=$id;
		}
		$data['form_id'] = 'adddatagain';
		$data['sub_title']="add to database";
		$this -> load -> view('template_loggedin', $data);	
	}
	public function addkebs($id="")
	{					
		$filter=array('item_id'=>$id);
		$result= $this->md->get_details($filter);
		$data['details']=$result;
		if($id!=="")
		{
		$data['item_id']=$id;
		}
		$data['h_title']="Add Market Sample Data";
        $data['mh_title']="KEBS DATA FORM";	
        $data['content_page'] = 'oversight/adddatakebs';
		$data['content']="Vehicles";
		$data['form_id'] = 'adddatakebs';
		$data['sub_title']="add to database";
		$this -> load -> view('template_loggedin', $data);	
	}
	public function addnl($id="")
	{
		$filter=array('item_id'=>$id);
		$result= $this->md->get_details($filter);					
		$data['h_title']="Add Market Sample Data";
        $data['mh_title']="MARKET SAMPLE FORM";	
		$data['details']=$result;
		if($id!=="")
		{
		$data['item_id']=$id;
		}
        $data['content_page'] = 'oversight/adddatanl';
		$data['content']="Vehicles";
		$data['form_id'] = 'adddatanl';
		$data['sub_title']="add to database";
		$this -> load -> view('template_loggedin', $data);	
	}
	public function addco($id="")
	{
		$filter=array('item_id'=>$id);
		$result= $this->md->get_details($filter);					
		$data['h_title']="Add Market Sample Data";
        $data['mh_title']="MARKET SAMPLE FORM";	
        $data['content_page'] = 'oversight/adddataco';
		$data['content']="Vehicles";
		$data['details']=$result;
		if($id!=="")
		{
		$data['item_id']=$id;
		}
		$data['form_id'] = 'adddataco';
		$data['sub_title']="add to database";
		$this -> load -> view('template_loggedin', $data);	
	}
	
	public function dbdatagain($id)
	{
		$vehicle=$this -> session -> userdata('affiliation');
		$filter=array('company_type'=>$vehicle);
		$result= $this->md->get_details($filter);	
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
	
	public function dbdataadmin()
	{
		//$aff=$this -> session -> userdata('affiliation');
		$filter=array();//'company_type'=>$aff);
		$this->company_list=$this->getCompany_list($filter);	
		
		$fld='producer_name';
		$this->producer_list=$this->create_list($fld);
		$fld='type_of_poduct';
		$this->product_list=$this->create_list($fld);
		$fld='brand_name';
		$this->brand_list=$this->create_list($fld);
		$fld='store_type';
		$this->store_list=$this->create_list($fld);
		
	//	$category = $aff;
		$c_name="Market samples data";		
	//	if($category!=="MOPHS" )
	//	{
	//	 $id= $this ->session -> userdata('companyID');
		 
	//	 $filter=array('company_id'=>$id);
    //   	 $result= $this->c->get_details($filter);
	//	 $c_name=$result[0]->company_name;
	//	}
		
             $data['h_title']="Stored data";
             $data['mh_title']=$c_name;
             $data['content_page'] = 'marketdata/admin';
             $tmpl = array ( 'table_open'  => '<table id="big_table" border="0" cellpadding="0" cellspacing="0" class="mytable" style="font-size:10px; width:100%">' );
             $this->table->set_template($tmpl);
			 		 
			
			 $this->table->set_heading('Producer/ Company','Product Type','Brand Name','Production','Sample Collection Date','Sample Collection Site','Store Type','Date Received in Laboratory','SampleExpiry Date','Fortification Logo','Sample Amount Collected','Analysis Date','Result');
			
			
	         $data['content']="Vehicles";
   			 $data['company_list']=$this->company_list;
			 $data['producer_list']=$this->producer_list;
			 $data['product_list']=$this->product_list;
			 $data['brand_list']=$this->brand_list;
             $this -> load -> view('template_loggedin', $data);
	}
	 function getmarketAdminData($id)
        {
		$category = trim($this -> session -> userdata('vehicle'));
		
			$this->datatables->select('item_id,company_id,company_type,producer_name,type_of_poduct,brand_name,production,date_of_sample_collection,sample_collection_location,store_type,date_received_lab,expiry_date,labelled_as_fortified,sample_amount_taken,date_of_analysis,average_result');
			$this->datatables->unset_column('item_id');
			$this->datatables->unset_column('company_id');
			
			$this->datatables->join('mkt_results', 'mkt_results.id = market_samples_table.item_id', 'left');			    
			$this->datatables->unset_column('company_type');
			$this->datatables->edit_column('sample_amount_taken', '$1', 'format_values(sample_amount_taken)');
		    $this->datatables->edit_column('date_received_lab', '$1', 'format_disp_date(date_received_lab)');	
		    $this->datatables->edit_column('date_of_sample_collection', '$1', 'format_disp_date(date_of_sample_collection)');
		    $this->datatables->edit_column('expiry_date', '$1', 'format_disp_date(expiry_date)');	
		    $this->datatables->edit_column('date_of_analysis', '$1', 'format_disp_date(date_of_analysis)');				
                   // 
			if($id>1)
			{		   
				$this->datatables->where('company_id', $id);
				$this->datatables->add_column('Actions', get_buttons_editWheat1('$1'),'WheatProductionID');
			}
			$this->datatables->from('market_samples_table'); 
		echo $this->datatables->generate();	   
	}	
	
	public function mydbdata()
	{
		$aff=$this -> session -> userdata('affiliation');
		$id=$this -> session -> userdata('companyID');
		$filter=array('company_type'=>$aff);
		$this->company_list=$this->getCompany_list($filter);	
		
		$fld='producer_name';
		$this->producer_list=$this->create_list($fld);
		$fld='type_of_poduct';
		$this->product_list=$this->create_list($fld);
		$fld='brand_name';
		$this->brand_list=$this->create_list($fld);
		$fld='store_type';
		$this->store_list=$this->create_list($fld);
		
	//	$category = $aff;
		$c_name="Market samples data";		
	//	if($category!=="MOPHS" )
	//	{
	//	 $id= $this ->session -> userdata('companyID');
		 
	//	 $filter=array('company_id'=>$id);
    //   	 $result= $this->c->get_details($filter);
	//	 $c_name=$result[0]->company_name;
	//	}
			 $data['sel_compid']=$id;
             $data['h_title']="Stored data";
             $data['mh_title']=$c_name;
             $tmpl = array ( 'table_open'  => '<table id="big_table" border="0" cellpadding="0" cellspacing="0" class="mytable" style="font-size:10px; width:100%">' );
             $this->table->set_template($tmpl);
			 			 
			 		 
			if($aff==="GAIN")
			{
			
             $data['content_page'] = 'marketdata/gain';	
			 $this->table->set_heading('Producer/ Company','Product Type','Brand Name','Production','Sample Collection Date','Sample Collection Site','Store Type','Sample Expiry Date','Fortification Logo','Sample Amount Collected','Analysis Date','Result','Actions');
			}
			else if($aff==="CONSUMER ORGANIZATION")
			{
				
             $data['content_page'] = 'marketdata/c_o';
			 $this->table->set_heading('Producer/ Company','Product Type','Brand Name','Sample Collection Date','Sample Collection Site','Store Type','Fortification Logo','Sample Amount Collected','Analysis Date','Result','Actions');
			}
			else if($aff==="NATIONAL PUBLIC HEALTH LABORATORY SERVICES")
			{
             $data['content_page'] = 'marketdata/n_l';
			 $this->table->set_heading('Producer/ Company','Product Type','Brand Name','Production','Sample Collection Date','Sample Collection Site','Date Received in Laboratory','Sample Expiry Date','Fortification Logo','Analysis Date','Result','Actions');
			}
			
			
	         $data['content']="Vehicles";
   			 $data['company_list']=$this->company_list;
			 $data['producer_list']=$this->producer_list;
			 $data['product_list']=$this->product_list;
			 $data['brand_list']=$this->brand_list;
             $this -> load -> view('template_loggedin', $data);
	}
	 function getmarketMyData($id)
        {
		$aff = trim($this -> session -> userdata('vehicle'));
		
		$this->datatables->select('item_id,company_id,company_type,producer_name,type_of_poduct,brand_name,production,date_of_sample_collection,sample_collection_location,store_type,date_received_lab,expiry_date,labelled_as_fortified,sample_amount_taken,date_of_analysis,average_result');
		
		    $this->datatables->edit_column('sample_amount_taken', '$1', 'format_values(sample_amount_taken)');
		    $this->datatables->edit_column('date_received_lab', '$1', 'format_disp_date(date_received_lab)');	
		    $this->datatables->edit_column('date_of_sample_collection', '$1', 'format_disp_date(date_of_sample_collection)');
		    $this->datatables->edit_column('expiry_date', '$1', 'format_disp_date(expiry_date)');
		    $this->datatables->edit_column('date_of_analysis', '$1', 'format_disp_date(date_of_analysis)');
				
			$this->datatables->join('mkt_results', 'mkt_results.id = market_samples_table.item_id', 'left');			    
			$this->datatables->where('company_id', $id);
		
			
			if($aff==="GAIN")
			{
				$this->datatables->unset_column('date_received_lab');
			    $this->datatables->add_column('Actions', get_buttons_editMarketdata_gain('$1'),'item_id');
			}
		    else if($aff==="CONSUMER ORGANIZATION")
			{
	            $this->datatables->unset_column('production');
				$this->datatables->unset_column('date_received_lab');
				$this->datatables->unset_column('expiry_date');
			    $this->datatables->add_column('Actions', get_buttons_editMarketdata_co('$1'),'item_id');
			}
			else if($aff==="NATIONAL PUBLIC HEALTH LABORATORY SERVICES")
			{
				$this->datatables->unset_column('store_type');
				$this->datatables->unset_column('sample_amount_taken');
			    $this->datatables->add_column('Actions', get_buttons_editMarketdata_nl('$1'),'item_id');
			}			
			
			$this->datatables->unset_column('company_id');
			$this->datatables->unset_column('company_type');
			$this->datatables->unset_column('item_id');	
		
			$this->datatables->from('market_samples_table'); 
			echo $this->datatables->generate();	   
	}
public function reportsos()
	{
		//$aff=$this -> session -> userdata('affiliation');
		$filter=array();//'company_type'=>$aff);
		$this->company_list=$this->getCompany_list($filter);	
		
		$fld='producer_name';
		$this->producer_list=$this->create_list($fld);
		$fld='type_of_poduct';
		$this->product_list=$this->create_list($fld);
		$fld='brand_name';
		$this->brand_list=$this->create_list($fld);
		$fld='store_type';
		$this->store_list=$this->create_list($fld);
		
		$c_name="Market samples reports";	
		
             $data['h_title']="Charts & Reports";
             $data['mh_title']=$c_name;
             $data['content_page'] = 'marketdata/reports/sample';
			
	         $data['content']="Vehicles";
   			 $data['company_list']=$this->company_list;
			 $data['producer_list']=$this->producer_list;
			 $data['product_list']=$this->product_list;
			 $data['brand_list']=$this->brand_list;
             $this -> load -> view('template_loggedin', $data);
	}
	
	/*
	
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
			 		 
			
			 $this->table->set_heading('Year','Month','Opening Bal','QTY Delivered','Sup/Man','QTY Rejected','QTY Issued','Closing Bal','D/ Rate','Theoretical Prod','Actual Prod','Prod Un-fort','Fort Exp','Actions');
			
			
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
	}	*/
}
?>