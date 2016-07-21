<?php
class Check_user extends CI_Model
{
	 
function __construct()
{
	parent::__construct();
	$this->load->helper('url');
	$this->load->library('session');
}

function validate_user()
{

		
        $name = $this -> input -> post('first_name');
        $pass = $this -> input -> post('password');

        $name1 = array(
        'username'  => $name,
        'password'  => $pass,
        'logged_in' => TRUE
		                  );
       
      	$this->db->select('first_name','password');
		    $this->db->where('first_name',$name);
		    $this->db->where('password',$pass);
        $this->db->from('reg1');

        $query = $this->db->get();
        //$count = $query -> num_rows();
        //return $result = $query->result();
		    if($query -> num_rows() == 1)
  		  {
        $this->session->set_userdata($name1);
        //print_r($name1);
  		 	redirect(base_url().'index.php/welcome/home');
    		 //return $query->result();
  		  }
  		  else
  		  {
  		 	redirect(base_url().'index.php/welcome/reg');
   			  //return false;
 		    } 
 		//  print_r($count);
	
				//return $data;
}

 

}
?>