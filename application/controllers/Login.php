<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


  public function index(){

    $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
    $this->form_validation->set_rules('password', 'Password');


    if($this->form_validation->run() == FALSE){
        $this->load->view('login');
    } else {
        $this->load->model('model_users');
        $valid_user = $this->model_users->check_credential();

        if($valid_user == FALSE){
          $this->session->set_flashdata('error', 'Wrong username / password');
          redirect('login/index');
        } else {
          // if the username and password is a Match
          $this->session->set_userdata('username', $valid_user->username);
          $this->session->set_userdata('group', $valid_user->group);


          switch($valid_user->group){
            case 1 : //admin
                    redirect('administrator/index');
                    break;
            case 2 : //member
                    redirect('users/dashboard');
                    break;
            default: break;


          }

        }

    }

  }

  public function logout(){
    $this->session->sess_destroy();
    redirect('login/index');
  }

}
