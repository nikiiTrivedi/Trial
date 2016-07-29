<?php

class Edit_content extends CI_Controller
 {

    public function __construct()
    {
         parent::__construct();
         $this->load->helper('url');
         $this->load->model('editcontent_model');
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

    function show_result_id()
    {
        $in = $this->uri->segment(3); 
        $data['result'] = $this->editcontent_model->show_results();
        $data['single_result'] = $this->editcontent_model->show_result_id($in);
        $this->load->view('update', $data);
    }

    function update_result_id() 
    {
        $id= $this->input->post('id');
        $data = array(
            'first_Name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            );
        if ($_POST['submit'] == 'Update')
        {
            $this->editcontent_model->update_result_id($id,$data);
            // print_r("update");
        }
        else if($_POST['submit'] == 'Delete')
        {
            $this->editcontent_model->delete_result_id($id,$data);
            // print_r("delete");
        }
        $this->show_result_id();
    }
}

?>