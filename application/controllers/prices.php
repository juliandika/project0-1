<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class prices extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('model_products');
	}

	public function index()
	{
		$data['products'] = $this->model_products->all();

		$data['user'] = $this->session->userdata('username');
	    $this->load->view('templates/header',$data);
		$this->load->view('check_prices');
	    $this->load->view('templates/footer');
	}

	/*public function add_to_cart($product_id){

		$product = $this->model_products->find($product_id);


		$data = array(
               'id'      => $product->id,
               'price'   => $product->price,
               'name'    => $product->name
            );

		$this->cart->insert($data);
		redirect(base_url());

	}

	public function cart(){
		//displays what currently inside the Cart
		//print_r($this->cart->contents());
		$this->load->view('show_cart');

	}

	public function clear_cart(){
		$this->cart->destroy();
		redirect(base_url());
	}*/
}
