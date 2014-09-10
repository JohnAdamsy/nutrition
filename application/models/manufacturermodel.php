<?php

class Manufacturermodel extends MY_Model {

    function add($details=""){
        if(isset($_POST)){
            $details = array(
                'manufacturer_email' =>$this->input->get_post('manufacturer_email',TRUE),
                'manufacturer_email' =>$this->input->get_post('manufacturer_email',TRUE),
                'manufacturer_location' =>$this->input->get_post('	manufacturer_location',TRUE),
            );
        }
        if($this->db->insert("manufacturers",$details)){
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
        $this->db->from("manufacturers");
        return $this->db->get()->result();
    }

    function update ($id){
        if(isset($_POST)){
            $details = array(
                'manufacturer_email' =>$this->input->get_post('manufacturer_email',TRUE),
                'manufacturer_email' =>$this->input->get_post('manufacturer_email',TRUE),
                'manufacturer_location' =>$this->input->get_post('manufacturer_location',TRUE),
            );
        }
        $this->db->where("manufacturer_id", $id);
        if($this->db->update("manufacturers", $details)){
            return TRUE;
        }else{
            return FALSE;
        }

    }


}