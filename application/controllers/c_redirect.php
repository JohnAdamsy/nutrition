<?php
/*helps authenticate a user*/
//error_reporting(0);
class C_Redirect extends MY_Controller {

  public function __construct() 
	{
        parent::__construct();
		$this->is_logedIn();
    }
	function addEntry()
	{
		$this->data['form']='';
		$this->data['return_page']=1;
		$this->data['page']='Front-End';
		$this->data['content'] = 'Vehicles';
		$this->data['title']='Vehicles';
		$this -> load -> view('template_loggedin', $this->data);
	}
}
?>