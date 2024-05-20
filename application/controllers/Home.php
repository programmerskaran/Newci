<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$page_data['main'] = 'frontend/index';
		$this->load->view('frontend/layouts/main', $page_data);
	}
	public function about(){
		$page_data['main'] = 'frontend/about';
		$page_data['page_title'] = "About";
		$page_data['page'] = 'about';
		$this->load->view('frontend/layouts/main', $page_data);
	}
	public function contact(){
		$page_data['main'] = 'frontend/contact';
		$page_data['page_title'] = "Contact";
		$page_data['page'] = 'contact';
		$this->load->view('frontend/layouts/main', $page_data);
	}
	
}
