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

		redirect('home/index');
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
		
		redirect('farmer/index');
	}

	public function authenticate() 
	{
		
			$this->load->model('User_model');
			$r = $this->User_model->authenticateUser($this->input->post());
			// var_dump($r);
					if($r){
						$data = array(
							'users_role' => $r[0]['user_role'],
							'logged_user' => $r[0]['firstname'],
							'user_id' => $r[0]['id'],
							'last_name' => $r[0]['lastname'],
							'Email' => $r[0]['email'],
							'Address' => $r[0]['address'],
							'Mobile' => $r[0]['phone']);
			
						$this->load->Library('session');
						$this->session->set_userdata($data);
						// var_dump($this->session);
								if($r[0]['user_role'] == 'farmer'){
									redirect('farmer/index');
									
								}else{
									if($r[0]['user_role'] == 'admin'){
										redirect('admin/index');

									}else{
											redirect('home/index');
										}
									}
					}else{
						redirect('login/index', 'refresh');
						}

	}

	public function imageUpload()
		{
			var_dump($_POST);
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('uploadPic')) // this the button id
			{
					$error = array('error' => $this->upload->display_errors());
					echo "error";
					var_dump($error);
			}
			else
			{
					$data = array('upload_data' => $this->upload->data());
					$data = array(
						"image" => $data['upload_data']['file_name'],
					 );
					 $this->db->where('id',0);
					 $r = $this->db->update('products',$data);
					echo 'done';
					
					// var_dump($this->upload->data('file_name'));
					// $this->load->view('upload_success', $data);
			}
		}
	
	



	public function logout() {
			// echo 'done';
			// $this->session->unset_userdata('logged_user');
		$this->session->sess_destroy();
			redirect('login/index');
		}



// ----------------------------------- testing------------------------------------------------------------------

	public function test()
		{    
			var_dump($_POST);
			// $this->load->model('User_model');
			// $r = $this->User_model->insert_farmer($this->input->post());
			
			// redirect('farmer/index');
		}


}



        




