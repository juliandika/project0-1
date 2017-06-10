<?php

class Pages extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      $this->load->helper(array('form', 'url'));
  }

  public function view($page = 'home')
  {
    if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
        show_404();
      }

      $data['title'] = ucfirst($page);
      $data['user'] = $this->session->userdata('username');

      $this->load->view('templates/header',$data);
      $this->load->view('pages/'.$page);
      $this->load->view('templates/footer');
  }

  public function cetak()
  {
    $data['user'] = $this->session->userdata('username');
    $this->load->view('templates/header',$data);
    $this->load->view('print');
  }

  public function document()
  {
    $data['user'] = $this->session->userdata('username');
    $this->load->view('templates/header',$data);
    $this->load->view('print_document');
  }

  public function upload()
  {
      $post = $this->input->post();
      $config['upload_path']          = './uploads/';
      $config['allowed_types']        = 'jpg|png|doc|pdf';
      $config['max_size']             = 2048;
      $config['file_name']             = $post['nama'];

      $this->load->library('upload', $config);
      $data['user'] = $this->session->userdata('username');

      if ( ! $this->upload->do_upload('fileToUpload'))
      {
        echo "error";
          $error = array('error' => $this->upload->display_errors());
      }
      else
      {
          $data = array('upload_data' => $this->upload->data());
          $post['file'] = $this->upload->data('file_name');
          $data['post'] = $post;
          $this->db->insert('data',$post);
          if ($this->db->affected_rows() != 1) {
            echo "gagal insert database";
          }else{
            $this->load->view('templates/header',$data);
            $this->load->view('print_success');
            $this->load->view('templates/footer');
        }
      }
  }

  public function proses_register(){

  if(isset($_POST['register'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $notelepon = $_POST['notelepon'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $data = array(
            'nama'=> $nama,
            'email'=> $email,
            'notelepon'=> $notelepon,
            'username'=> $username,
            'password'=> md5($password));

    $this->db->insert('users',$data);

    if($this->db->affected_rows()==1){
      redirect(base_url('pages/view'));
    }
  }
  }
}
?>
