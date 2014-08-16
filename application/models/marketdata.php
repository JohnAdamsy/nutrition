<?php
class Marketdata extends MY_Model 
{
	var $model_table;
	
	function __construct() {
		parent::__construct();
		$this->model_table="market_samples_table";
	}
	
    function get_details($filter="",$tbl="market_samples_table"){
     // $this->db->select('*');
      if(is_array($filter))
	  {
           $this->db->where($filter);
      }
      $this->db->from($tbl);
      return $this->db->get()->result();
    }
	function update ($data,$where,$tbl="market_samples_table")
	{        
        $this->db->where($where);
        if($this->db->update($tbl, $data))
		{
            return TRUE;
        }else{
            return FALSE;
        }

    }
}