<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
public function __construct(){
	parent::__construct();
	$this->load->model('test');
}
	public function index()
	{
		$page_data['main'] = 'frontend/index';
		$this->load->view('frontend/layouts/main', $page_data);
	}
	public function about()
	{
		$page_data['main'] = 'frontend/about';
		$page_data['page_title'] = "About";
		$page_data['page'] = 'about';
		$this->load->view('frontend/layouts/main', $page_data);
	}
	public function contact()
	{
		$page_data['main'] = 'frontend/contact';
		$page_data['page_title'] = "Contact";
		$page_data['page'] = 'contact';
		$this->load->view('frontend/layouts/main', $page_data);
	}

	public function properties()
	{
		$page_data['main'] = 'frontend/properties';
		$page_data['page_title'] = "Properties";
		$page_data['page'] = 'properties';
		$this->load->view('frontend/layouts/main', $page_data);
	}
	public function testimonial()
	{
		$page_data['main'] = 'frontend/testimonial';
		$page_data['page_title'] = "Testimonial";
		$page_data['page'] = 'testimonial';
		$this->load->view('frontend/layouts/main', $page_data);
	}
	public function blog()
	{
		$page_data['main'] = 'frontend/blog';
		$page_data['page_title'] = "Blog";
		$page_data['page'] = 'blog';
		$this->load->view('frontend/layouts/main', $page_data);
	}
}
