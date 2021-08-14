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

    //  public function get_items_price($id)
    //  {
    //     $query = $this->db->get_where('all_items', array('itemCode' => $id));
    //     return $query->result_array(); 
    //  }

    //  public function save_items($postData)
    //  {  
    //     // var_dump($postData);
    //     $data = array(
    //        "itemQty" => $postData['quantity'],
    //        "batchNo" => $postData['batch'],
    //        "expireDate" => $postData['expire'],
    //        "modifiedUser" => 1,
    //        "categoryId" => $postData['category'],
    //        "itemCode" => $postData['itemName']
    //     );
    //     $query = $this->db->insert('items',$data);
    //     return $query; 
    //  }


}