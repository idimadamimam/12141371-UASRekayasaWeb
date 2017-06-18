<?php
class Suppliers_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function getAllSuppliers(){
		$this->db->select("*");
		$this->db->from("suppliers");
		$this->db->limit(5);

		return $this->db->get();
	}

	function addSuppliers($data){
		$this->db->insert('suppliers', $data);
	}
}