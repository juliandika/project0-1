<?php

class Administrator extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function index($data = NULL){

    $this->load->view('admin_template', $data);

}
}


?>
