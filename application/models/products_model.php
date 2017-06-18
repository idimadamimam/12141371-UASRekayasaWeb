<?php
class Products_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function getAllProducts(){
		$this->db->select("*");
		$this->db->from("products");
		$this->db->limit(5);

		return $this->db->get();
	}

	function addProduct($data){
		$this->db->insert('products', $data);
	}
}