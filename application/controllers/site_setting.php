<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_setting extends CI_Controller {

    public function logo(){
        if($this->session->userdata('logged_in') !== TRUE){
            return redirect('admin_login');
        }
        else {
            $this->load->library('session');
            $this->load->model('setting');
            $data1 = $this->setting->getcoredata();
            foreach ($data1 as $data){
            }
            $this->load->view('admin/logo',$data);
        }
    }

    public function logo_upload(){
        $config['upload_path']          = 'assests/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;


        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {

            $_SESSION['error'] = $this->upload->display_errors();
           return redirect('site_setting/logo');
        }
        else
        {
            $data = $this->upload->data('file_name');
            //echo $data;
            $this->load->model('setting');
            $data= $this->setting->updatelogo($data);
            return redirect('site_setting/logo');
        }
    }

    public function footer(){
        if($this->session->userdata('logged_in') !== TRUE){
            return redirect('admin_login');
        }
        else {
            $this->load->library('session');
            $this->load->model('setting');
            $data1 = $this->setting->getcoredata();
            foreach ($data1 as $data){
            }
            $this->load->view('admin/footer',$data);
        }
    }

    public function fupload(){
        $this->load->helper('form');
        $data = $this->input->post();
        $this->load->model('setting');
       // print_r($data);
        $this->setting->updatefooter($data);
        return redirect('site_setting/footer');

    }

}