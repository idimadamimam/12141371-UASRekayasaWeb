<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Od extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("od_model"); //constructor yang dipanggil ketika memanggil products.php untuk melakukan pemanggilan pada model : products_model.php yang ada di folder models
	}

	public function index(){
		$this->load->view('home/header');
		//Function yang digunakan untuk menampilkan view products_view.php
		$data['listOd'] = $this->od_model->getAllOd(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('od/od_view', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
		$this->load->view('home/sidebar');
	}

	public function addOd(){
		//Function yang dipanggil ketika ingin melakukan add produk kemudian menampilkan add_product_view
		$this->load->view('add_od_view');
	}

	public function addOdDb(){
		//Function yang dipanggil ketika ingin memasukan produk ke dalam database
		$data = array(
					'OdID' => $this->input->post('OdID'),
					'OrderID' => $this->input->post('OrderID'),
					'ProductID' => $this->input->post('ProductID'),
					'UnitPrice' => $this->input->post('UnitPrice'),
					'Quantity' => $this->input->post('Quantity'),
					'Discount' => $this->input->post('Discount'),
				);
		$this->od_model->addOd($data); //passing variable $data ke products_model

		redirect('orders_details'); //redirect page ke halaman utama controller products
	}
}

/* Location: ./application/controllers/products.php */