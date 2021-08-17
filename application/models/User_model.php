<?php

class User_model extends CI_Model {

    public function insert_user($data)
        {
            // var_dump($data);
            $dataset = array(
                "firstname" => $data["firstName"],
                "lastname"     => $data["lastName"],
                "address"  => $data["addressofDelivery"],
                "city"     => $data["inputCity"],
                "phone"  => $data["imobileNumber"],
                "email"     => $data["email"],
                "user_role"  => $data["hidden"],
                "password"     => $data["passWord"],
                "photo_upload"  => $data["upload"]
                // "password"  => md5($data["Password"])
            );

            $result = $this->db->insert('users', $dataset);
                return $result;
                
        }

        public function insert_farmer($data)
        {
           
            $dataset = array(
                "farm_name" => $data["farmName"],
                "firstname" => $data["farmerName"],
                "address"  => $data["addressofFarm"],
                "area_size"     => $data["areaofFarm"],
                "city"     => $data["inputCity"],
                "crop_list"  => $data["inputCrops"],
                "phone"  => $data["imobileNumber"],
                "email"     => $data["eMail"],
                "user_role"  => $data["userRole"],
                "password"     => $data["passWord"],
                "photo_upload"  => $data["upload"]
                // "password"  => md5($data["Password"])
            );

            $result = $this->db->insert('users', $dataset);
                return $result;
        }

        public function authenticateUser($data)
        {
           $query = $this->db->get_where('users',array(
               'email' => $data['username'], 
               'password' => $data['password'])
            );
           return $query->result_array();
           
        }

        function upload_image($data)
        {
            $imgdata = file_get_contents($data['full_path']);
            var_dump($imgdata);
           
        }
}