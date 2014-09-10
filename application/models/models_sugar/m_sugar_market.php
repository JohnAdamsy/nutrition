<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to IntFortifiedA2 entity
 */
use application\models\Entities\e_market_level;

class M_Sugar_Market  extends MY_Model {
	var $id, $attr, $frags, $elements, $theIds, $noOfInserts, $batchSize;

	function __construct() {
		parent::__construct();
	}

	function addRecord($iodizationCentre) {
        $s=microtime(true); /*mark the timestamp at the beginning of the transaction*/
		
		if ($this -> input -> post()) {//check if a post was made
		
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
			
			
			//print_r($this->elements);
			//die();
			//exit;
			
			//get the highest value of the array that will control the number of inserts to be done
			$this->noOfInsertsBatch=max($this->theIds);
			
			//iodization centre name obtained from the session variable => 'affiliation'
			
		
			 for($i=1; $i<=$this->noOfInsertsBatch;++$i)
			 {			 	
			 $this -> theForm = new \models\Entities\e_market_level(); //create an object of the model/*
$this -> theForm -> setsample_no($this->elements[$i]["sampleNo"]);
$this -> theForm -> setdate_collected($this->elements[$i]["dateCol"]);
$this -> theForm -> settime_collected($this->elements[$i]["TimeCol"]);
$this -> theForm -> setprod_name($this->elements[$i]["ProdName"]);
$this -> theForm -> setcollection_method($this->elements[$i]["ColletiocMethod"]);
$this -> theForm -> setcollection_reason($this->elements[$i]["collectionReason"]);
$this -> theForm -> setcollector($this->elements[$i]["collector"]);
$this -> theForm -> setdealer($this->elements[$i]["dealer"]);
$this -> theForm -> setmanufacturer($this->elements[$i]["manufacturer"]);
$this -> theForm -> setsample_size($this->elements[$i]["sampleSize"]);
$this -> theForm -> setdate_dispatched($this->elements[$i]["dateDispatched"]);
$this -> theForm -> setlaboratory($this->elements[$i]["laboratory"]);
$this -> theForm -> setinvoice_no($this->elements[$i]["invoiceNo"]);
$this -> theForm -> setremarks($this->elements[$i]["remarks"]);
$this -> theForm -> setinvoice_date($this->elements[$i]["invoiceDate"]);
$this -> theForm -> setspecimen_seal($this->elements[$i]["specimenSeal"]);
$this -> theForm -> setsignature($this -> session -> userdata('email'));
$this -> theForm -> setvehicle_type("Sugar");
$this -> theForm -> settime_added("".date('Y-m-d'));
$this -> theForm -> setedited_by("N/A");
$this -> theForm -> settime_edited("0000-00-00");
				
	//		print_r($this -> theForm);
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
