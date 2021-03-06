<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Cart extends CI_Controller {

    // function __construct(){
    //     parent::__construct();
    //     //Load cart libraray
    //     $this->load->library('cart');

    public function index() {

        $data['cartItems'] = $this->cart->contents();
        $this->load->view('header');
        $this->load->view('body/cart', $data);
        $this->load->view('footer');
    }

    public function purchase() {

		if(!isset($_SESSION['logged_user'])){
			redirect('login/index');
		}

        $this->load->model('Purchase_model');
		$categoryList = $this->Purchase_model->get_restaurant();
		$data =array(
			"currentController" =>$this->router->fetch_class(),
			"currentMethod" =>$this->router->fetch_class(),
			"categoryList" => $categoryList
		);

        $this->load->view('header');
        $this->load->view('body/online',$data);
        $this->load->view('footer');
    }

    public function getItems($id)
	{
		$this->load->model('Purchase_model');
		$List = $this->Purchase_model->get_items($id);
		echo json_encode($List);
        // var_dump($itemList);

        // echo json_encode(array("sss"=> $id));
	}


    public function getPrice($id)
	{
		$this->load->model('Purchase_model');
		$PriceList = $this->Purchase_model->get_price($id);
		echo json_encode($PriceList);
		
	}

	public function getItemName($id)
	{
		$this->load->model('Purchase_model');
		$NameList = $this->Purchase_model->get_name_item($id);
		echo json_encode($NameList);
		
	}

    public function saveItems()
	{
		$this->load->model('Purchase_model');
		$item = $this->Purchase_model->save_items($this->input->post());
		echo json_encode($item);


		// var_dump ($this->input->post());
	}


    public function checkout() {

		if(!isset($_SESSION['logged_user'])){
			redirect('login/index');
		}

        $this->load->model('Purchase_model');
		$buy = $this->Purchase_model->pay_total();

		$data =array(
			
			"buy" => $buy
		);

        $this->load->view('header');
        $this->load->view('body/checkout',$data);
        $this->load->view('footer');
    }

	public function checkout_new() 
	{
		$this->load->model('Purchase_model');
		$r = $this->Purchase_model->pay_total_new($this->input->post());
		
	
	}

	public function teacher(){ 

		$this->load->model('Purchase_model');
		$PriceList = $this->Purchase_model->scoreboard();



		// $this->load->model('Purchase_model');
		// // $id = $this->input->post('name'); 
		
		// $data = $this->Purchase_model->scoreboard($id);
		var_dump($PriceList);
		// $this->load->view('teacher/teacher', $data);
	  }
}
