<?php

class Usersmodel extends MY_Model {

    function add($pass,$cde,$uname){
        if(isset($_POST)){
            $details = array(
                'usersFullnames'=>$this->input->get_post('names',TRUE),
                'userName'=>$this->input->get_post('userEmail',TRUE),
                'userEmail' =>$this->input->get_post('userEmail',TRUE),
                'company_id' => $this ->session -> userdata('companyID'),
				'userPassword'=>md5($pass),
				'userRights'=>$this->input->get_post('rights',TRUE),
				'user_role'=>$this->input->get_post('rights',TRUE),
				'activationcode'=>$cde,
				'is_active'=>0,
				//'affiliation'=> $this ->session -> userdata('affiliation'),
            );
        }
        if($this->db->insert("users",$details)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
	function add_user($details){        
        if($this->db->insert("users",$details))
		{
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
        $this->db->from("users");
        return $this->db->get()->result();
    }

    function update ($pass,$id,$cde){
        if(isset($_POST)){
            $details = array(
                'usersFullnames'=>$this->input->get_post('names',TRUE),
                'userName'=>$this->input->get_post('uname',TRUE),
                'userEmail' =>$this->input->get_post('userEmail',TRUE),
                'company_id' => $this ->session -> userdata('companyID'),
				'userRights'=>$this->input->get_post('rights',TRUE),
				'user_role'=>3,//$this->input->get_post('rights',TRUE),//roles
            );
        }
        $this->db->where("usersID", $id);
        if($this->db->update("users", $details)){
            return TRUE;
        }else{
            return FALSE;
        }

    }
	 function activate($id,$data){
	/*	 print_r($data);
		 echo "<br />";
		 print_r($id);
		 die();*/
        $this->db->where("usersID", $id);
        if($this->db->update("users", $data))
		{
            return TRUE;
        }
		else
		{
            return FALSE;
        }

    }


}