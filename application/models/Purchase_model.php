<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Purchase_model extends CI_Model 
    {

    public function getMenu() {
        $result = $this->db->get('dishesh')->result_array();
        // var_dump($result);
        return $result;
    }

    public function get_restaurant()
    {
        $query = $this->db->get('restaurants');
        // var_dump($query->result_array());
        return $query->result_array();
     }

     public function get_items($id)
     {
        $query = $this->db->get_where('dishesh', array('r_id' => $id));
        return $query->result_array(); 
     }

     public function get_price($id)
     {
        $query = $this->db->get_where('dishesh', array('d_id' => $id));
        return $query->result_array(); 
     }

     public function save_items($postData)
     {  
        // var_dump($postData);
        $data = array(
           "quantity" => $postData['quantity'],
           "price" => $postData['total'],
           "d_id" => $postData['category'],
           "d_name" => $postData['itemName']
        );
        $query = $this->db->insert('user_orders',$data);
        return $query; 
     }

     public function pay_total()
     {
        $query = $this->db->get('user_orders');
        return $query->result_array();
     }


}