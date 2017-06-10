<?php
class Payment extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
		$this->load->model('model_master_data');

	}

	public function confirm($id_transaksi){

		$this->load->view('member/header');
		$this->load->view('member/confirm');
		$this->load->view('member/footer');
	}

	public function pay($id_transaksi) {



		/*$this->form_validation->set_rules('kode_pembayaran', 'Product Name', 'required');
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if($this->form_validation->run() === FALSE)
		{
			$data['transaksi'] = $this->model_master_data->find($id_transaksi);

      $this->load->view('templates/header');
			$this->load->view('member/payment', $data);
      $this->load->view('templates/footer');

		} else {
				if($_FILES['userfile']['name'] != ''){

					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = 'jpg|png';
					$config['max_size'] = '30000';
					$config['max_width'] = '2000';
					$config['max_height'] = '2000';

					$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){

					$data['product'] = $this->model_master_data->find($id);
					$this->load->view('backend/form_edit_products', $data);

				} else {

						$gambar = $this->upload->data();
						$data_product = array(
							'kode_transaksi'				=> set_value('kode_transaksi'),
							'image'				=> $gambar['file_name']

						);
						$this->model_master_data->payment($id_transaksi, $transaksi);
						redirect('admin/products');

					}
				} else {
					//form submit dengan gambar dikosongkan
					$data_product = array(
						'name'				=> set_value('name'),
						'description'	=> set_value('description'),
						'price'				=> set_value('price')

					);
					$this->model_master_data->payment($id_transaksi, $transaksi);
					redirect('member/c_member/index');

				}
		}*/

		$data['id_user'] = $this->session->userdata('id_user');
		$data['username'] = $this->session->userdata('username');
		$data['nama'] = $this->session->userdata('nama');
		$data['notelepon'] = $this->session->userdata('notelepon');

		$saldo = $this->model_master_data->getSaldo($data['id_user']);
		$harga = $this->model_master_data->getPrice($id_transaksi);

		$status_pembayaran = $this->model_master_data->getStatusPembayaran($id_transaksi);


		var_dump($data['id_user']);


		$value = strval($saldo['saldo']);

		$value_harga = strval($harga['harga']);


		var_dump($status_pembayaran);


		if(($status_pembayaran['status_pembayaran']==0)&&($value>=$value_harga)){

				var_dump($value);

				var_dump($harga['harga']);

				$sisa_saldo = $value - $value_harga;

				var_dump($sisa_saldo);

				$data_users = array(
					'saldo'		=> $sisa_saldo
				);

				$this->model_master_data->update_saldo($data['id_user'], $data_users);


				$status_pembayaran = 1;

				$data_transaksi = array(
					'status_pembayaran' => $status_pembayaran
				);

				$this->model_master_data->update_pembayaran($id_transaksi, $data_transaksi);

				redirect('member/c_member/success');


	}elseif($status_pembayaran['status_pembayaran']==1){


	}else{

		echo 'saldo anda tidak cukup';
	}

	}
}
?>
