<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Panel extends CI_Model {
	
	function construct() {
		parent::__construct();
	}
		
	
	function login($where = '') {
		return $this->db->query("select * from users $where;");
	}
	
}

?>
