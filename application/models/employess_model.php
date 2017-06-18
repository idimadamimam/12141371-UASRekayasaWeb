<?php
class Employess_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function getAllEmployess(){
		$this->db->select("*");
		$this->db->from("employees");
		$this->db->limit(5);

		return $this->db->get();
	}

	function addShipper($data){
		$this->db->insert('employees', $data);
	}
}