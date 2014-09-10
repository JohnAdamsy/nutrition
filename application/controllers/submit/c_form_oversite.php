<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
#processes form data before committing to the data-layer
class C_Form_oversite extends MY_Controller 
{

	public function __construct() {
		parent::__construct();
		$this->load->model("marketdata",'md');
	}

    public function adddataco($id) 
	{
		if ($this -> input -> post()) 
		{//check if a post was made
			$item_id=($_POST['item_id']!=="")? $_POST['item_id']:"";
		}
		
		if($item_id==="")
		{
	    $this -> load -> model('models_oversite/m_oversite_co');
		$this -> m_oversite_co -> addRecord($this -> session -> userdata('affiliation'));

				if($this->m_oversite_co->response=='ok') 
				{
					//notify user of success		
					if($id==1)	
					{
					  redirect('adddataco');
					}
					else
					{
						/*$msg='Data submitted successfully!!';
						$newdata = array('update_msg' =>$msg);
						$this -> session -> set_userdata($newdata);*/
						redirect('dbdataco');
					}
					
				} 
				else 
				{
				//notify user of error/failure
				}
		}
		else
		{
			$update_data=array(
			"producer_name" =>$_POST["prodName"],
			"type_of_poduct" =>$_POST["prodtype"],
			"brand_name" =>$_POST["brandname"],
			"date_of_sample_collection" =>$_POST["collectionDate"],
			"sample_collection_location" =>$_POST["collectionPlace"],
			//"store_type" =>$_POST["store"],
			"labelled_as_fortified" =>$_POST["labelled"],
			"sample_amount_taken" =>$_POST["sampleAmnt"],
			"date_of_analysis" =>$_POST["analysisDate"],
			"result_a" =>$_POST["resultA"],
			"result_b" =>$_POST["resultB"],
			"result_c" =>$_POST["resultC"],
			"edited_by" =>$this -> session -> userdata('email'),
			"date_edited" =>date('Y-m-d'),
			);
			$where=array('item_id'=>$item_id);
			$result= $this->md->update($update_data,$where);
			redirect('dbdataco');
			
		}

	}
	 public function adddatanl($id) 
	{
		if ($this -> input -> post()) 
		{//check if a post was made
			$item_id=($_POST['item_id']!=="")? $_POST['item_id']:"";
		}
		
		if($item_id==="")
		{
	    $this -> load -> model('models_oversite/m_oversite_nl');
		$this -> m_oversite_nl -> addRecord($this -> session -> userdata('affiliation'));

				if($this->m_oversite_nl->response=='ok') 
				{
					//notify user of success		
					if($id==1)	
					{
					  redirect('adddatanl');
					}
					else
					{
						/*$msg='Data submitted successfully!!';
						$newdata = array('update_msg' =>$msg);
						$this -> session -> set_userdata($newdata);*/
						redirect('dbdatanl');
					}
					
				} 
				else 
				{
				//notify user of error/failure
				}
		}
		else
		{
			$update_data=array(
			"producer_name" =>$_POST["prodName"],
			"type_of_poduct" =>$_POST["prodtype"],
			"brand_name" =>$_POST["brandname"],
			"production" =>$_POST["production"],
			"date_of_sample_collection" =>$_POST["collectionDate"],
			"sample_collection_location" =>$_POST["collectionPlace"],
			"store_type" =>$_POST["store"],
			"expiry_date" =>$_POST["expiryDate"],
			"date_received_lab" =>$_POST["labDate"],
			"labelled_as_fortified" =>$_POST["labelled"],
			"date_of_analysis" =>$_POST["analysisDate"],
			"result_a" =>$_POST["resultA"],
			"result_b" =>$_POST["resultB"],
			"result_c" =>$_POST["resultC"],
			"edited_by" =>$this -> session -> userdata('email'),
			"date_edited" =>date('Y-m-d'),
			);
			$where=array('item_id'=>$item_id);
			$result= $this->md->update($update_data,$where);
			redirect('dbdatanl');
			
		}

	}
	 public function adddatagain($id) 
	{
		if ($this -> input -> post()) 
		{//check if a post was made
			$item_id=($_POST['item_id']!=="")? $_POST['item_id']:"";
		}
		
		if($item_id==="")
		{
	    $this -> load -> model('models_oversite/m_oversite_gain');
		$this -> m_oversite_gain -> addRecord($this -> session -> userdata('affiliation'));
		
		// $this->m_oversite_gain->response;
		///die;

				if($this->m_oversite_gain->response=='ok') 
				{
					//notify user of success		
					if($id==1)	
					{
					  redirect('adddatagain');
					}
					else
					{
						/*$msg='Data submitted successfully!!';
						$newdata = array('update_msg' =>$msg);
						$this -> session -> set_userdata($newdata);*/
						redirect('dbdatagain');
					}
					
				} 
				else 
				{
				//notify user of error/failure
				}
		}
		else
		{
			$update_data=array(
			"producer_name" =>$_POST["prodName"],
			"type_of_poduct" =>$_POST["prodtype"],
			"brand_name" =>$_POST["brandname"],
			"production" =>$_POST["production"],
			"date_of_sample_collection" =>$_POST["collectionDate"],
			"sample_collection_location" =>$_POST["collectionPlace"],
			"store_type" =>$_POST["store"],
			"expiry_date" =>$_POST["expiryDate"],
			"labelled_as_fortified" =>$_POST["labelled"],
			"sample_amount_taken" =>$_POST["sampleAmnt"],
			"date_of_analysis" =>$_POST["analysisDate"],
			"result_a" =>$_POST["resultA"],
			"result_b" =>$_POST["resultB"],
			"result_c" =>$_POST["resultC"],
			"edited_by" =>$this -> session -> userdata('email'),
			"date_edited" =>date('Y-m-d'),
			);
			$where=array('item_id'=>$item_id);
			$result= $this->md->update($update_data,$where);
			redirect('dbdatagain');
			
		}

	}
}