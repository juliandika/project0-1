<?php
class C_member extends CI_Controller {

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
		$data['nama'] = $this->session->userdata('nama');
		$data['notelepon'] = $this->session->userdata('notelepon');

		$data['users'] = $this->model_master_data->getSaldo($data['id_user']);

		$data['transaksi'] = $this->model_user->view_data_user($data['username']);
		$this->load->view('member/header', $data);
		$this->load->view('member/index', $data);
		$this->load->view('member/footer', $data);

	}

	public function confirm($id_transaksi){

		$data['id_user'] = $this->session->userdata('id_user');
		$data['username'] = $this->session->userdata('username');
		$data['nama'] = $this->session->userdata('nama');
		$data['notelepon'] = $this->session->userdata('notelepon');

		$data['users'] = $this->model_master_data->getSaldo($data['id_user']);

		$data['transaksi'] = $this->model_user->view_data_user($data['username']);

		$data['transaksi'] = $this->model_master_data->find($id_transaksi);

		var_dump($data['transaksi']);

		$this->load->view('member/header', $data);
		$this->load->view('member/confirm', $data);
		$this->load->view('member/footer');
	}

	public function success(){


		$data['id_user'] = $this->session->userdata('id_user');
		$data['username'] = $this->session->userdata('username');
		$data['nama'] = $this->session->userdata('nama');
		$data['notelepon'] = $this->session->userdata('notelepon');


		$data['users'] = $this->model_master_data->getSaldo($data['id_user']);

		$data['transaksi'] = $this->model_user->view_data_user($data['username']);


		$this->load->view('member/header', $data);
		$this->load->view('member/success', $data);
		$this->load->view('member/footer');

	}


	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth/index');
	}
}
?>
