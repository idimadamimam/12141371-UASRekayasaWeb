<?php
class Customers_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function getAllCustomer(){
		$this->db->select("*");
		$this->db->from("customers");
		$this->db->limit(5);

		return $this->db->get();
	}

	function addCustomer($data){
		$this->db->insert('customers', $data);
	}
}