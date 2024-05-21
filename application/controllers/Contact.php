<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
	public function __construct() {
        parent::__construct();
		$this->load->library('session');
        $this->load->model('Hello_Model');
    }
	public function contact_details()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'phone_no' => $this->input->post('phone_no'),
			'email' => $this->input->post('email'),
			'message' => $this->input->post('message'),
		);
		log_message('debug', 'Data array: ' . print_r($data, TRUE));		
		$this->Hello_Model->saverecords($data);
		$this -> session -> set_flashdata('status', 'Your form was successfully submitted!');
    	redirect(base_url()."Home/contact");
	}
}
