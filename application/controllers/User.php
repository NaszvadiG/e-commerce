<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller {

	
	public function __construct() {
		
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('user_model');
		
	}
	
	
	public function index() {
		

		
	}
	

	public function register() {
		

		$data = new stdClass();
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		

		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[users.username]', array('is_unique' => 'This username already exists. Please choose another one.'));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
		
		if ($this->form_validation->run() === false) {
			
			$this->load->view('layout/header');
			$this->load->view('user/register/register', $data);
			$this->load->view('layout/footer');
			
		} else {
			
			$username = $this->input->post('username');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			
			if ($this->user_model->create_user($username, $email, $password)) {
				
				$this->load->view('layout/header');
				$this->load->view('user/register/register_success', $data);
				$this->load->view('layout/footer');
				
			} else {
				
				$data->error = 'There was a problem creating your new account. Please try again.';
				
				redirect('admin');
				
			}
			
		}
		
	}
		

	public function login() {
		
		$data = new stdClass();
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == false) {
			
			
			$this->load->view('layout/header');
			$this->load->view('user/login/login');
			$this->load->view('layout/footer');
			
		} else {
			
		
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			if ($this->user_model->resolve_user_login($username, $password)) {
				
				$user_id = $this->user_model->get_user_id_from_username($username);
				$user    = $this->user_model->get_user($user_id);
				
			
				$_SESSION['user_id']      = (int)$user->id;
				$_SESSION['username']     = (string)$user->username;
				$_SESSION['logged_in']    = (bool)true;
				$_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
				$_SESSION['is_admin']     = (bool)$user->is_admin;
				
				
				redirect('admin');
				// $this->load->view('header');
				// $this->load->view('user/login/login_success', $data);
				// $this->load->view('footer');
				
			} else {
				
				
				$data->error = 'Wrong username or password.';
				
			
				$this->load->view('layout/header');
				$this->load->view('user/login/login', $data);
				$this->load->view('layout/footer');
				
			}
			
		}
		
	}
	

	public function logout() {
		
	
		$data = new stdClass();
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			
		
			redirect('home');
			
		} else {

			redirect('/');
			
		}
		
	}
	
}
