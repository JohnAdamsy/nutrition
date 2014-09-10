<?php
/*helps authenticate a user*/
//error_reporting(0);
class C_Auth extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("usersmodel",'users');
        $this->load->model("companymodel",'c');
		$this->load->model("foodtypes",'f');
		$this->load->model("Vehiclemapping",'v');
		
	}

	public function login() {
	//	$this->load->model('m_systemuser');
	
		$this->m_systemuser->getUser();
		
	
	    if ($this->m_systemuser->isUser===TRUE) {
			/*create session data*/
			$myCompanyID = $this -> m_systemuser->companyID;
			$this->my_vehicles=$this->m_systemuser->my_Vehicles($myCompanyID);
			$vcount=count($this->my_vehicles);
		//	die;				
			if($vcount==0)
			{
				$newdata = array('email' => $this->m_systemuser->email, 'logged_in' => TRUE, 'userRights'=>$this->m_systemuser->userRights,'affiliation'=>"MOPHS",'vehicle'=>"MOPHS",'companyID'=>$this->m_systemuser->companyID,'userID'=>$this->m_systemuser->user_id,'my_vehicles'=>$this->my_vehicles);
				
			}
			else if($vcount==1)
			{				
				$veh_id=$this->my_vehicles[0]->vehicle_id;
				if($veh_id==0)		
				{
				   $vehicle=$this->m_systemuser->company_Type;
				}
				else
				{
					$filter=array('vehicleId' => $veh_id);
					$dets=$this->f->get_details($filter);	
					$vehicle=$dets[0]->vehicleName;
				}
				
				$newdata = array('email' => $this->m_systemuser->email, 'logged_in' => TRUE, 'userRights'=>$this->m_systemuser->userRights,'companyID'=>$this->m_systemuser->companyID,'userID'=>$this->m_systemuser->user_id,'my_vehicles'=>$this->my_vehicles,'affiliation'=>$vehicle,'vehicle'=>$vehicle);
			}
			else
			{
			  $newdata = array('email' => $this->m_systemuser->email, 'logged_in' => TRUE, 'userRights'=>$this->m_systemuser->userRights,'companyID'=>$this->m_systemuser->companyID,'userID'=>$this->m_systemuser->user_id,'my_vehicles'=>$this->my_vehicles);
			}
			
			$this -> session -> set_userdata($newdata);			
			/*$this->doRetrieveIodizationCentreDevices();
			$this->doRetrieveCompoundManufacturerNames();
			$this->doRetrievePremixTypes();
			$this->doRetrieveIodizationCentreNames();
			//specify user access rights
			/* Check Authority / User Level
			 * Where:
			 * 1. Administrator  =>  HIGHEST
			 * 2. Supervisor		
			 * 3. Inspector      =>  LOWEST
			 */	
			
			if($vcount>1)
			{
			  $this -> load -> view('vehicleSelector');	
			}
			else
			{
				switch($this->m_systemuser->userRights) {
				case 0:
					redirect(base_url() . 'c_front/vehicles', 'refresh');
					break;
				case 1:
					redirect(base_url() . 'c_front/vehicles', 'refresh');
					break;
				case 2:
					#redirect(base_url() . 'c_back', 'refresh');
					redirect(base_url() . 'c_front/vehicles', 'refresh');
					break;
				case 3:
					redirect(base_url() . 'c_front/vehicles', 'refresh');
					break;
				case 4:
				    redirect(base_url() . 'c_front/vehicles', 'refresh');
				    break;
			}
			}


		} else {
			#use an ajax request and not a whole refresh
			$data['form'] = '<p>Wrong Login Credentials<p>';
			$this -> load -> view('index', $data);
		}

	}
	/***change pass***/ 
	
	public function changepass(){
	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		if($_POST){
			$this->form_validation->set_rules('new_pass', 'Password', 'required|min_length[5]|max_length[12]');
			$this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|matches[new_pass]');
			if ($this->form_validation->run() == FALSE)
			{
					$data['pass'] = true;
					$data['code'] = $this->input->get_post("code");
					$data['form'] = validation_errors();
					$this->load->view('index',$data); 
					return;
			}else{
				$this->db->where('activationcode',$this->input->get_post('code'));
				$this->db->update('users',array('userPassword'=>md5($this->input->get_post('new_pass')),
										'is_active'=>0));
				$data['form'] = "Password updated successfully you can now login";
				$this->load->view('index',$data); 
			}
		}else{
			$data['pass'] = false;
			$this->load->view('index',$data); 
		}
	
	}

	/** forgot passs **/ 
	public function password($code =""){
		if($code !=""){ 
			$user_details=$this->users->get_details(array('activationcode'=>$code,'is_active'=>0));
			if(count($user_details)!=1){
				$data['form'] = '<p> Invalid Activation Code<p>';
				$this -> load -> view('index', $data);
				return;
			}else{
				//prompt user to change password
				$data['pass'] = true;
				$data['code'] = $code;
				$this -> load -> view('index', $data);
				return;
				echo $code;
			}
			exit;
		}
		if($_POST){
			$email = $this->input->get_post('email'); 
			$msg = "";
			$users_details = $this->users->get_details(array('userEmail'=>$email,'userName'=>$email));
			//print_r($users_details[0]->usersID); exit;
			if(count($users_details)==1){
				$code = uniqid();
				$url = site_url()."password/$code";
			
				$message="Dear ".$users_details['userName'].",\r\nPlease click on the link bellow to reset  your password:".$url."\r\n\r\nThis email was autogenerated by the system please do not reply";

				$this->email->set_newline("\r\n");  
				 $this->email->from($this->forwardemail,$this->nicename);
				 $this->email->subject('Password Reset');
				 $this->email->message($message);
				 $this->email->to($emailAddress);
				if($this->email->send()){
					$this->db->where("usersID", $users_details[0]->usersID);
					$details = array('activationcode'=>$code,'is_active'=>0);
					if($this->db->update("users", $details)){
						$msg = " A link has been sent to your email for password reset";
						//return TRUE;
					}else{
						//return FALSE;
					}
				}
				
			}else{
				$msg = "Your email does not exist. Please try again";
			}
		}
		$data['form'] = '<p>'.$msg.'<p>';
		$this -> load -> view('index', $data);	
	
	}
	
   public function doRetrieveIodizationCentreDevices(){/**gets the devices by the iodization centre and stores in the session*/
		$this->load->model('models_salt/m_internalfortifiedb2');
		try{
		$this->m_internalfortifiedb2->getManucDevicesByIodizationCenter($this->session->userdata('affiliation'));
		$device_array=array('devices'=>$this->m_internalfortifiedb2->equipment);
		$this -> session -> set_userdata($device_array);

		}catch(exception $ex){
			//ignore
		}

	}
   
   public function doRetrieveCompoundManufacturerNames(){
   	    $this->load->model('models_salt/m_internalfortifieda1');

		try{
		$this->m_internalfortifieda1->getCompoundManufacturerNames();
		$compFName_array=array('compoundManufacturers'=>$this->m_internalfortifieda1->compoundManufacturers);
		//die(var_dump($compFName_array));
		$this -> session -> set_userdata($compFName_array);
		}catch(exception $ex){
			//ignore
		}
   }
   
   public function doRetrievePremixTypes(){
   	    $this->load->model('models_salt/m_internalfortifieda1');

		try{
		$this->m_internalfortifieda1->getPremixTypes();
		$premixType_array=array('premixType'=>$this->m_internalfortifieda1->premixType);
		$this -> session -> set_userdata($premixType_array);
		}catch(exception $ex){
			//ignore
		}
   }
   
   public function doRetrieveIodizationCentreNames(){
   	    $this->load->model('models_salt/m_externaliodizedb1');

		try{
		$this->m_externaliodizedb1->getIodizationCentres();
		$centreName_array=array('iodizationCentre'=>$this->m_externaliodizedb1->centres);
		//die(var_dump($centreName_array));
		$this -> session -> set_userdata($centreName_array);
		}catch(exception $ex){
			//ignore
			//die ($ex->getMessage());
		}
   }
	function proceedToAccount()
	{
		$val=$this -> input -> get_post('selectedvehicle');		
		$c_id=convertArray($val);		
		$filter=array('vehicle_company_id' => $c_id);
		$aff=$this->v->get_details($filter);
		foreach($aff as $rw)
		{
		  $veh_id=$rw->vehicle_id;
		}
		$aff=$this->f->get_vehicleName($veh_id);
		$setdta = array('affiliation'=>$aff, 'vehicle'=>$aff);
		//print_r($setdta);
		//die();
		$this -> session -> set_userdata($setdta);
		redirect(base_url() . 'c_front/vehicles', 'refresh');
	}
	public function logout(){
		$data['form'] = '<p>You need to login.<p>';
		$this -> load -> view('index', $data);
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}
}?>