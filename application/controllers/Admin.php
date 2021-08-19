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

	public function uploadImg()
	{
		$this->load->view('admin/header');
        $this->load->view('admin/imageUpload');
        $this->load->view('admin/footer');
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
					// echo 'done';

					redirect('admin/uploadImg','refresh');
					
					// var_dump($this->upload->data('file_name'));
					// $this->load->view('upload_success', $data);
			}
		}
	}


