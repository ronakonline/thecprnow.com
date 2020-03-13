<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_login extends CI_Controller {

    public function index()
    {
        $this->load->helper('form');
        $this->load->view('admin/sign-in');
    }

    public function getdata(){
        $this->load->helper('form');
        $data = $this->input->post();
        $this->load->model('Login');
        $data1 = $this->Login->verify($data['username'],$data['password']);
        $this->load->library('session');
        if($data1 == 0){
            $_SESSION['error']=1;
           // redirect(base_url() . 'admin_login');
            redirect($_SERVER['HTTP_REFERER']);
        }else{

            $userdata = array(
                'username' => $data['username'],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($userdata);
            return redirect('dashboard');
        }

    }

    public function logout(){
        $this->session->sess_destroy();
        return redirect('admin_login');
    }
}
