<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function index()
	{
		$this->load->view('backend/login');
	}
	public function dashboard()
	{
		$page_data['main'] = 'backend/dashboard';
		$this->load->view('backend/layouts/main', $page_data);
	}
	public function login_action()
	{
		$this->load->library('session');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$this->db->select('*');
		$result = $this->db->get_where('admin', array('email' => $email, 'password' => $password))->row_array();
		if (!empty($result)) {
			$session_data = array(
				'id' => $result['id'],
				'username' => $result['username'],
				'email' => $result['email'],
				'logged_in' => TRUE
			);
			$this->session->set_userdata($session_data);
			redirect('admin/dashboard');
		} else {
			// Handle login failure
			$this->session->set_flashdata('error', 'Invalid email or password');
			redirect('admin');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin'); 
	}
}
