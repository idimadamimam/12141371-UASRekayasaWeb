<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("orders_model"); //constructor yang dipanggil ketika memanggil products.php untuk melakukan pemanggilan pada model : products_model.php yang ada di folder models
	}

	public function index(){
		$this->load->view('home/header');
		//Function yang digunakan untuk menampilkan view products_view.php
		$data['listOrders'] = $this->orders_model->getAllOrder(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('orders/orders_view', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
		$this->load->view('home/sidebar');
	}

	public function addOrder(){
		//Function yang dipanggil ketika ingin melakukan add produk kemudian menampilkan add_product_view
		$this->load->view('add_order_view');
	}

	public function addOrderDb(){
		//Function yang dipanggil ketika ingin memasukan produk ke dalam database
		$data = array(
					'CustomerID' => $this->input->post('CustomerID'),
					'EmployeeID' => $this->input->post('EmployeeID'),
					'OrderDate' => $this->input->post('OrderDate'),
				);
		$this->orders_model->addOrder($data); //passing variable $data ke products_model

		redirect('orders'); //redirect page ke halaman utama controller products
	}
}

/* Location: ./application/controllers/products.php */