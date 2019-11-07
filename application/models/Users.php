<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model 
{
	public function createUser($fullName,$email,$password)
	{
		$array = array(
			'email' => $email,
		);

		$query = $this->db->get_where('users', $array);
		if(count($query->result())>0)
		{
			return "exist";
		}

		$data = array(
	        'name' => $fullName,
	        'email' => $email,
	        'password' => sha1($password)
		);

		if($this->db->insert('users', $data))
		{
			return "true";
		}
		else
		{
			return "false";
		}
	}

	public function checkUser($email,$password)
	{
		$array = array(
			'email' => $email,
	        'password' => sha1($password)
		);

		$query = $this->db->get_where('users', $array);
		if($query->num_rows()>=1)
		{

			return $query->row()->id;
		}
		else
		{
			return false;
		}
	}

	public function getQues()
	{
		$query = $this->db->get('questions');
		if($query)
		{

			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function submitReport($score)
	{
		$remark="";
		if($score <=5)
		{
			$remark="You need to work very hard. Your score is very low , Please concentrate on your studies.";
		}
		elseif ($score <=10) 
		{
			$remark="You need to work hard. Your score is low , Please concentrate on your studies.";
		}
		elseif ($score <=15) 
		{
			$remark="You need to work, to score more. Your score is average , Please concentrate on your studies.";
		}
		elseif ($score <=19) {
			$remark="You need to work litile bit, to score fullmarks. Your score is good , Please concentrate on your studies.";
		}
		elseif ($score == 20) {

			$remark="You score fullmarks. Your score is Excelent , Please concentrate on your studies.";
		}

		$data = array(
	        'user_id' => $this->session->userdata('id'),
	        'correct_question' => $score,
	        'incorrect_question' => 20-$score,
	        'score' => $score,
	        'remark' => $remark
		);

		$userInfo = array(
			'user_id' => $this->session->userdata('id')
		);

		$query = $this->db->get_where('reports', $userInfo);
		if($query->num_rows()>=1)
		{

			$this->db->where('user_id', $this->session->userdata('id'));

			if($this->db->update('reports', $data))
			{
				return true;
			}
			else
			{
				return false;
			}

		}


		if($this->db->insert('reports', $data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function getReport()
	{
		$userInfo = array(
			'user_id' => $this->session->userdata('id')
		);

		$query = $this->db->get_where('reports', $userInfo);
		if($query)
		{

			return $query->row();
		}
		else
		{
			return false;
		}
	}


}