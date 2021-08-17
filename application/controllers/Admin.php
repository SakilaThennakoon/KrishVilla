<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {

		if(!isset($_SESSION['logged_user'])){
			redirect('login/index');
		}

        $this->load->model('Data_model');
		$details = $this->Data_model->get_products();

		$data =array(
			"details" => $details
		);

        $this->load->view('admin/header');
        $this->load->view('admin/home',$data);
        $this->load->view('admin/footer');
    }

    public function category() {

		if(!isset($_SESSION['logged_user'])){
			redirect('login/index');
		}

        $this->load->model('Data_model');
		$allCategory = $this->Data_model->get_category();
		$data =array(
			"allCategory" => $allCategory
		);

        $this->load->view('admin/header');
        $this->load->view('admin/addItems',$data);
        $this->load->view('admin/footer');
    }

    public function Items($id)
	{
		$this->load->model('Data_model');
		$List = $this->Data_model->get_items($id);
		echo json_encode($List);
	}

    public function saveItems()
	{
		$this->load->model('Data_model');
		$item = $this->Data_model->save_items($this->input->post());

        redirect('admin/category','refresh');
	}
}