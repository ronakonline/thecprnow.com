<?php

class setting extends CI_Model {

    public function getcoredata(){
        $this->load->database();

        $q = $this->db->query('select * from setting limit 1');

        $result = $q->result();
        //print_r($result['logo']);
        return $result;
    }

    public function updatelogo($img){
        //echo $img;
        $this->load->database();
        $this->db->query('update setting set logo="'.$img.'"');
//        $result = $q->result();
//        //return 1;
//        print_r($result);
    }
    public function getlogo(){
        $this->load->database();

        $q = $this->db->query('select logo from setting limit 1');

        $result = $q->result();
        //print_r($result['logo']);
        return $result;
    }
    public function updatefooter($data){
        //echo $img;
       // print_r($data);
        $this->load->database();
        $this->db->query('update setting set about_us="'.$data['about'].'",add1="'.$data['add1'].'",add2="'.$data['add2'].'",phone="'.$data['phone'].'",email="'.$data['email'].'"');
//        $result = $q->result();
//        return ;
    }

}