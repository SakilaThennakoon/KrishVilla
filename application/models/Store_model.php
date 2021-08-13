<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Store_model extends CI_Model {



public function getStore() {

    $this->db->where('r_id');
    $store = $this->db->get('restaurants', array('name'));
    return $store->result_array();

        // $this->db->where('r_id');
        // $store = $this->db->get('restaurants')->row_array();
        // return $store;
    }
}
