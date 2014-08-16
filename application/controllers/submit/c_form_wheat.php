<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
#processes form data before committing to the data-layer
class C_Form_Wheat extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("companyproduction",'cp');
	}

    public function productionWheat($id) 
	{
		if ($this -> input -> post()) 
		{//check if a post was made
			if($_POST['wheatFactory'])
			{
				$_POST['wheatFactory1']=$_POST['wheatFactory'];
			}
			$item_id=($_POST['item_id']!=="")? $_POST['item_id']:"";
		}
		
		if($item_id==="")
		{
		$rec_count=$this->checkDB("wheatFactory1","wheat_productiontable");
		
		if($rec_count==0)
		{
		$frm_id="productionWheat";
	    $this -> load -> model('models_wheat/m_wheat_production');
		$this -> m_wheat_production -> addRecord($this -> session -> userdata('affiliation'));
//
		if($this->m_wheat_production->response=='ok') {
			//notify user of success		
			if($id==1)	
			{
			  redirect('addproductionwheat');
			}
			else
			{
				/*$msg='Data submitted successfully!!';
				$newdata = array('update_msg' =>$msg);
		        $this -> session -> set_userdata($newdata);	*/	
				redirect('prodWheat');
			}
			
		} 
		else 
		{
		//notify user of error/failure
		}
	}
	else
	{
		$newdata = array('update_msg' =>$this->update_e_msg);
		$this -> session -> set_userdata($newdata);		  
		redirect('addproductionwheat');
	}
	}
	else
	{
		$update_data=array(
		"opening_balance" =>$_POST["oBal_1"],
		"qty_delivered" =>$_POST["qtyDel_1"],
		"qty_rejected" =>$_POST["reject_1"],
		"supplier" =>$_POST["pSup_1"],
		"qty_issued" =>$_POST["QI_1"],
		"closing_balance" =>$_POST["CBAL_1"],
		"dosage_rate" =>$_POST["DRM_1"],
		"theoretical_prod" =>$_POST["tProdM_1"],
		"actual_prod" =>$_POST["aProd_1"],
		"production_unfort" =>$_POST["prodU_1"],
		"exp_fort" =>$_POST["fortExp_1"],
		"exp_unfort" =>$_POST["salexExpUn_1"],
		"fort_sales" =>$_POST["sales_1"],
		"edited_by" =>$this -> session -> userdata('email'),
		"time_edited" =>date('Y-m-d'),
		);
		$result= $this->cp->update("wheat_productiontable",$update_data,'WheatProductionID',$item_id);
		redirect('prodWheat');
		
	}

	}
	
	public function fortifiedWheat_market($id) 
	{	
	    $this -> load -> model('models_wheat/m_wheat_market');
		$this -> m_wheat_market -> addRecord($this -> session -> userdata('affiliation'));
		if($this->m_wheat_market->response=='ok') 
		{
			//notify user of success		
			if($id==1)	
			{
			  $newdata = array('link_id' =>"Market_level_wheat_li");
			  $this -> session -> set_userdata($newdata);		  
			  redirect('c_redirect/addEntry');
			}
			else
			{
				$this->data['form_id'] ="";
		    	$this->data['form'] = '<p><b>' . $this -> m_wheat_market -> rowsInserted . '</b> record(s) submitted successfully in approximately <b>' . $this -> m_wheat_market -> executionTime . '</b> seconds.</p>';
				$this->load_template_view();
			}			
		} 
		else 
		{
	//		//notify user of error/failure
		}
	}	
}
