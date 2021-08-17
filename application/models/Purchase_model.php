<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Purchase_model extends CI_Model 
    {

    public function getMenu() {
        $result = $this->db->get('products')->result_array();
        // var_dump($result);
        return $result;
    }

    public function get_restaurant()
    {
        $query = $this->db->get('categories');
        // var_dump($query->result_array());
        return $query->result_array();
     }

     public function get_items($id)
     {
        $query = $this->db->get_where('products', array('category_id' => $id));
        return $query->result_array(); 
     }

     public function get_price($id)
     {
        $query = $this->db->get_where('products', array('id' => $id));
        return $query->result_array(); 
     }

     public function save_items($postData)
     {  
        // var_dump($postData);
        $data = array(
           "qty" => $postData['quantity'],
           "amount" => $postData['total'],
           "product_id" => $postData['category'],
           "item_name" => $postData['itemName']
        );
        $query = $this->db->insert('orders_item',$data);
        return $query; 
     }

     public function pay_total()
     {
        $query = $this->db->get('orders_item');
        return $query->result_array();
     }

     public function pay_total_new($postData)
     {
         $data = array(
            "qty" => $postData['quantity1'],
            "amount" => $postData['total1'],
            "product_id" => $postData['category1'],
            "item_name" => $postData['itemName1']
         );
         $query = $this->db->insert('orders_item',$data);
         return $query; 
     }

     public function scoreboard() 
     {
      $query = $this->db->get('products', 'id');



      // $query = $this->db->get_where('products', array('id' => 2));
        return $query->result_array(); 
      // $q = $this->db->select('products.id, orders_item.*') //select what we need
      //                 ->join('orders_item', 'products.id = orders_item.id') //do join
      //                 ->where(['products.name' => $id]) //where clause
      //                 ->get('products'); 
      // var_dump($id);
      // return $q->result_array();
      // return ($q->num_rows() > 0) ? $q->result_array() : array(); //is there something to return? otherwise return an empty array
    }
   //  $q = $this->db->select('user_account.login_id, teacher.*') //select what we need
   //                    ->join('teacher', 'user_account.login_id = teacher.teacher_id') //do join
   //                    ->where(['user_account.id' => $id]) //where clause
   //                    ->get('user_account'); 

     


}