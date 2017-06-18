<?php
class Orders_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function getAllOrder(){
		$this->db->select("*");
		$this->db->from("orders");
		$this->db->limit(5);

		return $this->db->get();
	}

	function addOrder($data){
		$this->db->insert('orders', $data);
	}
}