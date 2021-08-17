<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farmer extends CI_Controller {

	public function index()
	{	
		if(!isset($_SESSION['logged_user'])){
			redirect('login/index');
		}
		$this->load->model('Menu_model');
        $homeList = $this->Menu_model->homeMenu();
		// var_dump($homeList);

		$data['homeList'] = $homeList;
		// var_dump($data);
		$this->load->view('farmer/header');
		$this->load->view('farmer/home',$data);
		$this->load->view('farmer/footer');
	}

    public function vegitables()
	{
		$this->load->model('Menu_model');
		$vegi = $this->Menu_model->get_vegitables();

        $data['vegi'] = $vegi;
		$this->load->view('farmer/header');
		$this->load->view('body/vegitables',$data);
		$this->load->view('farmer/footer');
		
	}

    public function fruits()
	{   
        $this->load->model('Menu_model');
		$fruit = $this->Menu_model->get_fruits();

        $data['fruit'] = $fruit;
		$this->load->view('farmer/header');
		$this->load->view('body/fruits',$data);
		$this->load->view('farmer/footer');
		
	}

    public function about()
	{	
		$this->load->view('farmer/header');
		$this->load->view('body/about');
		$this->load->view('farmer/footer');
		
	}

	public function contact()
	{	

		$this->load->view('farmer/header');
		$this->load->view('body/contact');
		$this->load->view('farmer/footer');
		
	}

	public function farms()
	{	

		$this->load->view('farmer/header');
		$this->load->view('body/farms');
		$this->load->view('farmer/footer');
		
	}

}