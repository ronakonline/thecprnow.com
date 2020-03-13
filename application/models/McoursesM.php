<?php

class mcoursesM extends CI_Model {


    public function insert($data){

        $this->load->database();
        if($this->db->query('insert into courses values(null,"'.$data['name'].'","'.$data['url'].'","'.$data['title'].'","'.$data['mdescr'].'","'.$data['keywords'].'","'.$data['img'].'","'.$data['aboutcour'].'","'.$data['cdur'].'",now(),now())')){
            return 1;
        }else{
            return 0;
        }
    }
    public function update($data){

        $this->load->database();
        if($this->db->query('update courses set name="'.$data['name'].'",url="'.$data['url'].'",title="'.$data['title'].'",mdescr="'.$data['mdescr'].'",keywords="'.$data['keywords'].'",aboutcour="'.$data['aboutcour'].'",cdur="'.$data['cdur'].'",aboutcour1="'.$data['aboutcour1'].'",updated_at=now() where id='.$data['id'])){
            return 1;
        }else{
            return 0;
        }
    }
    public function updateIMG($data){

        $this->load->database();
        if($this->db->query('update courses set name="'.$data['name'].'",url="'.$data['url'].'",img="'.$data['img'].'",title="'.$data['title'].'",mdescr="'.$data['mdescr'].'",keywords="'.$data['keywords'].'",aboutcour="'.$data['aboutcour'].'",cdur="'.$data['cdur'].'",updated_at=now() where id='.$data['id'])){
            return 1;
        }else{
            return 0;
        }
    }
    public function delete($id){

        $this->load->database();
        $this->db->query('delete from lessons where cid='.$id);
        if($this->db->query('delete from courses where id='.$id)){
            return 1;
        }else{
            return 0;
        }
    }
    public function select($name){
        $this->load->database();

        $q = $this->db->query('select * from courses where url="'.$name.'"');

        $result = $q->result();
        //print_r($result['logo']);
        return $result;
    }

}