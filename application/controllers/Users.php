<?php
/*helps authenticate a user*/
//error_reporting(0);
class Users extends MY_Controller {

    public $c_companyTypes;
	public $forwardemail;
	public $nicename;

    public function __construct() {
        parent::__construct();
        $this->load->model("companymodel",'c');
        $this->load->model("usersmodel",'users');
        $this->load->model("userrole",'role');
		$this->forwardemail=$this->config->item('email_server');
		$this->nicename=$this->config->item('email_nicename');
		
		$this->is_logedIn();

    }
	
	function sendTest()
	{
		//echo "";
		       $this->email->set_newline("\r\n");  
         		$this->email->from($this->forwardemail,$this->nicename);
         		$this->email->subject('Changed login credentials.');
         		$this->email->message("sending test messages");
         		$this->email->to("msaisimunye80@gmail.com");
				//email()
     			if (!$this->email->send())
      				{ 
						echo "Error MSG!!!!!";	
      				}
					else
					{
						echo "Yes No Error MSG!";
					}
	}
    public  function index($filter=""){
        $result= $this->c->get_details();
    }

    public function update(){
		
		$this->is_user_allowed();
        $this->c->update_company();
    }

    public function edit_form($id="")
    {
		$this->is_user_allowed();
        $data['usersID']=$id;
        if(!empty($id))
        {
            $result= $this->users->get_details(array('usersID'=>$id));
            $data['result']=$result;
        }
		  $fil=array('role !=' => 'sa');
		  $data['roles']=$this->role->get_details($fil);
          $data['foodtype']=$this->role->get_details($fil);
          $this -> load -> view('dashboard/users/edit_users', $data);
    }
	 public function add_form($id="")
    {
		$this->is_user_allowed();
        $data['usersID']=$id;
        if(!empty($id))
        {
            $result= $this->users->get_details(array('usersID'=>$id));
            $data['result']=$result;
        }
		$fil=array('role !=' => 'sa');
		  $data['roles']=$this->role->get_details($fil);
          $data['foodtype']=$this->role->get_details($fil);
          $this -> load -> view('dashboard/users/add_users', $data);
    }


