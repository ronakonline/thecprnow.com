<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mheader extends CI_Controller {

    public function index()
    {
        $this->load->library('session');
        ini_set('display_errors', 1);
        $this->load->model('mheaderM');
        $ot['data'] = $this->mheaderM->selectAll();
        //print_r($ot);
        if(isset($_GET['update'])){
            $ot['update'] = $_GET['update'];
            $ot['name'] = $_GET['name'];
            $ot['id'] = $_GET['update'];
        }
        $this->load->view('admin/mheader',$ot);
    }
    public function insert(){
        $this->load->helper('form');
        $data = $this->input->post();
        ini_set('display_errors', 1);
        $this->load->model('mheaderM');
        if(isset($data['updatename'])){
            $ot = $this->mheaderM->update($data['updatename'],$data['id']);
        }elseif (isset($_GET['delete'])){
            $ot = $this->mheaderM->delete($_GET['delete']);
        } else {
            $ot = $this->mheaderM->insert($data['name']);
        }
       return redirect('mheader');
    }
}
