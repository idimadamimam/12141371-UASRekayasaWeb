<?php
class Od_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function getAllOd(){
		$this->db->select("*");
		$this->db->from("order_details");
		$this->db->limit(5);

		return $this->db->get();
	}

	function addOd($data){
		$this->db->insert('order_details', $data);
	}
}