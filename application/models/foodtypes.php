<?php 
class Foodtypes extends MY_Model {
	
    function add($vehicle,$id)
	{ 
        $details = array('vehicleName'=>$vehicle);
        if($id=="")
		{
           $this->db->insert("foodtype",$details);
        }
		else
		{
           $this->db->where("vehicleId", $id);
       	   $this->db->update("foodtype", $details);
        }	
		return;
    }
	
    function get_details($filter=""){
        $this->db->select('*');
        if(is_array($filter)){
            $this->db->where($filter);
        }
        $this->db->from("foodtype");
        return $this->db->get()->result();
    }
	 function get_vehicleName($filter=""){
        $this->db->select('vehicleName');
        if(!empty($filter)){
            $this->db->where('vehicleId',$filter);
        }
        $this->db->from("foodtype");
		$q=$this->db->get();				
		if($q->num_rows()>0)
		{			
			foreach ($q->result() as $row)
			{
			  $c_id = $row->vehicleName;
			}
			return $c_id;
		}		
    }
	 function delete($id)
	 {
        $this->db->where("vehicleId", $id);
        $this->db->delete("foodtype");
		return true;
    }
}