<?php
class insert_model extends CI_Model{
	 
function __construct()
{

	parent::__construct();
	$this->load->helper('url');
}

function form_insert()
{
	$data = array (
              'first_name' => $this -> input -> post('first_name'),
              'last_name' => $this -> input -> post('last_name'),
              'password' => $this -> input -> post('password'),
              'email' => $this -> input -> post('email'),

            	);
		$this->db->insert('reg1', $data);
	//	echo "submitted successfully";
		
	redirect(base_url().'index.php/Edit_content/edit_content1');
				return $data;
}

 

}
?>