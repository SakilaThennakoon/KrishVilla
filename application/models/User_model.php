<?php

class User_model extends CI_Model {

    public function insert_user($data)
        {
            // var_dump($data);
            $dataset = array(
                "first_name" => $data["firstName"],
                "last_name"     => $data["lastName"],
                "address"  => $data["addressofDelivery"],
                "city"     => $data["inputCity"],
                "mobile"  => $data["imobileNumber"],
                "email"     => $data["email"],
                "user_role"  => $data["hidden"],
                "password"     => $data["passWord"],
                "photo_upload"  => $data["upload"]
                // "password"  => md5($data["Password"])
            );

            $result = $this->db->insert('new_users', $dataset);
                return $result;
                
        }

        public function insert_farmer($data)
        {
           
            $dataset = array(
                "farm_name" => $data["farmName"],
                "first_name" => $data["farmerName"],
                "address"  => $data["addressofFarm"],
                "area_size"     => $data["areaofFarm"],
                "city"     => $data["inputCity"],
                "crop_list"  => $data["inputCrops"],
                "mobile"  => $data["imobileNumber"],
                "email"     => $data["eMail"],
                "user_role"  => $data["userRole"],
                "password"     => $data["passWord"],
                "photo_upload"  => $data["upload"]
                // "password"  => md5($data["Password"])
            );

            $result = $this->db->insert('new_users', $dataset);
                return $result;
        }

        public function authenticateUser($data)
        {
           $query = $this->db->get_where('new_users',array(
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