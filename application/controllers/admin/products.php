<?php

class Products extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('model_products');
  }

  public function index(){

    $data['products'] = $this->model_products->all();

    $data['title'] = 'Lihat Harga';

    $this->load->view('templates/header');
    $this->load->view('backend/view_all_products', $data);
    $this->load->view('templates/footer');
  }

  public function create(){

		$this->form_validation->set_rules('name', 'Product Name', 'required');
		$this->form_validation->set_rules('description', 'Product Description', 'required');
		$this->form_validation->set_rules('price', 'Product Price', 'required|integer');
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if($this->form_validation->run() === FALSE){
      $this->load->view('templates/header');
			$this->load->view('backend/add_products');
      $this->load->view('templates/footer');

		}else{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '30000';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload()){

        $this->load->view('templates/header');
				$this->load->view('backend/add_products');
        $this->load->view('templates/footer');

			} else {

				$gambar = $this->upload->data();

				$data_product = array(
					'name'				=> set_value('name'),
					'description'	=> set_value('description'),
					'price'				=> set_value('price'),
					'image'				=> $gambar['file_name']

				);
				$this->model_products->create($data_product);
				redirect('admin/products');
			}


		}
	}
	public function update($id){

		$this->form_validation->set_rules('name', 'Product Name', 'required');
		$this->form_validation->set_rules('description', 'Product Description', 'required');
		$this->form_validation->set_rules('price', 'Product Price', 'required|integer');
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if($this->form_validation->run() === FALSE)
		{
			$data['product'] = $this->model_products->find($id);

      $this->load->view('templates/header');
			$this->load->view('backend/form_edit_products', $data);
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

					$data['product'] = $this->model_products->find($id);
					$this->load->view('backend/form_edit_products', $data);

				} else {

						$gambar = $this->upload->data();
						$data_product = array(
							'name'				=> set_value('name'),
							'description'	=> set_value('description'),
							'price'				=> set_value('price'),
							'image'				=> $gambar['file_name']

						);
						$this->model_products->update($id, $data_product);
						redirect('admin/products');

					}
				} else {
					//form submit dengan gambar dikosongkan
					$data_product = array(
						'name'				=> set_value('name'),
						'description'	=> set_value('description'),
						'price'				=> set_value('price')

					);
					$this->model_products->update($id, $data_product);
					redirect('admin/products');

				}
		}
	}
	public function delete($id){
		$this->model_products->delete($id);
		redirect('admin/products');

	}
}

?>
