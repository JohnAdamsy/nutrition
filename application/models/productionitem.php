<?php

class Productionitem extends MY_Model 
{

    function get_count($filter="",$tbl)
	{
        $this->db->select('*');
        if(is_array($filter))
		{
            $this->db->where($filter);
        }
        $this->db->from($tbl);		
		$q=$this->db->get(); 
		return $q->num_rows();
    }

}