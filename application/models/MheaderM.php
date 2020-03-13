<?php

class mheaderM extends CI_Model {


    public function insert($name){

        $this->load->database();
        if($this->db->query('insert into header values(null,"'.$name.'",now(),now())')){
            return 1;
        }else{
            return 0;
        }
    }
    public function update($name,$id){

        $this->load->database();
        if($this->db->query('update header set name="'.$name.'",updated_at=now() where id='.$id)){
            return 1;
        }else{
            return 0;
        }
    }
    public function delete($id){

        $this->load->database();
        if($this->db->query('delete from header where id='.$id)){
            return 1;
        }else{
            return 0;
        }
    }
    public function selectAll(){
        $this->load->database();

        $q = $this->db->query('select * from header');

        $result = $q->result();
        //print_r($result['logo']);
        return $result;
    }

}