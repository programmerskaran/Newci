<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$page_data['main'] = 'frontend/index';
		$this->load->view('frontend/layouts/main', $page_data);
	}
	
}
