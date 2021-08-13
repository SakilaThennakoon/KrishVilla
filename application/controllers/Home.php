<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		$this->load->model('Menu_model');
        $homeList = $this->Menu_model->homeMenu();
		// var_dump($homeList);

		$data['homeList'] = $homeList;
		// var_dump($data);
		$this->load->view('header');
		$this->load->view('home',$data);
		$this->load->view('footer');
		
	}



}


