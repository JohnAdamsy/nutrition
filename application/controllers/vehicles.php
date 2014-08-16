<?php
/*helps authenticate a user*/
//error_reporting(0);
class Vehicles extends MY_Controller {

    public $c_companyTypes;

    public function __construct() {
        parent::__construct();
		$this->load->model("companymodel",'c');
        $this->load->model("foodtypes",'f');
		$this->load->model("Vehiclemapping",'v');
		$this->is_logedIn();
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
          $this -> load -> view('dashboard/vehicles/edit_users', $data);
    }
	 public function add_form($id="")
    {	
		$this->is_user_allowed();
        $data['vehicleId']=$id;
        if(!empty($id))
        {
            $result= $this->f->get_details(array('vehicleId'=>$id));
            $data['result']=$result;
        }
        $this -> load -> view('dashboard/vehicles/add_vehicle', $data);
    }
	 public function add_map($id="")
    {
		$this->is_user_allowed();
        $data['item_id']=$id;
        if(!empty($id))
        {
            $result= $this->v->get_details(array('vehicle_company_id'=>$id));
            $data['result']=$result;
        }
        $data['companies']=$this->c->get_details();
        $data['c_vehicles']=$this->f->get_details();
			
        $this -> load -> view('dashboard/vehicles/addMapping', $data);
    }

    private function getCompanyTypes()
    {
        return $this -> c_companyTypes=$this->company_type->get_details();
    }
	 public function manageVehicles()
    {
		// echo  $this->read_rights;die;
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
		
		$v_header=array('Vehicle Name');
		$m_header=array('Company','Vehicle');
		if($this->read_rights==="true")
			{
				array_push($v_header,'Actions');
				array_push($m_header,'Actions');
			}
             $data['h_title']="Manage vehicles";
             $data['mh_title']=$c_name;
			 $data['v_header']=$v_header;
			 $data['m_header']=$m_header;
             $data['content_page'] = 'vehicles/manage_vehicles';            
	   		 $data['content']="Vehicles";
             $this -> load -> view('template_loggedin', $data);
    }
    function getVehicle()
        {  
		
			if($this->read_rights==="true")
			{					
			$this->datatables->select('vehicleId,vehicleName')
            ->unset_column('vehicleId')
			//->where_not_in('vehicleName', $items)	
            ->add_column('Actions', get_vehiclebuttons('$1'),'vehicleId')
            ->from('foodtype');
			}
			else
			{
				$this->datatables->select('vehicleId,vehicleName')
            ->unset_column('vehicleId')
            ->from('foodtype');
			}
            echo $this->datatables->generate();	
	    }
	  function getMap()
        {   
			if($this->read_rights==="true")
			{						
			$this->datatables->select('vehicle_company_id,company_name,vehicleName')
			
			->join('company','company.company_id=company_vehicles.company_id')	
			->join('foodtype','foodtype.vehicleId=company_vehicles.vehicle_id')	
			
            ->unset_column('vehicle_company_id')
            ->add_column('Actions', get_mapbuttons('$1'),'vehicle_company_id')
            ->from('company_vehicles');
			}
			else
			{
				$this->datatables->select('vehicle_company_id,company_name,vehicleName')			
			->join('company','company.company_id=company_vehicles.company_id')	
			->join('foodtype','foodtype.vehicleId=company_vehicles.vehicle_id')	
			
            ->unset_column('vehicle_company_id')
            ->from('company_vehicles');
			}
            echo $this->datatables->generate();	
	    }	

function add($id)
{
	 $this->is_user_allowed();
     $vehicle=trim($this->input->get_post('inputVName',TRUE));
	 $filter=array('vehicleName' => $vehicle);
   	 $cde=count($this->f->get_details($filter));	
     if($cde==0)
   	 {
		 $this->f->add($vehicle,$id);		 
	    // $data = array('reg_msg'=> "Success!! Vehicle created.");
	    // $this->session->set_userdata($data);
	     redirect('manageVehicles');
	 }
	 else
	 {
		$data = array('reg_msg'=> "Sorry a vehicle with the name: $vehicle already exists in our database.");	
	    $this->session->set_userdata($data);
        redirect('manageVehicles');			
	 }
}
function addMapping($id)
{
	 $this->is_user_allowed();
     $comp=trim($this->input->get_post('company',TRUE));
	 $veh=trim($this->input->get_post('vehicle',TRUE));
	 $filter=array('company_id' => $comp,'vehicle_id' => $veh);
   	 $cde=count($this->v->get_details($filter));	
	 if($cde==0)
   	 {
		 $details = array('company_id'=>$comp,'vehicle_id'=>$veh);		 
		 $this->v->add($details ,$id);	
	     redirect('manageVehicles');
	 }
	 else
	 {
		$data = array('reg_msg'=> "Sorry a the mapping you are trying to create already exists.");	
	    $this->session->set_userdata($data);
        redirect('manageVehicles');			
	 }
}
public function delMapping($id)
	{
		$this->is_user_allowed();
		 $result= $this->v->get_details(array('vehicle_company_id'=>$id));
         foreach($result as $rw):
		 $compid=$rw->company_id;	 
		 endforeach;
		 
		 $filter=array('company_id' => $compid);
   	     $cde=count($this->v->get_details($filter));
		 
		 if($cde>1)
		 {	
		 	if($this->v->delete($id)==true)
			{
				echo $this->config->item('delete_success_msg_map');
			}
			else
			{
				echo $this->config->item('del_err_msg_map');
			}
		 }
		 else
		 {
			 echo $this->config->item('delete_err_msg_map');
		 }
	}
	
public function delvehicle($id)
	{
		$this->is_user_allowed();
		 $filter=array('vehicle_id' => $id);
   	     $cde=count($this->v->get_details($filter));
		 if($cde==0)
		 {	
		 	if($this->f->delete($id)==true)
			{
				echo $this->config->item('delete_success_msg_veh');
			}
			else
			{
				echo $this->config->item('del_err_msg_map');
			}
		 }
		 else
		 {
			 echo $this->config->item('delete_err_msg_veh');
		 }
	}
}

?>