<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cPanel extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model('Model_Panel');
		$this->load->model('Model_Admin');
		$this->load->library('form_validation');
	}

	
	//Index Redirect
	function index() {
		if (is_login()) {
    		redirect(base_url().'cPanel/dashboard/', 'refresh');
    	} 
	}



	//Login
	function login() {
		if(isset($_SESSION['login'])) {
    		redirect( base_url().'cPanel/dashboard/', 'refresh');
    	}
		$this->load->view('cpanel/masuk');
	}


	//Cek Auth Login
	function cekauth() {
		if($_POST) {
			$this->form_validation->set_rules('username','Username'.'required|trim|xss_clean');
			$this->form_validation->set_rules('password','Password'.'required|trim|xss_clean');
			
			if($this->form_validation->run() == TRUE) {
				redirect( base_url().'cPanel/login/', 'refresh');
			}
			
			$username	= $this->input->post('username');
			$password	= SHA1($this->input->post('password'));
			
			$auth		= $this->Model_Panel->login("where username = '$username' and password = '$password'")->result_array();
			if($auth != NULL) {
				$data = array(
					'username'		=> $auth[0]['username'],
					'email'			=> $auth[0]['email'],
					'fullname'		=> $auth[0]['fullname'],
				);

				$this->session->set_userdata('login',$data);
				redirect( base_url().'cPanel/dashboard/', 'refresh');

			} else {
				$this->session->set_flashdata('status', 'failed');
				redirect( base_url().'cPanel/login/', 'refresh');
			}
		}
	}


	//Logout
	function logout() {
		is_login();
    	$this->session->unset_userdata('login'); 
    	$this->session->sess_destroy();              
        redirect(base_url().'cPanel/login/', 'refresh');
	}



	//Dashboard
	function dashboard() {
		is_login();

		$user		= $this->session->userdata('login');
		$user_data	= $this->Model_Admin->user()->result_array();
		$email		= $user_data[0]['email'];
		
		//variabel penampung jumlah artikel
		$art		= $this->Model_Admin->getArtikel();
		$artikel	= $art->num_rows();
		
		//variabel penampung jumlah halaman
		$hal		= $this->Model_Admin->getPage();
		$halaman	= $hal->num_rows();
		
		//variabel penampung jumlah dosen
		$dos		= $this->Model_Admin->getDosen();
		$dosen		= $dos->num_rows();
		
		//variabel penampung jumlah contact
		$con		= $this->Model_Admin->getContact();
		$contact	= $con->num_rows();
		
		//variabel penampung data pesan kiriman pengunjung
		$pesan		= $this->Model_Admin->selectdata('contact')->result_array();
		
		$data = array(
					  'title'			=> 'cPanel PI | Dashboard',
					  'user'			=> $user_data[0]['fullname'],
					  'jlh_artikel'		=> $artikel,
					  'jlh_halaman'		=> $halaman,
					  'jlh_dosen'		=> $dosen,
					  'jlh_contact'		=> $contact,
					  'pesan'			=> $pesan,
					  );
		
		
		$this->load->view('cpanel/layout/header', $data);
		$this->load->view('cpanel/dashboard');
		$this->load->view('cpanel/layout/footer1');
	}



	//Manajemen Menu
	function menu() {
		is_login();
		
		$user		= $this->session->userdata('login');
		$user_data	= $this->Model_Admin->user()->result_array();
		$email		= $user_data[0]['email'];
		
		//variabel penampung data menu
		$menu		= $this->Model_Admin->selectdata('menu order by menu_id asc')->result_array();
		
		$data		= array(
			'title'			=> 'cPanel PI | Manajemen Menu',
			'user'			=> $user_data[0]['fullname'],
			'menu'			=> $menu,
			);

		$this->load->view('cpanel/layout/header', $data);
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/layout/footer2');
	}

	//Menu Add
	function menuadd() {
		is_login();
		
		$user		= $this->session->userdata('login');
		$user_data	= $this->Model_Admin->user()->result_array();
		$email		= $user_data[0]['email'];
		
		//variabel penampung data menu
		$menu		= $this->Model_Admin->selectdata('menu order by menu_id asc')->result_array();
		
		$data		= array(
			'title'			=> 'cPanel PI | Tambah Menu Baru',
			'user'			=> $user_data[0]['fullname'],
			'kode'			=> '',
			'menu_name'		=> '',
			'menu_url'		=> '',
			'parent_id'		=> '',
			'content_id'	=> '',
			'view_type'		=> '',
			'status'		=> '',
			'stat'			=> 'new',
			'menu'			=> $this->Model_Admin->GetParentMenu(''),
		);

		$this->load->view('cpanel/layout/header', $data);
		$this->load->view('cpanel/menu_form');
		$this->load->view('cpanel/layout/footer2');
	}

	//Menu Save
	function menusave() {
		is_login();

		if($_POST) {
			$this->load->helper('url');
			$kode			= $this->input->post('kode');
			$stat			= $this->input->post('stat');
			$menu_name		= $this->input->post('menu_name');
			$parent_id		= $this->input->post('parent_id');
			$view_type		= $this->input->post('view_type');
			$content_id		= $this->input->post('content_id');
			$status			= $this->input->post('status');
			$slug			= url_title($menu_name,'dash',TRUE);

			if($stat =='new') {
				$data = array(
					'menu_name'		=> $menu_name,
					'menu_url'		=> $slug,
					'parent_id'		=> $parent_id,
					'content_id'	=> $content_id,
					'view_type'		=> $view_type,
					'status'		=> $status,
				);

				$this->Model_Admin->insertdata('menu', $data);
				$this->session->set_flashdata("save_menu","<div class='alert alert-success alert-dismissable' id='success-alert'>
														    <i class='fa fa-info'></i>
														    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
														    <b> &nbsp; Sukses!</b> &nbsp; Menu baru berhasil dibuat ...
											               </div>");
				redirect(base_url().'cPanel/menu/', 'refresh');
			} else {
				$data = array(
					'menu_name'		=> $menu_name,
					'menu_url'		=> $slug,
					'parent_id'		=> $parent_id,
					'content_id'	=> $content_id,
					'view_type'		=> $view_type,
					'status'		=> $status,													  
				);

				$this->Model_Admin->updatedata('menu', $data, array('menu_id' => $kode));
				$this->session->set_flashdata("save_menu","<div class='alert alert-success alert-dismissable' id='success-alert'>
					                                        <i class='fa fa-info'></i>
					                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					                                        <b> &nbsp; Sukses!</b> &nbsp; Menu berhasil di update ...
					                                       </div>");
				redirect(base_url().'cPanel/menu/', 'refresh');
			}

		} else {
			echo "Halaman tidak ditemukan";
		}
	}

	//Menu Edit
	function menuedit($kode = 0) {
		is_login();

		$user		= $this->session->userdata('login');
		$user_data	= $this->Model_Admin->user()->result_array();
		$email		= $user_data[0]['email'];
		
		//variabel penampung data menu
		$data_konten		= $this->Model_Admin->getMenu("where menu_id = '$kode'")->result_array();
		$data		= array(
			'title'			=> 'cPanel PI | Edit Menu',
			'user'			=> $user_data[0]['fullname'],
			'kode'			=> $data_konten[0]['menu_id'],
			'menu_name'		=> $data_konten[0]['menu_name'],
			'parent_id'		=> $data_konten[0]['parent_id'],
			'content_id'	=> $data_konten[0]['content_id'],
			'view_type'		=> $data_konten[0]['view_type'],
			'stat'			=> 'edit',
			'menu'			=> $this->Model_Admin->GetParentMenu(''),
		);

		$this->load->view('cpanel/layout/header', $data);
		$this->load->view('cpanel/menu_form');
		$this->load->view('cpanel/layout/footer2');
	}
		
	//Menu Delete
	function menudelete($kode = 0) {
		is_login();
		
		$this->Model_Admin->deldata('menu', array('menu_id' =>$kode));
		$this->session->set_flashdata("save_menu","<div class='alert alert-success alert-dismissable' id='success-alert'>
													<i class='fa fa-info'></i>
													<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
													<b> &nbsp; Sukses!</b> &nbsp; Menu berhasil dihapus ...
												   </div>");
		redirect(base_url().'cPanel/menu/', 'refresh');
	}



	//Artikel
	function artikel() {
		is_login();

		$this->load->helper('text');

		$user		= $this->session->userdata('login');
		$user_data	= $this->Model_Admin->user()->result_array();
		$email		= $user_data[0]['email'];
		
		//variabel penampung data artikel
		$artikel		= $this->Model_Admin->selectdata('artikel order by id desc')->result_array();
		
		$data = array(
			'title'			=> 'cPanel PI | Manajemen Artikel',
			'user'			=> $user_data[0]['fullname'],
			'artikel'		=> $artikel,
		);

		$this->load->view('cpanel/layout/header', $data);
		$this->load->view('cpanel/artikel');
		$this->load->view('cpanel/layout/footer2');
	}


	//Artikel Add
	function artikeladd() {
		is_login();
		
		$user		= $this->session->userdata('login');
		$user_data	= $this->Model_Admin->user()->result_array();
		$email		= $user_data[0]['email'];
		
		//variabel penampung data artikel
		$artikel	= $this->Model_Admin->selectdata('artikel order by id')->result_array();
		$this->load->helper('text');
		$this->load->helper('url');
		
		$data		= array(
			'title'			=> 'cPanel PI | Tambah Artikel Baru',
			'user'			=> $user_data[0]['fullname'],
			'kode'			=> '',
			'judul'			=> '',
			'slug'			=> '',
			'author'		=> '',
			'image'			=> '',
			'content'		=> '',
			'category'		=> '',
			'status'		=> '',
			'stat'			=> 'new',
		);

		$this->load->view('cpanel/layout/header', $data);
		$this->load->view('cpanel/artikel_form');
		$this->load->view('cpanel/layout/footer2');
	}


	//Artikel Save
	function artikelsave() {
		is_login();

		if($_POST) {
			$this->load->helper('url');
			
			$kode		= $this->input->post('kode');
			$judul		= $this->input->post('judul');
			$slug		= url_title($judul,'dash',TRUE);
			$date		= date('Y-m-d H:i:s');
			$time		= date('H:i:s');
			
			$user_data	= $this->Model_Admin->user()->result_array();
			$fullname	= $user_data[0]['fullname'];
			
			$author		= $fullname;
			$content	= $this->input->post('content');
			$kategori	= $this->input->post('kategori');
			$status		= $this->input->post('status');
			$stat		= $this->input->post('stat');
			
			if($stat == 'new') {
				if($_FILES['foto']['name'] != "") {
					$config['upload_path']          = 'file/blog';
                	$config['allowed_types']        = 'jpeg|jpg|png';
                	$config['max_size']             = '2000';
					$config['remove_space']			= true;
					$config['overwrite']			= false;
					$config['encrypt_name']			= true;
					$config['max_width'] 			= '';
					$config['max_height']			= '';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					
					if(!$this->upload->do_upload('foto')) {
						print_r('Ukuran file terlalu besar. Maksimal 2 MB');
						exit();
					} else {
						$image = $this->upload->data();
						
						if($image['file_name']) {
							$data['file'] = $image['file_name'];
						}
						$img_header = $data['file'];
					}
				}
				
				$data = array(
					'title'			=> $judul,
					'slug'			=> $slug,
					'date'			=> $date,
					'time'			=> $time,
					'img_header'	=> $img_header,
					'author'		=> $author,
					'content'		=> $content,
					'category'		=> $kategori,
					'status'		=> $status,

				);

				$this->Model_Admin->insertdata('artikel', $data);
				$this->session->set_flashdata("save_artikel","<div class='alert alert-success alert-dismissable' id='success-alert'>
													<i class='fa fa-info'></i>
													<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
													<b> &nbsp; Sukses!</b> &nbsp; Artikel baru berhasil dibuat ...
												   </div>");
				redirect(base_url().'cPanel/artikel/', 'refresh');
			
			} else {
				$this->db->where('id', $kode);
				$query	= $this->db->get('artikel');
				$row	= $query->row();
				
				if($_FILES['foto']['name'] != "") {
					$config['upload_path']          = 'file/blog';
                	$config['allowed_types']        = 'jpeg|jpg|png';
                	$config['max_size']             = '2000';
					$config['remove_space']			= true;
					$config['overwrite']			= false;
					$config['encrypt_name']			= true;
					$config['max_width'] 			= '';
					$config['max_height']			= '';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					
					if(!$this->upload->do_upload('foto')) {
						print_r('Ukuran file terlalu besar. Maksimal 2 MB');
						exit();
					} else {
						$image = $this->upload->data();

						if($image['file_name']) {
							$data['file'] = $image['file_name'];
						}
						$img_header = $data['file'];
					}
				}
				
				$data = array(
					'title'			=> $judul,
					'slug'			=> $slug,
					'date'			=> $date,
					'time'			=> $time,
					'img_header'	=> $img_header,
					'author'		=> $author,
					'content'		=> $content,
					'category'		=> $kategori,
					'status'		=> $status,

				);
				
				$this->Model_Admin->updatedata('artikel', $data, array('id' => $kode));
				$this->session->set_flashdata("save_artikel","<div class='alert alert-success alert-dismissable' id='success-alert'>
													<i class='fa fa-info'></i>
													<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
													<b> &nbsp; Sukses!</b> &nbsp; Artikel berhasil diupdate ...
												   </div>");
				redirect(base_url().'cPanel/artikel/', 'refresh');
			}

		} else {
			echo "Halaman tidak ditemukan";
		}
		
	}
		
	
	//Artikel Edit	
	function artikeledit($kode = 0) {
		is_login();

		$user		= $this->session->userdata('login');
		$user_data	= $this->Model_Admin->user()->result_array();
		$email		= $user_data[0]['email'];
		
		//variabel penampung data artikel
		$data_konten		= $this->Model_Admin->getArtikel("where id = '$kode'")->result_array();
		
		$data		= array(
			'title'			=> 'cPanel PI | Edit Artikel',
			'user'			=> $user_data[0]['fullname'],
			'kode'			=> $data_konten[0]['id'],
			'judul'			=> $data_konten[0]['title'],
			'slug'			=> $data_konten[0]['slug'],
			'image'			=> $data_konten[0]['img_header'],
			'content'		=> $data_konten[0]['content'],
			'kategori'		=> $data_konten[0]['category'],
			'status'		=> $data_konten[0]['status'],
			'stat'			=> 'edit',
		);

		$this->load->view('cpanel/layout/header', $data);
		$this->load->view('cpanel/artikel_form');
		$this->load->view('cpanel/layout/footer2');
	}	


	//Artikel Delete	
	function artikeldelete($kode = 0) {
		is_login();

		$this->db->where('id',$kode);
		$query = $this->db->get('artikel');
		$row   = $query->row();
		unlink("./file/blog/$row->img_header");
		
		$this->Model_Admin->deldata('artikel', array('id' =>$kode));
		$this->session->set_flashdata("save_artikel","<div class='alert alert-success alert-dismissable' id='success-alert'>
													<i class='fa fa-info'></i>
													<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
													<b> &nbsp; Sukses!</b> &nbsp; Artikel berhasil dihapus ...
												   </div>");
		redirect(base_url().'cPanel/artikel/', 'refresh');
	}



	//Halaman
	function halaman() {
		is_login();
		
		$this->load->helper('text');
		
		$user		= $this->session->userdata('login');
		$user_data	= $this->Model_Admin->user()->result_array();
		$email		= $user_data[0]['email'];
		
		//variabel penampung data halaman/pages
		$pages		= $this->Model_Admin->selectdata('pages order by id asc')->result_array();
		
		$data = array(
			'title'			=> 'cPanel PI | Manajemen Halaman',
			'user'			=> $user_data[0]['fullname'],
			'pages'			=> $pages,
		);

		$this->load->view('cpanel/layout/header', $data);
		$this->load->view('cpanel/halaman');
		$this->load->view('cpanel/layout/footer2');
	}

	
	//Halaman Add	
	function halamanadd() {
		is_login();

		$this->load->helper('text');
		$this->load->helper('url');
		
		$user		= $this->session->userdata('login');
		$user_data	= $this->Model_Admin->user()->result_array();
		$email		= $user_data[0]['email'];
		
		//variabel penampung data halaman/pages
		$pages		= $this->Model_Admin->selectdata('pages order by id asc')->result_array();
		
		$data = array(
			'title'			=> 'cPanel PI | Tambah Halaman',
			'user'			=> $user_data[0]['fullname'],
			'kode'			=> '',
			'judul'			=> '',
			'slug'			=> '',
			'content'		=> '',
			'status'		=> '',
			'stat'			=> 'new',
		);

		$this->load->view('cpanel/layout/header', $data);
		$this->load->view('cpanel/halaman_form');
		$this->load->view('cpanel/layout/footer2');
	}

	
	//Halaman	
	function halamansave() {
		is_login();

		if($_POST) {
			$this->load->helper('url');

			$kode			= $this->input->post('kode');
			$stat			= $this->input->post('stat');
			$judul			= $this->input->post('judul');
			$slug			= url_title($judul,'dash',TRUE);
			$content		= $this->input->post('content');
			$status			= $this->input->post('status');

			if($stat =='new') {
				$data = array(
					'title'			=> $judul,
					'slug'			=> $slug,
					'content'		=> $content,
					'status'		=> $status,
				);

				$this->Model_Admin->insertdata('pages',$data);
				$this->session->set_flashdata("save_halaman","<div class='alert alert-success alert-dismissable' id='success-alert'>
													<i class='fa fa-info'></i>
													<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
													<b> &nbsp; Sukses!</b> &nbsp; Halaman baru berhasil dibuat ...
												   </div>");
				redirect(base_url().'cPanel/halaman/', 'refresh');

			} else {
				$data = array(
					'title'			=> $judul,
					'slug'			=> $slug,
					'content'		=> $content,
					'status'		=> $status,												  
				);

				$this->Model_Admin->updatedata('pages', $data, array('id' => $kode));
				$this->session->set_flashdata("save_halaman","<div class='alert alert-success alert-dismissable' id='success-alert'>
													<i class='fa fa-info'></i>
													<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
													<b> &nbsp; Sukses!</b> &nbsp; Halaman berhasil diupdate ...
												   </div>");
				redirect(base_url().'cPanel/halaman/', 'refresh');
			}

		} else {
			echo "Halaman tidak ditemukan";
		}
	}	
		
	
	//Halaman Edit
	function halamanedit($kode = 0) {
		is_login();

		$user		= $this->session->userdata('login');
		$user_data	= $this->Model_Admin->user()->result_array();
		$email		= $user_data[0]['email'];
		
		//variabel penampung data page/halaman
		$data_konten		= $this->Model_Admin->getPage("where id = '$kode'")->result_array();
		
		$data		= array(
			'title'			=> 'Edit Halaman',
			'user'			=> $user_data[0]['fullname'],
			'kode'			=> $data_konten[0]['id'],
			'judul'			=> $data_konten[0]['title'],
			'slug'			=> $data_konten[0]['slug'],
			'content'		=> $data_konten[0]['content'],
			'status'		=> $data_konten[0]['status'],
			'stat'			=> 'edit',
		);

		$this->load->view('cpanel/layout/header', $data);
		$this->load->view('cpanel/halaman_form');
		$this->load->view('cpanel/layout/footer2');
	}
		
	
	//Halaman Delete
	function halamanadelete($kode = 0) {
		is_login();

		$this->Model_Admin->deldata('pages',array('id' =>$kode));
		$this->session->set_flashdata("save_halaman","<div class='alert alert-success alert-dismissable' id='success-alert'>
													<i class='fa fa-info'></i>
													<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
													<b> &nbsp; Sukses!</b> &nbsp; Halaman berhasil dihapus ...
												   </div>");
		redirect(base_url().'cPanel/halaman/', 'refresh');
	}


	function kontak() {
		$user		= $this->session->userdata('login');
		$user_data	= $this->Model_Admin->user()->result_array();
		$email		= $user_data[0]['email'];
		
		//variabel penampung data contact
		$contact	= $this->Model_Admin->selectdata('contact order by id desc')->result_array();
		
		$data		= array(
			'title'				=> 'Kotak Masuk Pesan',
			'user'				=> $user_data[0]['fullname'],
			'contact'			=> $contact,
		);
		
		$this->load->view('cpanel/layout/header', $data);
		$this->load->view('cpanel/kontak');
		$this->load->view('cpanel/layout/footer2');
	}			  
		
		
	function kontakdelete($kode = 0) {
		$this->Model_Admin->deldata('contact', array('id' =>$kode));
		$this->session->set_flashdata("save_contact","<div class='alert alert-info alert-dismissable'>
                                        <i class='fa fa-info'></i>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <b>Sukses!</b> Pesan/Komentar berhasil dihapus
                                    </div>");
		redirect(base_url().'cPanel/kontak/', 'refresh');
	}

}
