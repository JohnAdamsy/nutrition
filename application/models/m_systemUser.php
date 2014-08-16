<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to SystemUser entity
 */
use application\models\Entities\e_systemuser;

class M_systemuser extends MY_Model {
	var $isUser,$email,$userRights,$vehicle,$user_id,$companyID,$company_Type;

	function __construct() {
		parent::__construct();
		$this->isUser=FALSE;
		$this->email='';
		$this->userRights='';
		$this->vehicle='';
		$this->user_id='';
		$this->companyID='';
		$this->company_Type="";

	}

	function getUser() {
        $s=microtime(true); /*mark the timestamp at the beginning of the transaction*/
		
		if ($this -> input -> post()) {//check if a post was made
			
       //Working with an object of the entity
		$user = $this->em->getRepository('models\Entities\e_systemuser')->findOneBy(array('username' => $this -> input -> post('username'), 'password' => md5($this -> input -> post('secret')), 'is_active' =>1, 'activationcode' =>'y'));
	
	// print_r($user); 
	// echo "<br />";
//	 print_r($this->em->getRepository('models\Entities\e_systemuser')->findAll());
	// die();
	    if($user){
	    	$this->email = $user -> getUsername();
			$this->userRights=$user->getUserRights();
			$this->user_id=$user->getId();
			$this->companyID=$user->getcompany_id();	
				
			$filter=array('company_id'=>$this->companyID);
			$dets=$this->companymodel->get_details($filter);
			
			$type_id=$dets[0]->company_type_id;
					
			$filter=array('company_type_id'=>$type_id);
			$dets=$this->companytype->get_dbData("company_type",$filter);		
			
			//print_r($dets);
			//die;	
			$this->company_Type=$dets[0]->company_type_name;
			return $this->isUser=TRUE;
	    }else{
	    	return $this -> isUser = FALSE;
	    }
		
		}//close the this->input->post
		$e=microtime(true);
		$this->executionTime=round($e-$s,'4');
		
	} /*end of getUser()*/
	
	/*used by controllers/C_Auth */
	public function getVehicleNameByUser($affiliation)
	{
		try{
			//using DQL
	      $query = $this->em->createQuery('SELECT m.vehicleName FROM models\Entities\E_ManufacturerFortified m WHERE m.manufactuerFortName
	                                      IN (SELECT f.manufacturerFortName FROM models\Entities\E_Factories f WHERE f.factoryName= :name)');
		  $query->setParameter('name', $affiliation);
          $this->vehicle = $query->getResult();
		
			}catch(exception $ex){
				//ignore
				die($ex->getMessage());
			}
			
			return $this->vehicle;
	}
	function my_Vehicles($id)
	{
		$my=array();
        $this->db->where('company_id',$id);
        $this->db->from("company_vehicles");
		$q = $this->db->get();
		if($q->num_rows()>0)
			{				
				foreach ($q->result() as $row)
				 {
					 $my[]=$row;
			     }
				return $my; 
			}
	}
	
	
	function getAffiliations(){
		
	}
	
	function deactivateUser(){
		
	}
	
	function activateUser(){
		
	}
	
	function listUsers(){
		
	}

}//end of class M_systemuser
