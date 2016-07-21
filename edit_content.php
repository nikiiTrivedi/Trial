<?php

class Edit_content extends CI_Controller
 {

    public function __construct()
    {
         parent::__construct();
         $this->load->helper('url');
    
    }          

    public function index()
    {
        $this->load->database();

    }
    function edit_content1()
    {
         
        $this->load->model('editcontent_model');        
        $data['result'] = $this->editcontent_model->get_contents();
        $this->load->view('display', $data);
    }

}

?>