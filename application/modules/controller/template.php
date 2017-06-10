<?php

class Template extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function call_admin_template($data = NULL){

    $this->load->view('admin_template_v', $data);
  }
}



?>
