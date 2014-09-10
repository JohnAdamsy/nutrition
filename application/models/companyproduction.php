<?php

class Companyproduction extends MY_Model {

    protected $table_name = "'company'";
    protected $primary_key = "company_id";
	
	public function getCompanyName($id,$fld,$tbl)
	{
		$filter=array($fld=>$id);
		$result= $this->get_details($filter,$tbl);
		$cid=$result[0]->company_id;
		
		$filter=array('company_id'=>$cid);
		$result= $this->get_details($filter,'company');
		return $c_name=strtoupper(trim($result[0]->company_name));		
	}
  
    function get_details($filter="",$tbl){
      $this->db->select('*');
      if(is_array($filter))
	  {
           $this->db->where($filter);
      }
      $this->db->from($tbl);
      return $this->db->get()->result();
    }
	function update ($tbl,$data,$fld,$id)
	{        
        $this->db->where($fld, $id);
        if($this->db->update($tbl, $data))
		{
            return TRUE;
        }else{
            return FALSE;
        }

    }
}