    private function getCompanyTypes()
    {
        return $this -> c_companyTypes=$this->company_type->get_details();
    }
	 public function manageUsers()
    {
		$this->is_user_allowed();
		$category = trim($this -> session -> userdata('vehicle'));
		$c_name="Users";		
		if($category!=="MOPHS")
		{
		 $id= $this ->session -> userdata('companyID');
		 
		 $filter=array('company_id'=>$id);
       	 $result= $this->c->get_details($filter);
	   	 foreach($result as $row):
	    	 $c_name=strtoupper(trim($row->company_name));
			// $c_name=ucfirst(trim($row->company_name));
	     endforeach;	   
		}
			$header=array('Email','Name','Role');
		    if($this->read_rights==="true")
			{
				array_push($header,'Actions');
			}
		
             $data['h_title']="Manage users";
             $data['mh_title']=$c_name;
             $data['content_page'] = 'users/manage_users';
             $tmpl = array ( 'table_open'  => '<table id="big_table" border="0" cellpadding="0" cellspacing="0" class="mytable" style="font-size:10px; width:100%">' );
             $this->table->set_template($tmpl);
             $this->table->set_heading($header);
	   $data['content']="Vehicles";
            $this -> load -> view('template_loggedin', $data);
    }
    function getList()
        {   
					
		$category = trim($this -> session -> userdata('vehicle'));
		$id= $this ->session -> userdata('companyID');
		if($category!=="MOPHS")
		{
			$this->datatables->select('usersID,userEmail,usersFullnames,role')
                    ->join('user_rolers','user_rolers.role_id = users.user_role')
                    ->unset_column('usersID')
                    ->add_column('Actions', get_buttons_users('$1'),'usersID')
					->where('user_role >',1)
					->where('company_id', $id)
                    //->where('account_no', $user)
                    //->where('name !=', "Per Child")
                    ->from('users');
                    echo $this->datatables->generate();	   
		}
		else
		{
			 $this->datatables->select('usersID,userEmail,userName,role')
                    ->join('user_rolers','user_rolers.role_id = users.user_role')
                    ->unset_column('usersID')
                    ->add_column('Actions', get_buttons_users('$1'),'usersID')
					->where('userName != "admin"')
					->where('company_id', $id)
					//->where('userName!=', 'admin')
                    //->where('account_no', $user)
                    //->where('name !=', "Per Child")
                    ->from('users');
                    echo $this->datatables->generate();
		}
					
					
        }

function register(){
	
	 $this->is_user_allowed();
     $names=trim($this->input->get_post('names',TRUE));
   	 $uname=//trim($this->input->get_post('uname',TRUE));
   	 $userEmail=trim($this->input->get_post('userEmail',TRUE));
   	 $rights=trim($this->input->get_post('rights',TRUE));
   	 $roles=trim($this->input->get_post('rights',TRUE));//3;//trim($this->input->get_post('roles',TRUE));
	 $pass=genBigcode(8);
	 $uname=$ctype."USR".gencode(4);
	 $filter=array('userName' => $uname);
   	 $cde=count($this->users->get_details($filter));
	 while($cde>0)
	  		{
				//.date('Y')
	    		$uname=$ctype."USR".gencode(4);
				$filter=array('userName' => $uname);
   	    		$cde=count($this->users->get_details($filter));
	  		}
	 
	 
	 
	 $filter=array('userEmail' => $userEmail,'company_id' => $this ->session -> userdata('companyID'));
	// print_r($filter);
	 //die();
   	 $count=count($this->users->get_details($filter));
	 //print_r($count);
	 //die();
	// $count=0;
     if($count==0)
   	 {
      $code=genBigcode(6);
	  $filter=array('activationcode' => $code);
   	  $cde=count($this->users->get_details($filter));

	  while($cde>0)
	  {
	    $code=genBigcode(6);
		$filter=array('activationcode' => $code);
   	    $cde=count($this->users->get_details($filter));
	  }
   	  $url = site_url()."activate/$code";

      $message="Dear $names,\r\nYou have been added as a user....... Your Login credentials are:\r\n Username: $userEmail\r\n  Password: $pass\r\nPlease click on the link bellow to activate your accoutnt:$url.\r\n\r\nThis email was atomaticaly generated by the system";

	     $this->email->set_newline("\r\n");  
         $this->email->from($this->forwardemail,$this->nicename);
         $this->email->subject('Account registration request');
         $this->email->message($message);
         $this->email->to($userEmail);
     if (!$this->email->send())
      { 
		$data = array('reg_msg'=> "Could not create user account. The email server is not responding. Please try again later or contact admin.");	
	    $this->session->set_userdata($data);
		// echo "server error";
		// die();
        redirect('manageUsers');
      }
	  else
	  {
		// echo "adding user";		  
		//  die();
		 $this->users->add($pass,$code,$uname);
	     $data = array('reg_msg'=> "User created and login credentials sent to $userEmail.");
	     $this->session->set_userdata($data);
	     redirect('manageUsers');
	  }

	}
	else
	{	
	// echo "user exists";
	//	  die();
		$data = array('reg_msg'=> "An account with the email adddress: $userEmail already exists in our database.");	
	    $this->session->set_userdata($data);
        redirect('manageUsers');			
	}
}
function edit_user($id)
{
	 $this->is_user_allowed();
     $names=trim($this->input->get_post('names',TRUE));
   	 $uname=trim($this->input->get_post('uname',TRUE));
   	 $userEmail=trim($this->input->get_post('userEmail',TRUE));
   	 $rights=trim($this->input->get_post('rights',TRUE));
   	 $roles=3;//trim($this->input->get_post('roles',TRUE));
	 $pass=genBigcode(8);
	 $filter=array('userEmail' => $userEmail,'company_id' => $this ->session -> userdata('companyID'));
	// print_r($filter);
	 //die();
   	 $count=count($this->users->get_details($filter));
	// print_r($this->users->get_details($filter));
	// die();
    

	 	$filter=array('usersID' => $id);
	 	$dets=$this->users->get_details($filter);	
	 	foreach($dets as $row)
	 	{
			$old_email=trim($row->userEmail);
			$old_pass=trim($row->userPassword);
	 	}
		if($old_email===trim($userEmail))
			{
				$this->users->update($old_pass,$id,"y");
	    		$updt_msg = array('updt_msg'=> "User details succesfully updated.");
	    		$this->session->set_userdata($updt_msg);
	    		redirect('manageUsers');
			}
		else
			{
				if($count==0)
   	 			{
  	  			$url = base_url();
      			$message="Dear $names,\r\nYou changed your email address....... Your Login credentials are:\r\n Username: $uname\r\n  Password: $pass\r\nPlease click on the link bellow to access your accoutnt:$url.\r\n\r\nThis email was atomaticaly generated by the system";

	     		$this->email->set_newline("\r\n");  
         		$this->email->from($this->forwardemail,$this->nicename);
         		$this->email->subject('Changed login credentials.');
         		$this->email->message($message);
         		$this->email->to($userEmail);
     			if (!$this->email->send())
      				{ 
						$data = array('updt_msg'=> "Could not update user account details. The email server is not responding. Please try again later or contact admin.");	
	    				$this->session->set_userdata($data);
						// echo "server error";
						// die();
       					redirect('manageUsers');
      				}
	  			else
	  				{
		 				$this->users->update($pass,$id,'y');
	     				$data = array('updt_msg'=> "User details successfully updated and details sent to $userEmail. Changes will take effect in your next login session.");
	     				$this->session->set_userdata($data);
	     				redirect('manageUsers');
	  				}
			}
			else
			{
				$data = array('updt_msg'=> "An account with the email adddress: $userEmail already exists in our database.");	
	    		$this->session->set_userdata($data);
        		redirect('manageUsers');			
			}
	  	}
	
}
public function change_pass($id)
    {
        $data['usersID']=$id;
        $result= $this->users->get_details(array('usersID'=>$id));
        $data['result']=$result;
        $this -> load -> view('dashboard/users/change_pass', $data);
    }
	
public function changePass($id)
{
     $opass=trim($this->input->get_post('opass',TRUE));
   	 $npass=trim($this->input->get_post('npass',TRUE));
	 $filter=array('usersID' => $id);
	 $dets=$this->users->get_details($filter);	
	// print_r($dets);
	// die();
	 
	 	foreach($dets as $row)
	 	{
			$userEmail=trim($row->userEmail);
			$uname=trim($row->userName);
			$names=trim($row->usersFullnames);
			$old_pass=trim($row->userPassword);
	 	}	 	
		if($old_pass!=md5($opass))
			{
				$updt_msg = array('pass_msg'=> "Old password entered is wrong. Operation not comleted.");
	    		$this->session->set_userdata($updt_msg);
	    		redirect('manageUsers');
			}
		else
			{
  	  			$url = base_url();
      			$message="Dear $names,\r\nYou changed your account password....... Your new login credentials are:\r\n Username: $uname\r\n  Password: $npass\r\nPlease click on the link bellow to access your accoutnt:$url.\r\n\r\nThis email was atomaticaly generated by the system";

	     		$this->email->set_newline("\r\n");  
         		$this->email->from($this->forwardemail,$this->nicename);
         		$this->email->subject('Changed login credentials.');
         		$this->email->message($message);
         		$this->email->to($userEmail);
				//email()
     			if (!$this->email->send())
      				{ 
						$data = array('pass_msg'=> "Could not update your account password. The email server is not responding. Please try again later or contact admin.");	
	    				$this->session->set_userdata($data);
						// echo "server error";
						// die();
       					redirect('manageUsers');
      				}
	  			else
	  				{
						$udata=array('userPassword'=>md5($npass));
		 				$this->users->activate($id,$udata);
	     				$data = array('pass_msg'=> "Account password successfully updated and details sent to $userEmail. Changes will take effect in your next login session.");
	     				$this->session->set_userdata($data);
	     				redirect('manageUsers');
	  				}
				
	  		}
}		
}
?>