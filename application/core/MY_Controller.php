<?php
## Extend CI_Controller to include Doctrine Entity Manager
error_reporting(0);
class  MY_Controller  extends  CI_Controller  {

public $em, $response, $theForm, $rowsInserted, $executionTime,$data,
      $selectCompManufacturers,$selectPremixType, $selectIodizationCentre,$selectFactoryByManufacturer,$manufacturer,$factories,$update_e_msg,$userVehicle,$delete_er_msg,$delete_success_msg,$my_vehicles, $read_rights;

function __construct()  {
		parent::__construct();
		
		$acc_lvl=$this -> session -> userdata('userRights');
		$this->read_rights=($acc_lvl===1 || $acc_lvl===2)? "true": "false";
		/* Instantiate Doctrine's Entity manage so we don't have
		   to everytime we want to use Doctrine */
		   
		$this->em = $this->doctrine->em;
		$this->response='';
		$this->theForm='';
		$this->data='';
		
		$this->selectCompManufacturers='';
		$this->selectPremixType='';
		$this->selectIodizationCentre='';
		
		$this->getCompManufacturerNamesAndIds();
		$this->getPremixTypesAndIds();
		$this->getIodizationCentreNames();
		$this->getFactoriesByVehicle();
		$this->load->Model("brandmodel","brand");
		$this->load->Model("productionitem","p");	
		$this->update_e_msg=$this->config->item('update_e_msg');
		$this->delete_er_msg=$this->config->item('delete_er_msg');
		$this->delete_success_msg=$this->config->item('delete_success_msg');
		
		
	}

	function  getRepositoryByFormName($form){
		$this->the_form=$this->em->getRepository($form);
		return $this->theForm;
	}

	public function getCompManufacturerNamesAndIds(){/*obtained from the session data*/
		       if($this -> session -> userdata('compoundManufacturers'))
				foreach($this -> session -> userdata('compoundManufacturers') as $key=>$value){
				$this->selectCompManufacturers.= '<option value="'.$value['manufacturerId'].'">'.$value['manufacturerCompName'].'</option>'.'<br />';
				}
				
				return $this->selectCompManufacturers;
			
		}
	
	public function getPremixTypesAndIds(){  /*obtained from the session data*/
	       if($this -> session -> userdata('premixType'))
			foreach($this -> session -> userdata('premixType') as $key=>$value){
			$this->selectPremixType.= '<option value="'.$value['productId'].'">'.$value['productName'].'</option>'.'<br />';
			}
		return $this->selectPremixType;
	}
	
	public function getIodizationCentreNames(){ /*obtained from the session data*/
	       if($this -> session -> userdata('iodizationCentre'))
			foreach($this -> session -> userdata('iodizationCentre') as $key=>$value){
			$this->selectIodizationCentre.= '<option value="'.$value['factoryNumber'].'">'.$value['factoryName'].'</option>'.'<br />';
			}
		return $this->selectIodizationCentre;
	}
	
	public function getFactoriesByVehicle(){
		$this->load->model('models_wheat/m_wheat_externalfort_b1');
		//$this->factories=array('factoriesByVehicle'=>$this->M_Wheat_ExternalFort_B1->getFactoriesByVehicle('wheat'));
		$this->factories=$this->m_wheat_externalfort_b1->getFactoriesByVehicle('wheat');
		//$this->factoriesWheat=$this->M_Wheat_ExternalFort_B1->getFactoriesByVehicle('wheat'); /*later, use ajax to determine which vehicle*/
		//$this->factoriesMaize=$this->M_Wheat_ExternalFort_B1->getFactoriesByVehicle('maize');
		//$this->factoriesSugar=$this->M_Wheat_ExternalFort_B1->getFactoriesByVehicle('sugar');
		//$this->factoriesSalt=$this->M_Wheat_ExternalFort_B1->getFactoriesByVehicle('salt');
		//$this->factoriesOil=$this->M_Wheat_ExternalFort_B1->getFactoriesByVehicle('oil');
		
		//var_dump($this->factories);
		//exit;
		foreach($this->factories as $key=>$value){
		//$this->factoriesSalt.= '<option value="'.$value['factoryNumber'].'">'.$value['factoryName'].'</option>'.'<br />';
		//$this->factoriesMaize.= '<option value="'.$value['factoryNumber'].'">'.$value['factoryName'].'</option>'.'<br />';
		//$this->factoriesOil.= '<option value="'.$value['factoryNumber'].'">'.$value['factoryName'].'</option>'.'<br />';
		$this->factories.= '<option value="'.$value['factoryNumber'].'">'.$value['factoryName'].'</option>'.'<br />';
		//$this->factoriesMaize.= '<option value="'.$value['factoryNumber'].'">'.$value['factoryName'].'</option>'.'<br />';
		}
		return true;
	}

