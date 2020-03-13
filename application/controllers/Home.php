<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$data['title']='Home || Welcome to CPR NOW';
		$data['view_page']='homepage';
		$this->load->view('index',$data);
	}

   public function PRODUCTPAGE()
	{
		$data['title']='Product || Welcome to Tesacloud';
		$data['view_page']='product_page';
		$this->load->view('site',$data);
	}

	public function Pricing()
	{
		$data['title']='Pricing || Welcome to Tesacloud';
		$data['view_page']='pricing';
		$this->load->view('site',$data);
	}


	public function CAPABILITIESPAGE()
	{
		$data['title']='CAPABILITIES PAGE || Welcome to Tesacloud';
		$data['view_page']='capabilities_pages';
		$this->load->view('site',$data);
	}

	public function Solutions()
	{
		$data['title']='SOLUTIONS || Welcome to Tesacloud';
		$data['view_page']='Solutions';
		$this->load->view('site',$data);
	}

	public function About()
	{
		$data['title']='About || Welcome to Tasacloud';
		$data['view_page']='About';
		$this->load->view('site',$data);
	}
   
   	public function Request_free_assessment()
	{
		$data['title']='Request Free Assessment || Welcome to Tasacloud';
		$data['view_page']='Request-free-assessment';
		$this->load->view('site',$data);
	}
	
		public function Requestdemo()
	{
		$data['title']='Request Demo  || Welcome to Tasacloud';
		$data['view_page']='Requestdemo';
		$this->load->view('site',$data);
	}

	public function contact()
	{
	    $data['title']='Contact || Welcome to Tesacloud';
		$data['view_page']='contact';
		$this->load->view('site',$data);
	}

    public function footer(){
	    $this->load->view('admin/edit_footer');
    }
}
