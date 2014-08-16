<?php

class Companymodel extends MY_Model {

    protected $table_name = "'company'";
    protected $primary_key = "company_id";

    function add_company($c_foodtype){
        if(isset($_POST))
		{		
        $details = array(
                'company_name'=>$this->input->get_post('inputCName',TRUE),
                'company_code'=>$this->input->get_post('inputCcode',TRUE),
                'other_info' =>$this->input->get_post('inputOInfo',TRUE),
                'company_type_id' =>$this->input->get_post('inputCType',TRUE),
				'contact_person' =>$this->input->get_post('c_person',TRUE),
                'emailAddress' =>$this->input->get_post('email',TRUE),
				'address' =>$this->input->get_post('addr',TRUE),
                'location' =>$this->input->get_post('loc',TRUE),
				'phone' =>$this->input->get_post('phone',TRUE));
        }
        if($this->db->insert("company",$details))
		{
				$this->db->from("company");
				$this->db->select_max("company_id");			
				$q=$this->db->get();				
				if($q->num_rows()>0)
				{			
					foreach ($q->result() as $row)
					{
					  $c_id = $row->company_id;
					}
					$details=array('company_id'=>$c_id,'vehicle_id'=>$this->input->get_post('inputFType',TRUE));					$this->vehiclemapping->add($details,"");
					return TRUE;
				}	
        }
		else{
            return FALSE;
        }
    }

    function get_details($filter=""){
        $this->db->select('*');
      if(is_array($filter)){
           $this->db->where($filter);
       }
        $this->db->from("company");
        return $this->db->get()->result();
    }
	function get_details1($filter="",$fld){
        $this->db->select($fld);
      if(is_array($filter)){
           $this->db->where($filter);
       }
        $this->db->from("company");
		$q = $this->db->get();
		if($q->num_rows()>0)
			{				
				foreach ($q->result() as $row)
				 {
					 $itm=$row->affiliation;
				 }
			}
		 return $itm;
       }

    function update_dets ($food,$id)
	{
        if(isset($_POST))
		{			
            $details = array(
                'company_name'=>$this->input->get_post('inputCName',TRUE),
                'company_code'=>$this->input->get_post('inputCcode',TRUE),
                'other_info' =>$this->input->get_post('inputOInfo',TRUE),
                'company_type_id' =>$this->input->get_post('inputCType',TRUE),
				/*'foodtype' =>$this->input->get_post('inputFType',TRUE),				
				/*'contact_person' =>$this->input->get_post('c_person',TRUE),
                'emailAddress' =>$this->input->get_post('email',TRUE),				
				'phone' =>$this->input->get_post('phone',TRUE),*/
				'address' =>$this->input->get_post('addr',TRUE),
                'location' =>$this->input->get_post('loc',TRUE)
				/*'affiliation' =>$food*/
				);
        }
        $this->db->where("company_id", $id);
		if($this->db->update("company", $details))
		{
            return TRUE;
        }
		else
		{
            return FALSE;
        }
    }
	function update_cperson ($id)
	{
        if(isset($_POST))
		{			
            $details = array(
                'contact_person' =>$this->input->get_post('c_person',TRUE),
                'emailAddress' =>$this->input->get_post('email',TRUE),				
				'phone' =>$this->input->get_post('phone',TRUE)
				);
        }
        $this->db->where("company_id", $id);
		if($this->db->update("company", $details))
		{
            return TRUE;
        }
		else
		{
            return FALSE;
        }
    }
	 function get_CompanyTypes(){
        //$this->db->select('*');
        $this->db->from("company_type");
        return $this->db->get()->result();
    }
	

}