<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function dashboard()
	{

		$this->load->model('Users');
		$response=$this->Users->getQues();
		$this->load->view('dashboard',['response'=>$response]);
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		return redirect(base_url('Welcome/login'));
	}

	public function report()
	{
		$this->load->model('Users');
		$response=$this->Users->getReport();
		$this->load->view('report',['response'=>$response]);
	}

	public function submitQuiz()
	{
		$score=0;
		$this->load->model('Users');
		$response=$this->Users->getQues();
		foreach ($response as $res) 
		{
			$ans=$this->input->post("ans_".$res->id);

			if ($ans == $res->correct_ans) 
			{
				$score+=1;
			}
		}

		$this->load->model('Users');
		$response=$this->Users->submitReport($score);

		if ($response) 
		{
			return redirect(base_url('Home/report'));
		}
		else
		{
			$this->session->set_flashdata("msg","Error in submiting report plese try again");
			return redirect(base_url('Welcome/login'));
		}
	}

	

	public function __construct()
	{
		parent::__construct();
		if(! $this->session->userdata('id'))
		{
			return redirect(base_url('Welcome/login'));
		}
		
	}


}
