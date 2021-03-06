<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Category extends CI_Controller {

    function __construct(){
        parent::__construct();
            // Load cart libraray
        $this->load->library('cart');}

    public function index() {

        $this->load->model('Menu_model');
        $dishesh = $this->Menu_model->get_all_items();
        // var_dump($dishesh);
    }

    public function menu() {

		$this->load->model('Menu_model');
		$dishesh = $this->Menu_model->getDishesh();
		// echo json_encode($dishesh);


    
        $this->load->model('Store_model');
        $res = $this->Store_model->getStore();

        $data['dishesh'] = $dishesh;
        $data['res'] = $res;
        $this->load->view('header');
        $this->load->view('body/vegitables', $data);
        $this->load->view('footer');
    }


    public function vegitables()
	{
		$this->load->model('Menu_model');
		$vegi = $this->Menu_model->get_vegitables();

        $data['vegi'] = $vegi;
		$this->load->view('header');
		$this->load->view('body/vegitables',$data);
		$this->load->view('footer');
		
	}

    public function fruits()
	{   
        $this->load->model('Menu_model');
		$fruit = $this->Menu_model->get_fruits();

        $data['fruit'] = $fruit;
		$this->load->view('header');
		$this->load->view('body/fruits',$data);
		$this->load->view('footer');
		
	}


// not used below functions ------------------------------------------

    public function addToCart() 
    {   
        if(!isset($_SESSION['logged_user'])){
			redirect('login/index');
		}
        $this->load->model('Menu_model');
        $dishesh = $this->Menu_model->add_cart();
        var_dump($dishesh);

        // $data =array(
		// 	"addCart" => $addCart
		// );

        
        // $this->load->view('header');
		// $this->load->view('body/newCart',$data);
		// $this->load->view('footer');
        
        $data = array (
            'd_id'    => $dishesh['d_id'],
            'r_id'  => $dishesh['r_id'],
            'qty'   =>1,
            'price' => $dishesh['price'],
            'name' => $dishesh['name'],
            'image' => $dishesh['img']
        );
        $this->cart->insert($data);
        // redirect(base_url(). 'cart/index');
            
        
    }

    public function addCart() {

        // $this->load->model('Menu_model');
        // $dishesh = $this->Menu_model->getMenu();

        var_dump($this->router->fetch_class());
        var_dump($this->config->item('hidden'));
    }
}