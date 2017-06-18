<?php
class Categoriess_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function getAllCategory(){
		$this->db->select("*");
		$this->db->from("categories");
		$this->db->limit(5);

		return $this->db->get();
	}

	function addCategory($data){
		$this->db->insert('categories', $data);
	}
}