<?php

class Brandmodel extends MY_Model {


    function add($details=""){
        if(isset($_POST)){
            $details = array(
                'company_id'=>$this ->session -> userdata('companyID'),
                'brand_name'=>$this->input->get_post('brand',TRUE),
				'description'=>$this->input->get_post('descr',TRUE)
            );
        }
        if($this->db->insert("companybrands",$details)){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function get_details($filter=""){
        $this->db->select('*');
        if(is_array($filter)){
            $this->db->where($filter);
        }
		$this->db->join('company','company.company_id = companybrands.company_id');
        $this->db->from("companybrands");
        return $this->db->get()->result();
    }



    function update($id){
        if(isset($_POST)){
            $details = array(
                'brand_name'=>$this->input->get_post('brand',TRUE),
				'description'=>$this->input->get_post('descr',TRUE)
            );
        }
        $this->db->where("brand_id", $id);
        $this->db->update("companybrands", $details);

    }
	 function delete($id)
	 {
        $this->db->where("brand_id", $id);
        $this->db->delete("companybrands");
		return true;
    }

}