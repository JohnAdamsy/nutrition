<?php
class Vehiclemapping extends MY_Model {

    function add($details,$id)
	{
       
        if($id=="")
		{
           $this->db->insert("company_vehicles",$details);
        }
		else
		{
           $this->db->where("vehicle_company_id", $id);
       	   $this->db->update("company_vehicles", $details);
        }
		return;
    }
    function get_details($filter=""){
        $this->db->select('*');
        if(is_array($filter)){
            $this->db->where($filter);
        }
        $this->db->from("company_vehicles");
        return $this->db->get()->result();
    }
	 function delete($id)
	 {
        $this->db->where("vehicle_company_id", $id);
        $this->db->delete("company_vehicles");
		return true;
    }
}