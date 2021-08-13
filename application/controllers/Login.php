<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{   
		$this->load->view('login/sign_in');
        
		
	}

    public function register()
	{
		$this->load->view('login/register');
        
		
	}

    public function save_user()
    {   
        echo json_encode(array('status' =>$this->input->post()));
        
		// $this->load->model('User_model');
		// $r = $this->User_model->insert_entry($this->input->post());

		// if($r){
		// 	echo json_encode(true);
		// }else{
		// 	echo json_encode(false);
		// }
		
	}
}



