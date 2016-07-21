<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
 {
	public function Welcome()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{

        	$this->load->view('hello1');
 	}
		 

	function reg()
	{
		 $this->load->view('welcome_message');
	}

	function login1()
	{
		$check = $this->session->userdata['logged_in'];
		if($check)
    	{	
        	$this->load->view('hello1');
        	//print_r($this->session->userdata['logged_in']);
    	}
    	else
    	{
    		$this->load->view('login');
    	} 
	}

	function leh()
	{
		$this-> load -> view('leh');
	}

	function insertdata()
	{
		$this->load->model('insert_model');
        $result = $this->insert_model->form_insert();
 		//print_r("hello");
 		//exit();
        //redirect(base_url().'index.php/Edit_content');
        //$this->load->view('display');
	}	

	function checklogin()
	{
		$this->load->model('check_user');
		$temp = $this->check_user->validate_user();
		print_r($temp);	
		//echo"heyy there";	
	}

	function home()
	{
		$user = $this->session->userdata('username');

  	 	if (!isset($user)) 
  	 	{ 
      
			echo 'Please first login to page';
			$this->load->view('hello1.php');
		}
		else
		{
			$this->load->view('hello1.php');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('passwoed');
		$this->session->unset_userdata('logged_in');
		$this->load->view('hello1.php');
	}
}
