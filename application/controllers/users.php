<?php

class Users extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function dashboard($data = NULL){

    $this->load->view('users_template', $data);
  }
}



?>
