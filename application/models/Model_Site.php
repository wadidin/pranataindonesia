<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Site extends CI_Model {

	function __construct() {
		parent::__construct();
	}

		
	function insertdata($tabel, $data) {
		return $this->db->insert($tabel, $data);
	}
		
	
	function getConfig($where='') {
		return $this->db->query("select * from config $where; ");
	}
		
	
	public function GetParentMenu() {
		$query = "SELECT * FROM menu WHERE parent_id = '0' AND status = '1' order by menu_id asc";
		return $this->db->query($query);
	}
	
	public function GetChildMenu($id) {
		$query = "SELECT * FROM menu WHERE parent_id = '$id' AND status = '1' order by menu_id asc";
		return $this->db->query($query);
	}
	
	function getPage($where = '') {
		return $this->db->query("select * from pages $where;");
	}
	
	function getArtikel($where = '') {
		return $this->db->query("select * from artikel $where;");
	}
		
	function getAllDosen() {
		$this->db->order_by('id','asc');
		$query = $this->db->get('data_dosen');
		return $query->result();
	}
		
	function getAllDownload() {
		$this->db->order_by('id','asc');
		$query = $this->db->get('download');
		return $query->result();
	}
		
	function get_all_artikel() {
		$this->db->order_by('id','desc');
		$query = $this->db->get('artikel');
		return $query->result();
	}
		
	function getAllAlbum() {
		$this->db->order_by('id','desc');
		$query = $this->db->get('album_foto');
		return $query->result();
	}
	
}
