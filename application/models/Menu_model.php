<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Menu_model extends CI_Model 
    {

    public function getMenu() {
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




    public function getDishesh()    
    {

        // $query = $this->db->get_where('all_items', array('itemCategory' => $id));
        // $this->db->where('r_id',$id);
        $dish = $this->db->get('dishesh', array('name'));
        return $dish->result_array();
    }

    
}