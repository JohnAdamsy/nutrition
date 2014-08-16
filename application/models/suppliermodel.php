<?php

class Suppliermodel extends MY_Model {

    function add($details=""){
        if(isset($_POST)){
            $details = array(
                'supplier_name'=>$this->input->get_post('supplier_name',TRUE),
                'supplier_email' =>$this->input->get_post('supplier_email',TRUE),
                'supplier_location' =>$this->input->get_post('supplier_location',TRUE),
                'manufacturer_id' =>$this->input->get_post('manufacturer_id',TRUE),
            );
        }
        if($this->db->insert("suppliers",$details)){
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
        $this->db->from("suppliers");
        return $this->db->get()->result();
    }

    function update ($id){
        if(isset($_POST)){
            $details = array(
                'supplier_name'=>$this->input->get_post('supplier_name',TRUE),
                'supplier_email' =>$this->input->get_post('supplier_email',TRUE),
                'supplier_location' =>$this->input->get_post('supplier_location',TRUE),
                'manufacturer_id' =>$this->input->get_post('manufacturer_id',TRUE),
            );
        }
        $this->db->where("supplier_id", $id);
        if($this->db->update("suppliers", $details)){
            return TRUE;
        }else{
            return FALSE;
        }

    }


}