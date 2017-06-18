<?php
class Shippers_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function getAllShippers(){
		$this->db->select("*");
		$this->db->from("shippers");
		$this->db->limit(5);

		return $this->db->get();
	}

	function addShipper($data){
		$this->db->insert('shippers', $data);
	}
}