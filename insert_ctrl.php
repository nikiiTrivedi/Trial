<?php

class insert_ctrl extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('insert_model');
}
function index() 

{

	$this->load->view('insert_view');
} 

else

 {

$data = array(
'first_name' => $this->input->post('first_name'),
'last_name' => $this->input->post('last_name'),
'email' => $this->input->post('email'),
'password' => $this->input->post('password')
);
//Transfering data to Model
$this->insert_model->form_insert($data);
$data['message'] = 'Data Inserted Successfully';
//Loading View

}
}

}

?>