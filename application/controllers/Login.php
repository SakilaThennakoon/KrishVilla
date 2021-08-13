<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{   
		$this->load->view('header');
		$this->load->view('login/sign_in');
		$this->load->view('footer');
        
		
	}

    public function register()
	{	
		$this->load->view('header');
		$this->load->view('login/register');
        $this->load->view('footer');
		
	}

    public function save_user()
    {   
        // echo json_encode(array('status' =>$this->input->post()));
        
		// $this->load->model('User_model');
		// $r = $this->User_model->insert_entry($this->input->post());

		// if($r){
		// 	echo json_encode(true);
		// }else{
		// 	echo json_encode(false);
		// }
		
	}


        
}



