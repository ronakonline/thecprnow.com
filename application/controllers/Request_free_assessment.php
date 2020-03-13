<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_free_assessment extends CI_Controller {

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
	    $data['title']='Request Free Assessment || Welcome to Tesacloud';
		$data['view_page']='Request_free_assessment';
        $this->load->model('setting');
        $data1 = $this->setting->getcoredata();
        foreach ($data1 as $data2)
            //echo $logo;
            $data['core'] = $data2;
        //print_r($data);
		$this->load->view('site',$data);
	}

}