<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
#processes form data before committing to the data-layer of the maize module
class C_Form_Maize extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
		$this->load->model("companyproduction",'cp');
	}
	
public function productionMaize($id) 
	{
		if ($this -> input -> post()) 
		{//check if a post was made
			if($_POST['maizeFactory'])
			{
				$_POST['maizeFactory1']=$_POST['maizeFactory'];
			}
			$item_id=($_POST['item_id']!=="")? $_POST['item_id']:"";
		}
		if($item_id==="")
		{
		$rec_count=$this->checkDB("maizeFactory1","maize_productiontable");
			
		if($rec_count==0)
		{		
		$frm_id="productionMaize";
	    $this -> load -> model('models_maize/M_Maize_Production');
		$this -> M_Maize_Production -> addRecord($this -> session -> userdata('affiliation'));
		if($this->M_Maize_Production->response=='ok') 
		{
			//notify user of success		
			if($id==1)	
			{		  
			   redirect('addproductionmaize');
			}
			else
			{
				/*$msg='Data submitted successfully!!';
				$newdata = array('update_msg' =>$msg);
		        $this -> session -> set_userdata($newdata);	*/	
				redirect('prodMaize');
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
		redirect('addproductionmaize');
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
		$result= $this->cp->update("maize_productiontable",$update_data,'MaizeProductionID',$item_id);
		redirect('prodMaize');	
		
	}
	}
public function fortifiedMaize_market($id) 
	{	
	    $this -> load -> model('models_maize/M_Maize_Market');
		$this -> M_Maize_Market -> addRecord($this -> session -> userdata('affiliation'));
		if($this->M_Maize_Market->response=='ok') 
		{
			//notify user of success		
			if($id==1)	
			{
			  $newdata = array('link_id' =>"Market_level_maize_li");
			  $this -> session -> set_userdata($newdata);		  
			   redirect('c_redirect/addEntry');
			}
			else
			{
				$this->data['form_id'] ="";
		    	$this->data['form'] = '<p><b>' . $this -> M_Maize_Market -> rowsInserted . '</b> record(s) submitted successfully in approximately <b>' . $this -> M_Maize_Market -> executionTime . '</b> seconds.</p>';
				$this->load_template_view();
			}			
		} 
		else 
		{
	//		//notify user of error/failure
		}
	}	
}