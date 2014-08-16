<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
#processes form data before committing to the data-layer
class C_Form_Oil extends MY_Controller {
	
 	public function __construct() {
		parent::__construct();
		$this->load->model("companyproduction",'cp');
		$this->data['return_page']=0;
	}
	public function fortifiedOil_prod($id) 
	{
		if ($this -> input -> post()) 
		{//check if a post was made
			if($_POST['oilFactory'])
			{
				$_POST['oilFactory1']=$_POST['oilFactory'];
			}
			$item_id=($_POST['item_id']!=="")? $_POST['item_id']:"";
		}
		
		if($item_id==="")
		{
		
		$rec_count=$this->checkDB("oilFactory1","oil_productiontable");
				
		if($rec_count==0)
		{	

		$frm_id="fortifiedOil_B1_1";
	    $this -> load -> model('models_oil/m_oil_production');
		$this -> m_oil_production -> addRecord($this -> session -> userdata('affiliation'));
//print
		//echo $this->m_oil_production->response;
		//die();
		if($this->m_oil_production->response=='ok') {
			//notify user of success		
			if($id==1)	
			{	  
			   redirect('addproductionoil');
			}
			else
			{
				/*$msg='Data submitted successfully!!';
				$newdata = array('update_msg' =>$msg);
		        $this -> session -> set_userdata($newdata);	*/	
				redirect('prodOil');
			}
			
		} 
		else 
		{
	//		//notify user of error/failure
		}
		}
	else
	{
		 $newdata = array('update_msg' =>$this->update_e_msg);
		 $this -> session -> set_userdata($newdata);		  
		 redirect('addproductionoil');
	}
	
	}
	else
	{
		$update_data=array(
		"opening_balance" =>$_POST["oBal_1"],
		"qty_delivered" =>$_POST["qtyDel_1"],
		"qty_rejected" =>$_POST["reject_1"],
		"supplier" =>$_POST["pSup_1"],
		"qty_issued_o_f" =>$_POST["QIOF_1"],
		"qty_issued_m" =>$_POST["QIM_1"],
		"closing_balance" =>$_POST["CBAL_1"],
		"dosage_rate_o_f" =>$_POST["DROF_1"],
		"theoretical_prod" =>$_POST["tProd_1"],
		"actual_prod_oil" =>$_POST["aProdo_1"],
		"actual_prod_fats" =>$_POST["aProdf_1"],
		"dosage_rate_m" =>$_POST["DRM_1"],
		"theoretical_prod_m" =>$_POST["tProdM_1"],
		"actual_prod_m" =>$_POST["aProd_1"],		
		"production_unfort" =>$_POST["prodU_1"],
		"exp_fats" =>$_POST["exportedFats"],
		"exp_oil" =>$_POST["exportedOil"],		
		"edited_by" =>$this -> session -> userdata('email'),
		"time_edited" =>date('Y-m-d'),
		);
		
		$result= $this->cp->update("oil_productiontable",$update_data,'OilProductionID',$item_id);
		redirect('prodOil');
	}

	}
	/*	
	public function productionOil($id) 
	{
		if ($this -> input -> post()) 
		{//check if a post was made
			if($_POST['oilFactory'])
			{
				$_POST['oilFactory1']=$_POST['oilFactory'];
			}
		}
		
		$rec_count=$this->checkDB("oilFactory1","oil_productiontable1");
				
		if($rec_count==0)
		{		
		$frm_id="productionOil";
	    $this -> load -> model('models_oil/m_oil_production1');
		$this -> m_oil_production1 -> addRecord($this -> session -> userdata('affiliation'));
//
		if($this->m_oil_production1->response=='ok') {
			//notify user of success		
			if($id==1)	
			{
			  redirect('addproductionoil');
			}
			else
			{
				/*$msg='Data submitted successfully!!';
				$newdata = array('update_msg' =>$msg);
		        $this -> session -> set_userdata($newdata);		* /
				redirect('prodOil');
			}
			
		} 
		else 
		{
	//		//notify user of error/failure
		}
}
	else
	{
		 $newdata = array('update_msg' =>$this->update_e_msg);
		 $this -> session -> set_userdata($newdata);		  
		 redirect('addproductionoil');
	}
}*/
	public function fortifiedOil_market($id) 
	{	
	    $this -> load -> model('models_oil/m_oil_market');
		$this -> m_oil_market -> addRecord($this -> session -> userdata('affiliation'));
		if($this->m_oil_market->response=='ok') 
		{
			//notify user of success		
			if($id==1)	
			{
			  $newdata = array('link_id' =>"Market_level_oil_li");
			  $this -> session -> set_userdata($newdata);		  
			   redirect('c_redirect/addEntry');
			}
			else
			{
				$this->data['form_id'] ="";
		    	$this->data['form'] = '<p><b>' . $this -> m_oil_market -> rowsInserted . '</b> record(s) submitted successfully in approximately <b>' . $this -> m_oil_market -> executionTime . '</b> seconds.</p>';
				$this->load_template_view();
			}			
		} 
		else 
		{
	//		//notify user of error/failure
		}
	}	
}
?>