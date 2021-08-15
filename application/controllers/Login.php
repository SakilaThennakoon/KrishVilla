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

	public function farmer_register()
	{	

		$this->load->view('header');
		$this->load->view('login/farmer_register');
        $this->load->view('footer');
		
	}

    public function save_user()
    {   
		// var_dump($_POST);  
		$this->load->model('User_model');
		$r = $this->User_model->insert_user($this->input->post());

		// if($r){
		// 	echo json_encode(true);
		// }else{
		// 	echo json_encode(false);
		// }
		
	}

	public function save_farmer()
    {    
		$this->load->model('User_model');
		$r = $this->User_model->insert_farmer($this->input->post());
		
	}

	public function authenticate() 
	{
		$this->load->model('User_model');
		$r = $this->User_model->authenticateUser($this->input->post());
		// var_dump($r);

		if($r){

			$data = array(
				'users_role' => $r[0]['user_role'],
				'logged_user' => $r[0]['first_name'],
				'farm_name' => $r[0]['farm_name']
			);

			$this->load->Library('session');
			$this->session->set_userdata($data);
			// var_dump($this->session);
			
			if($r[0]['user_role'] == 'customer'){
				echo 'customer';
			}else{
				echo 'farmer';
				}
			// $this->load->view('header');
			// $this->load->view('home');
			// $this->load->view('footer');
		}else{

			// redirect('login/index', 'refresh');
			$this->load->view('header');
			$this->load->view('login/sign_in');
			$this->load->view('footer');
		}
		


		
	}

        
}



