<?php

class mlessonsM extends CI_Model {


    public function insert($data){

        $this->load->database();
        if($this->db->query('insert into lessons values(null,'.$data['cid'].',"'.$data['title'].'","'.$data['aboutlesson'].'")')){
            return 1;
        }else{
            return 0;
        }
    }
    public function update($data){

        $this->load->database();
        if($this->db->query('update lessons set title="'.$data['title'].'",cid='.$data['cid'].',aboutlesson="'.$data['aboutlesson'].'" where id='.$data['edit'])){
            return 1;
        }else{
            return 0;
        }
    }
    public function delete($id){

        $this->load->database();
        if($this->db->query('delete from lessons where id='.$id)){
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