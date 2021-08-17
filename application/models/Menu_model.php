<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Menu_model extends CI_Model 
    {

    public function get_all_items() {
        $result = $this->db->get('dishesh')->result_array();
        // var_dump($result);
        return $result;
    }


        public function homeMenu()        
    {
        $result = $this->db->get('dishesh')->result_array();
        return $result;
    }


	public function get_vegitables()
	{
		
		$result = $this->db->get('dishesh')->result_array();
        return $result;
		
	}

	public function get_fruits()
	{
		
		$result = $this->db->get('dishesh')->result_array();
        return $result;
		
	}


// not used below functions ------------------------------------------

    public function add_cart()
	{
		// $this->db->where('d_id', $id);
		// $result = $this->db->get('dishesh')->row_array();
        // return $result;

        
        $dish = $this->db->get('dishesh',array('d_id'));
        return $dish->result_array();

        // $query = $this->db->get_where('dishesh', array('about' =>$id));
        // return $query->result_array();
        
        // $this->db->where('d_id',$a);
        // $query = $this->db->get_where('dishesh');
            // var_dump($query->result_array());
        // return $query->result_array();

        // $this->db->where('d_id', $id);
        // $dish = $this->db->get('dishesh')->row_array();
        // return $dish;
		
	}




    public function getDishesh()    
    {

        // $query = $this->db->get_where('all_items', array('itemCategory' => $id));
        // $this->db->where('r_id',$id);
        $dish = $this->db->get('dishesh', array('name'));
        return $dish->result_array();
    }

    
}