   public function load_template_view($my_data=array()){
   	        $this->data['page']='Front-End';
			$this->data['content'] = 'Vehicles';
			$this->data['title']='Vehicles';			
			$this -> load -> view('template_loggedin', $this->data);
   }
   public function is_logedIn()
	{
		$is_logged_in=$this -> session -> userdata('logged_in');
		if(empty($is_logged_in))
		{
			redirect('c_front/access_site');
		}
	}
	 public function is_user_allowed()
	{
		$user_allowed=$this->read_rights;
		if($user_allowed==="false")
		{
			redirect('c_front/vehicles');
			exit;
		}
	}
	
	public function radio_boxes()
	{
		
		$brand = $this->brand->get_details(array('company.company_id'=>$this->session->userdata('companyID')));
		if(count($brand)>0)
		{
			return $brand;
		}else{
			return $brand;
		}		
	}
/***Charts  section***/
    function line_chart($series, $series_name,$title){
        $serie['data'] = $series;
       // $data['charts'] = $this->highcharts->set_serie($serie)->render();
        return $chart = $this->highcharts->set_serie($serie,$series_name)->set_title($title)->render();
       // $this->load->view('charts/charts', $data);
    }
	/**
	 * pie function.
	 * Draw a Pie, and run javascript callback functions
	 * 
	 * @access public
	 * @return void
	 */
	function chart($series,$series_name,$title,$type,$y_axis,$x_axis)
	{
		
		$callback = "function() { return '<b>'+ this.point.name +'</b>: '+ this.y +' %'}";
		
		$tool->formatter = $callback;
		$plot->pie->dataLabels->formatter = $callback;
		
		$this->highcharts
			->set_type($type)
			->set_serie($series,$series_name)
			->set_axis_titles($x_axis, $y_axis)
			->set_title($title)
			->set_tooltip($tool)
			->set_plotOptions($plot);
		
		$charts = $this->highcharts->render();
		return $charts;
		//$this->load->view('charts/charts', $data);
	}
	function checkDB($fld,$tbl)
	{
		if ($this -> input -> post()) 
		{//check if a post was made
			$comp_id=$_POST[$fld];
			$month=$_POST['prodMonth_1'];
			$year=$_POST['harvestYear'];
			$filter=array('company_id' => $comp_id,'prod_month' =>$month,'year' => $year);
			return $this->p->get_count($filter,$tbl);
		}
	}
	
	/**get all vehicles per company**/
	
	public function all_company_vehicles($company_id){
		$query= $this->db->select('vehicle_id,vehicleName')
			->from('company')
			->join('company_vehicles','company_vehicles.company_id=company.company_id')
			->join('vehicle_type' ,'vehicle_type.vehicleId=company_vehicles.vehicle_id')
			->where('company.company_id',$company_id)
			->get()
			->result();
			
		return $query;
			
	}
	
	public function getCompaniesByAffiliation($aff){
		$query= $this->db->select('company_id,company_name')
			->from('comp_vehicles')
			->where('vehicle',$aff)
			->get()
			->result();			
		return $query;
			
	}
	public function getCompany_list($filter=array()){		
	
	  $tbl='market_samples_table as a';	
	  $this->db->select('a.company_id,b.company_name');				
	  if(!empty($filter))
	  {
           $this->db->where($filter);
      }
	  $this->db->join('company as b', 'a.company_id = b.company_id', 'left');
	  $this->db->group_by('a.company_id');
      $this->db->from($tbl);
      $q=$this->db->get()->result();
	 // print_r($q); die;
	  return $q;
			
	}
	public function create_list($fld)
	{
	  $tbl='market_samples_table';	
	  $this->db->select($fld);				
	  $this->db->group_by($fld);
      $this->db->from($tbl);
      $q=$this->db->get()->result();
	 // print_r($q); die;
	  return $q;
	}
	/**add a vehicle to a company **/
	/*/public function add_vehicle_to_company($company_id,$vehicle_id){
		if($this->db->insert('company_vehicles',array('company_id'=>$company_id,'vehicle_id'=>$vehicle_id))){
			return TRUE;
		}else{
			return FALSE;
		}
	}*/	
	
	

}  