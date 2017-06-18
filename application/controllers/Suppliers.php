<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Suppliers extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("suppliers_model"); //constructor yang dipanggil ketika memanggil products.php untuk melakukan pemanggilan pada model : products_model.php yang ada di folder models
	}

	public function index(){
		$this->load->view('home/header');
		//Function yang digunakan untuk menampilkan view products_view.php
		$data['listSupplier'] = $this->suppliers_model->getAllSuppliers(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('suppliers/suppliers_view', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
		$this->load->view('home/sidebar');
	}

	public function addSupplier(){
		//Function yang dipanggil ketika ingin melakukan add produk kemudian menampilkan add_product_view
		$this->load->view('add_supplier_view');
	}

	public function addSupplierDb(){
		//Function yang dipanggil ketika ingin memasukan produk ke dalam database
		$data = array(
					'SupplierID' => $this->input->post('SupplierID'),
					'CompanyName' => $this->input->post('CompanyName'),
					'ContactName' => $this->input->post('ContactName'),
					'Address' => $this->input->post('Address')
				);
		$this->suppliers_model->addSupplier($data); //passing variable $data ke products_model

		redirect('suppliers'); //redirect page ke halaman utama controller products
	}
}

/* Location: ./application/controllers/products.php */