<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcourses extends CI_Controller {

    public function index()
    {
        $data['title']='Contact || Welcome to CPR NOW';
        $data['view_page']='Contact';
        $this->load->view('course',$data);
    }
    public function add(){
        $this->load->view('admin/addcourse');
    }
    public function edit(){
        $this->load->view('admin/editcourse');
    }
    public function delete(){
        ini_set('display_errors', 1);
        $this->load->model('McoursesM');
        $this->McoursesM->delete($_GET['delete']);
        $this->load->view('admin/allcourses');
    }
    public function all(){
        $this->load->view('admin/allcourses');
    }
    public function insert(){
        $this->load->helper('form');
        $data = $this->input->post();
        $data['url'] = preg_replace('/\s+/', '-', $data['url']);
        $config['upload_path']          = 'assests/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;


        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('img'))
        {

            $_SESSION['error'] = $this->upload->display_errors();
            return redirect('mcourses/add');

        }
        else
        {
            $imgdata = $this->upload->data('file_name');
            // print_r($data);
            $data['img'] = $imgdata;
            $this->load->model('McoursesM');
            $ot = $this->McoursesM->insert($data);
            return redirect('mcourses/add');
        }
//        ini_set('display_errors', 1);
        // $this->load->model('mheaderM');
    }
    public function update(){
        $this->load->helper('form');
        $data = $this->input->post();
        $data['url'] = preg_replace('/\s+/', '-', $data['url']);
        echo $_FILES['img']['name'];
        if (!empty($_FILES['img']['name'])) {

            // print_r($data);
            $config['upload_path'] = 'assests/images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 1000;


            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('img')) {

                $_SESSION['error'] = $this->upload->display_errors();
                return redirect('mcourses/all');


            } else {
                $imgdata = $this->upload->data('file_name');
                // print_r($data);
                $data['img'] = $imgdata;
                $this->load->model('McoursesM');
                $ot = $this->McoursesM->updateIMG($data);
                return redirect('mcourses/all');
            }
        }else{
            $this->load->model('McoursesM');
            $ot = $this->McoursesM->update($data);
            return redirect('mcourses/all');
        }
        ini_set('display_errors', 1);
        // $this->load->model('mheaderM');
    }

}