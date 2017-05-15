<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('Model_Site');
	}



	//Home
	public function index() {
		$this->load->helper('text');
		
		$logoheader			= $this->Model_Site->getConfig('WHERE id_config = 1')->result_array();
		$home				= $this->Model_Site->getConfig('WHERE id_config = 2')->result_array();
		$deskripsi			= $this->Model_Site->getConfig('WHERE id_config = 3')->result_array();
		$keyword			= $this->Model_Site->getConfig('WHERE id_config = 4')->result_array();
		$teks_kontak		= $this->Model_Site->getConfig('WHERE id_config = 5')->result_array();
		$footer				= $this->Model_Site->getConfig('WHERE id_config = 6')->result_array();
		
		$slider_home		= $this->db->query('select * from artikel order by id desc limit 3')->result_array();
		$suara_rektorat		= $this->db->query('select * from suara_rektorat')->result_array();
		
		$link_cepat			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4 order by menu_id asc limit 5')->result_array();
		
		$link_external		= $this->db->query('select * from link_external order by id asc limit 5')->result_array();
		
		$testimoni_alumni	= $this->db->query("select * from testimoni_alumni")->result_array();
		$berita_terbaru		= $this->db->query("select * from artikel order by id desc limit 3")->result_array();
		
		$all_news			= $this->db->query("select * from artikel order by id desc limit 20")->result_array();
		$foto				= $this->db->query("select * from galery order by id desc limit 20")->result_array();
		
		
		$data = array(
			'logo'				=> strip_tags($logoheader[0]['content']),
			'title'				=> strip_tags($home[0]['content']),		
			'deskripsi'			=> strip_tags($deskripsi[0]['content']),		
			'keyword'			=> strip_tags($keyword[0]['content']),		
			'teks_kontak'		=> strip_tags($teks_kontak[0]['content']),		
			'footer'			=> strip_tags($footer[0]['content']),

			'slider_home' 		=> $slider_home,
			'suara_rektorat'	=> $suara_rektorat,

			'link_cepat'		=> $link_cepat,

			'uri1'				=> $this->uri->segment(2),
			'uri2'				=> $this->uri->segment(3),
			'menu'				=> $this->Model_Site->GetParentMenu(),

			'link_external'		=> $link_external,
			'testimoni_alumni'	=> $testimoni_alumni,
			'berita_terbaru'	=> $berita_terbaru,
			'all_news'			=> $all_news,
			'foto'				=> $foto,
		);
		
		$this->load->view('web/layout/header', $data);
		$this->load->view('web/home');
		$this->load->view('web/layout/footer');
	}


	//Kontak
	function kontak() {
		$this->load->helper('text');
		
		$logoheader			= $this->Model_Site->getConfig('WHERE id_config = 1')->result_array();
		$home				= $this->Model_Site->getConfig('WHERE id_config = 2')->result_array();
		$deskripsi			= $this->Model_Site->getConfig('WHERE id_config = 3')->result_array();
		$keyword			= $this->Model_Site->getConfig('WHERE id_config = 4')->result_array();
		$teks_kontak		= $this->Model_Site->getConfig('WHERE id_config = 5')->result_array();
		$footer				= $this->Model_Site->getConfig('WHERE id_config = 6')->result_array();
		
		$slider_home		= $this->db->query('select * from artikel order by id desc limit 3')->result_array();
		$suara_rektorat		= $this->db->query('select * from suara_rektorat')->result_array();
		
		$link_cepat			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4 order by menu_id asc limit 5')->result_array();
		
		$link_external		= $this->db->query('select * from link_external order by id asc limit 5')->result_array();
		
		$testimoni_alumni	= $this->db->query("select * from testimoni_alumni")->result_array();
		$berita_terbaru		= $this->db->query("select * from artikel order by id desc limit 3")->result_array();
		
		$all_news			= $this->db->query("select * from artikel order by id desc limit 20")->result_array();
		$foto				= $this->db->query("select * from galery order by id desc limit 20")->result_array();
		
		$this->load->model('Model_Site');
		
		
		$data = array(
			'logo'				=> strip_tags($logoheader[0]['content']),
			'title'				=> strip_tags($home[0]['content']),	
			'deskripsi'			=> strip_tags($deskripsi[0]['content']),
			'keyword'			=> strip_tags($keyword[0]['content']),		
			'teks_kontak'		=> strip_tags($teks_kontak[0]['content']),
			'footer'			=> strip_tags($footer[0]['content']),

			'slider_home' 		=> $slider_home,
			'suara_rektorat'	=> $suara_rektorat,

			'link_cepat'		=> $link_cepat,

			'uri1'				=> $this->uri->segment(2),
			'uri2'				=> $this->uri->segment(3),
			'menu'				=> $this->Model_Site->GetParentMenu(),
					  
			'link_external'		=> $link_external,
			'testimoni_alumni'	=> $testimoni_alumni,
			'berita_terbaru'	=> $berita_terbaru,
			'all_news'			=> $all_news,
			'foto'				=> $foto,
		);
		
		$this->load->view('web/layout/header', $data);
		$this->load->view('web/kontak');
		$this->load->view('web/layout/footer');
	}


}
