<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employess extends CI_Controller 
{
	function __construct(){
		parent::__construct();
		$this->load->model("employess_model"); //constructor yang dipanggil ketika memanggil products.php untuk melakukan pemanggilan pada model : products_model.php yang ada di folder models
	}

	public function index(){
		$this->load->view('home/header');
		//Function yang digunakan untuk menampilkan view products_view.php
		$data['listEmployess'] = $this->employess_model->getAllEmployess(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('employees/employess_view', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
	$this->load->view('home/sidebar');
	}

	public function addEmploye(){
		//Function yang dipanggil ketika ingin melakukan add produk kemudian menampilkan add_product_view
		$this->load->view('add_employe_view');
	}

	public function addEmployeDb(){
		//Function yang dipanggil ketika ingin memasukan produk ke dalam database
		$data = array(
					'FirstName' => $this->input->post('FirstName'),
					'LastName' => $this->input->post('LastName'),
					'Title' => $this->input->post('Title')
				);
		$this->employess_model->addEmploye($data); //passing variable $data ke products_model

		redirect('employees'); //redirect page ke halaman utama controller products
	}
}

/* Location: ./application/controllers/products.php */