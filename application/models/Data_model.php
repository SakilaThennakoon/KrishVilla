<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Data_model extends CI_Model 
    {

    public function get_products() {
        $result = $this->db->get('products')->result_array();
        // var_dump($result);
        return $result;
    }

    public function get_category()
    {
        $query = $this->db->get('categories');
        // var_dump($query->result_array());
        return $query->result_array();
     }

     public function save_items($postData)
     {  
        // var_dump($postData);
        $data = array(
           "category_id" => $postData['category'],
           "name" => $postData['productName'],
           "qty" => $postData['quantity'],
           "price" => $postData['sellPrice'],
           "ExpireDate" => $postData['expire'],
           "description" => $postData['description']
        );
        $query = $this->db->insert('products',$data);
        return $query; 
     }
}