<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

    function _remap($method,$args)
    {

        if (method_exists($this, $method))
        {
            $this->$method($args);
        }
        else
        {
            $this->index($method,$args);
        }

    }

    public function index($name)
    {
        ini_set('display_errors',1);
        $data['title']='Courses || Welcome to CPR NOW';
        $data['disc']='';
        $this->load->model('McoursesM');
        $data['row'] = $this->McoursesM->select($name);
        $this->load->view('course',$data);
    }

}