<?php

class Users extends MY_Model {


    function add_type($details=""){
        if(isset($_POST)){
            $details = array(
                'role'=>$this->input->post('role')
            );
        }
        if($this->db->insert("user_rolers",$details)){
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
        $this->db->from("user_roles");
        return $this->db->get()->result();
    }

    function get_Typedetails($filter=""){
        $this->db->select('*');
        if(is_array($filter)){
            $this->db->where($filter);
        }
        $this->db->from("foodtype");
        return $this->db->get()->result();
    }

    function update($id,$details=""){
        if(isset($_POST)){
            $details = array(
                'role'=>$this->input->post('role'),

            );
        }
        $this->db->where("role_id", $id);
        $this->db->update("user_roles", $details);

    }

}