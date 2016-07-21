<?php

class Editcontent_model extends CI_Model 
{
    
    function editcontent_model()
    {
        parent::__construct();
    }


    function get_contents() 
    {
        $this->db->select('first_name');
        $this->db->from('reg1');
        $query = $this->db->get();
        return $result = $query->result();
    }
}

?>