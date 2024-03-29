<?php

## Extend CI_Controller to include Doctrine Entity Manager

error_reporting(0);

class  MY_Controller  extends  CI_Controller  {



public $em, $response, $theForm, $rowsInserted, $executionTime,$data,

      $selectCompManufacturers,$selectPremixType, $selectIodizationCentre,$selectFactoryByManufacturer,$manufacturer,$factories, $read_rights;



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



   public function load_template_view(){
   	        $this->data['page']='Front-End';

			$this->data['content'] = 'Vehicles';

			$this->data['title']='Vehicles';

			$this -> load -> view('template', $this->data);

   }

}  