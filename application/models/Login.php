<?php

    class Login extends CI_Model {
        public function verify($username,$password){
                $this->load->database();

                $q = $this->db->query('select * from admin where email="'.$username.'"and pass="'.$password.'"');

                if($q->num_rows() > 0){
                        return 1;
                }else{
                    return 0;
                }
        }
    }