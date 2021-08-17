<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		// if(!isset($_SESSION['logged_user'])){
		// 	redirect('login/index');
		// }
		$this->load->model('Menu_model');
        $homeList = $this->Menu_model->homeMenu();
		// var_dump($homeList);

		$data['homeList'] = $homeList;
		// var_dump($data);
		$this->load->view('header');
		$this->load->view('home',$data);
		$this->load->view('footer');
		
	}

	public function about()
	{	
		$this->load->view('header');
		$this->load->view('body/about');
		$this->load->view('footer');
		
	}

	public function contact()
	{	

		$this->load->view('header');
		$this->load->view('body/contact');
		$this->load->view('footer');
		
	}

	public function farms()
	{	

		$this->load->view('header');
		$this->load->view('body/farms');
		$this->load->view('footer');
		
	}

	public function profile()
	{	
		if(!isset($_SESSION['logged_user'])){
			redirect('login/index');
		}
		// $this->load->model('Menu_model');
        // $homeList = $this->Menu_model->homeMenu();
		// var_dump($homeList);

		// $data['homeList'] = $homeList;
		// var_dump($data);
		$this->load->view('header');
		$this->load->view('body/profile');
		$this->load->view('footer');
		
	}




}


