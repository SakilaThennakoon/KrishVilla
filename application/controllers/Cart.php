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


    public function additems()
	{

		$this->load->view('items/additems',$data);
		
	}
}
