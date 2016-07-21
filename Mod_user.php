<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_user extends CI_Model
{
	protected $table ='reg1';
	function_construct()
	{
		parent::__construct();

		$this->load->model(array('Mod_user'));

	}

	public function insert ($params)
	{
		$fields = array 
		{

   			'first_name' => $params['first_name'],
   			'last_name' => $params['last_name'],
   			'email' => $params['email'],
   			'password' => $params['password'],
		};

		$this->db->insert($this->table, $fields);
	}
}