<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to e_oversite entity
 */
use application\models\Entities\entities_oversite\e_oversite;

class M_Oversite_co  extends MY_Model {
	var $id, $attr, $frags, $elements, $theIds, $noOfInserts, $batchSize;

	function __construct() {
		parent::__construct();
	}

	function addRecord($iodizationCentre) {
        $s=microtime(true); /*mark the timestamp at the beginning of the transaction*/
		
		if ($this -> input -> post()) {//check if a post was made
			
			unset($_POST['item_id']);			
			$this->elements = array();
			$this->theIds=array();
			foreach ($this -> input -> post() as $key => $val) {//For every posted values
		   //print(($key." ".$val)).'<br \>';
			   
			//check if posted value is among the cloned ones   
			 if(!strpos("_",$key)){//useful to keep all the  non-cloned elements in the loop
			 	$key=$key."_1";
			 }
			  		//we separate the attribute name from the number
				$this->frags = explode("_", $key);				   
				$this->id = $this->frags[1];  // the id	
				$this->attr = $this->frags[0];//the attribute name
				$this->theIds[$this->attr]=$this->id;
			//print($this->attr."  ".$this->id."  ".$val).'<br />';
			   if (!empty($val)) 
				//We then store the value of this attribute for this element.
			  $this->elements[$this->id][$this->attr]=htmlentities($val);
					
			} //close foreach($_POST)
			
			//exit;
			
			//get the highest value of the array that will control the number of inserts to be done
			$this->noOfInsertsBatch=max($this->theIds);
			
		//	print_r($this->elements);
			
		//	print_r("<br>");
			
			//iodization centre name obtained from the session variable => 'affiliation'
			
		
			 for($i=1; $i<=$this->noOfInsertsBatch;++$i)
			 {			 	
			 $this -> theForm = new \models\Entities\entities_oversite\e_oversite(); //create an object of the model
			 
			$this -> theForm -> setcompany_id($this -> session -> userdata('companyID'));
			$this -> theForm -> setcompany_type($iodizationCentre);
			
			$this -> theForm -> setproducer_name($this->elements[$i]["prodName"]);				
			$this -> theForm -> settype_of_poduct($this->elements[$i]["prodtype"]);
			$this -> theForm -> setbrand_name($this->elements[$i]["brandname"]);
			$this -> theForm -> setdate_of_sample_collection($this->elements[$i]["collectionDate"]);
			$this -> theForm -> setsample_collection_location($this->elements[$i]["collectionPlace"]);
			$this -> theForm -> setstore_type($this->elements[$i]["store"]);
			$this -> theForm -> setlabelled_as_fortified($this->elements[$i]["labelled"]);
			$this -> theForm -> setsample_amount_taken($this->elements[$i]["sampleAmnt"]);
			$this -> theForm -> setdate_of_analysis($this->elements[$i]["analysisDate"]);
			$this -> theForm -> setresult_a($this->elements[$i]["resultA"]);
			$this -> theForm -> setresult_b($this->elements[$i]["resultB"]);
			$this -> theForm -> setresult_c($this->elements[$i]["resultC"]);
			$this -> theForm -> setadded_by($this -> session -> userdata('email'));
			$this -> theForm -> setdate_added("".date('Y-m-d H:i:s'));
			$this -> theForm -> setedited_by("N/A");
			$this -> theForm -> setdate_edited("0000-00-00");
				
		//print_r($this -> theForm);
		//die();
				$this -> em -> persist($this -> theForm);
//echo "here";
//die();

        	//now do a batched insert, default at 5
			  $this->batchSize=5;
		if($i % $this->batchSize==0){
		try{
					
				$this -> em -> flush();
				$this->em->clear(); //detactes all objects from doctrine
				}catch(Exception $ex){
				    die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch
				
			} else if($i<$this->batchSize || $i>$this->batchSize || $i==$this->noOfInsertsBatch && 
			$this->noOfInsertsBatch-$i<$this->batchSize){
				 //total records less than a batch, insert all of them
				try{
					
				$this -> em -> flush();
				$this->em->clear(); //detactes all objects from doctrine
				}catch(Exception $ex){
					die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch
				 
				
			}//end of batch condition
				
				 } //end of innner loop
		}//close the this->input->post
		$e=microtime(true);
		$this->executionTime=round($e-$s,'4');
        $this->rowsInserted=$this->noOfInsertsBatch;
		return $this -> response = 'ok';
	}

}//end of class InternalFortifiedC1
