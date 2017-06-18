<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("customers_model"); //constructor yang dipanggil ketika memanggil products.php untuk melakukan pemanggilan pada model : products_model.php yang ada di folder models
	}

	public function index(){
		$this->load->view('home/header');
		//Function yang digunakan untuk menampilkan view products_view.php
		$data['listCustomers'] = $this->customers_model->getAllCustomer(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('customers/customers_view', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
		$this->load->view('home/sidebar');
	}

	public function addCustomer(){
		//Function yang dipanggil ketika ingin melakukan add produk kemudian menampilkan add_product_view
		$this->load->view('add_customer_view');
	}

	public function addCustomerDb(){
		//Function yang dipanggil ketika ingin memasukan produk ke dalam database
		$data = array(
					'CompanyName' => $this->input->post('CompanyName'),
					'ContactName' => $this->input->post('ContactName'),
					'City' => $this->input->post('City'),
				);
		$this->customers_model->addCustomer($data); //passing variable $data ke products_model

		redirect('customers'); //redirect page ke halaman utama controller products
	}
}

/* Location: ./application/controllers/products.php */