<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title']='Product || Welcome to Tasacloud';
		$data['view_page']='product';
        $this->load->model('setting');
        $data1 = $this->setting->getcoredata();
        foreach ($data1 as $data2)
            //echo $logo;
            $data['core'] = $data2;
        //print_r($data);
		$this->load->view('site',$data);
	}
	
		public function OFFICE_365()
	{
		$data['title']='OFFICE 365 || Welcome to Tasacloud';
		$data['view_page']='OFFICE_365';
        $this->load->model('setting');
        $data1 = $this->setting->getcoredata();
        foreach ($data1 as $data2)
            //echo $logo;
            $data['core'] = $data2;
        //print_r($data);
		$this->load->view('site',$data);
	}
	
		public function Security()
	{
		$data['title']='Security || Welcome to Tasacloud';
		$data['view_page']='Security';
        $this->load->model('setting');
        $data1 = $this->setting->getcoredata();
        foreach ($data1 as $data2)
            //echo $logo;
            $data['core'] = $data2;
        //print_r($data);
		$this->load->view('site',$data);
	}
	
		public function Microsoft_azure()
	{
		$data['title']='Microsoft Azure || Welcome to Tasacloud';
		$data['view_page']='Microsoft_azure';
        $this->load->model('setting');
        $data1 = $this->setting->getcoredata();
        foreach ($data1 as $data2)
            //echo $logo;
            $data['core'] = $data2;
        //print_r($data);
		$this->load->view('site',$data);
	}
	
		public function Windows_Virtual_Desktop()
	{
		$data['title']='Windows Virtual Desktop || Welcome to Tasacloud';
		$data['view_page']='Windows_virtual_desktop';
        $this->load->model('setting');
        $data1 = $this->setting->getcoredata();
        foreach ($data1 as $data2)
            //echo $logo;
            $data['core'] = $data2;
        //print_r($data);
		$this->load->view('site',$data);
	}
	
		public function Microsoftteams()
	{
		$data['title']='Microsoft Teams.php || Welcome to Tasacloud';
		$data['view_page']='Microsoftteams.php';
        $this->load->model('setting');
        $data1 = $this->setting->getcoredata();
        foreach ($data1 as $data2)
            //echo $logo;
            $data['core'] = $data2;
        //print_r($data);
		$this->load->view('site',$data);
	}

}