<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function login()
	{
		$this->load->view('login');
	}

	public function createAcount()
	{
		$this->load->view('signup');
	}

	public function checkSignupCredentials()
	{
		$fullName = $this->input->post("fullName");
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		
		$this->load->model('Users');
		$response=$this->Users->createUser($fullName,$email,$password);

		if ($response=="exist") 
		{
			//echo "Email Already exist";
			$this->session->set_flashdata("msg","Email Already exist");
			return redirect(base_url('Welcome/createAcount'));
		}

		if($response == "true")
		{
			$this->session->set_flashdata("msg","User Registered. Login Here");
			return redirect(base_url('Welcome/login'));
		}

		if($response == "false")
		{
			$this->session->set_flashdata("msg","Sorry, Please try again.");
			return redirect(base_url('Welcome/createAcount'));
		}
	}

	public function checkLoginCredentials()
	{
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		
		$this->load->model('Users');
		$response=$this->Users->checkUser($email,$password);

		if ($response) 
		{
			$this->session->set_userdata('id',$response);

			return redirect(base_url('Home/dashboard'));
		}
		else
		{
			$this->session->set_flashdata("msg","Email or password not matched.");
			return redirect(base_url('Welcome/login'));
		}
	}


	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('id'))
		{
			return redirect(base_url('Home/dashboard'));
		}
		
	}
}
