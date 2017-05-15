<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Admin extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	

	//User
	function user() {
		return $this->db->query("select * from users");
	}
	

	//Artikel
	function getArtikel($where = '') {
		return $this->db->query("select * from artikel $where; ");
	}
	

	//Halaman
	function getPage($where = '') {
		return $this->db->query("select * from pages $where; ");
	}
	

	//Data Dosen	
	function getDosen($where = '') {
		return $this->db->query("select * from data_dosen $where; ");
	}


	//Suara Rektor
	function getSuaraRektorat($where = '') {
		return $this->db->query("select * from suara_rektorat $where; ");
	}

	
	//Testimoni Alumni	
	function getTestimoni($where = '') {
		return $this->db->query("select * from testimoni_alumni $where; ");
	}
	

	//Link Eksternal	
	function getLinkExternal($where = '') {
		return $this->db->query("select * from link_external $where; ");
	}


	//Download	
	function getDownload($where = '') {
		return $this->db->query("select * from download $where; ");
	}
	

	//Config	
	function getConfig($where = '') {
		return $this->db->query("select * from config $where; ");
	}
	

	//Contact
	function getContact($where = '') {
		return $this->db->query("select * from contact $where; ");
	}
	

	//Select Data
	function selectdata($where = '') {
		return $this->db->query("select * from $where; ");
	}


	//Parent Menu	
	function GetParentMenu(){
		$query = "SELECT * FROM menu WHERE parent_id = '0' AND status = '1' order by menu_id asc";
		return $this->db->query($query);
	}


	//Insert Data
	function insertdata($tabel, $data) {
		return $this->db->insert($tabel, $data);
	}


	//Update Data
	function updatedata($tabel, $data, $where) {
		return $this->db->update($tabel, $data, $where);
	}
		
	
	//Get Menu
	function getMenu($where = '') {
		return $this->db->query("select * from menu $where;");
	}


	//Delete Data	
	function deldata($tabel, $where) {
		return $this->db->delete($tabel, $where);
	}


	//Get Album	
	function getAlbum($where = '') {
		return $this->db->query("select * from album_foto $where;");
	}


	//Get Galeri	
	function getGaleri($where = '') {
		return $this->db->query("select * from galery $where;");
	}

}

?>
