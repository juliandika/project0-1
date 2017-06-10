<?php

class C_admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');

		$this->load->model('model_master_data');
	}
	public function index() {
		$data['id_user'] = $this->session->userdata('id_user');
		$data['username'] = $this->session->userdata('username');

		$data['transaksi'] = $this->model_master_data->all();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('admin/footer', $data);



	}



	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth/index');
	}
}
?>
