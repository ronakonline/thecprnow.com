<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlessons extends CI_Controller {

    public function index()
    {
        $data['title']='Contact || Welcome to CPR NOW';
        $data['view_page']='Contact';
        $this->load->view('course',$data);
    }
    public function add(){
        $this->load->view('admin/addlesson');
    }
    public function delete(){
        ini_set('display_errors', 1);
        $this->load->model('MlessonsM');
        $this->MlessonsM->delete($_GET['delete']);
        $this->load->view('admin/alllessons');
    }
    public function edit(){
        $this->load->view('admin/editlesson');
    }
    public function all(){
        $this->load->view('admin/alllessons');
    }
    public function insert(){
        $this->load->helper('form');
        $data = $this->input->post();
        print_r($data);
        ini_set('display_errors', 1);
        $this->load->model('MlessonsM');
        $ot = $this->MlessonsM->insert($data);
        return redirect('mlessons/add');

    }
    public function update(){
        $this->load->helper('form');
        $data = $this->input->post();
        print_r($data);
        ini_set('display_errors', 1);
        $this->load->model('MlessonsM');
        $ot = $this->MlessonsM->update($data);
        return redirect('mlessons/all');

    }

}