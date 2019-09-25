<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->database();
		if($this->session->userdata('email_sesi')=="adminku"){
			$this->load->view('headeradmin');
		}
		else{
			$this->load->view('header');
		}
		$this->load->view('home');

	}
	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$query = $this->db->query("SELECT count(*) as jml FROM customer WHERE email='$email' AND password='$password' ");
		foreach ($query->result() as $row)
		{
			if($row->jml==1){
				$this->session->set_userdata('email_sesi',$email);
				if($email=="adminku"){
					$this->load->view('headeradmin');
					$this->load->view('home');
				}
				else{
					$this->load->view('header');
					$this->load->view('home');
				}
				
			}
			else{
				$this->load->view('header');
				$this->load->view('home');
			}
		}
		
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('header');
		$this->load->view('home');

	}

	public function register()
	{
	$data = array(
	'nama' => $this->input->post('nama'),
	'email' => $this->input->post('email'),
	'password' => $this->input->post('password'),
	'alamat' => $this->input->post('alamat'),
	'tanggal_lahir' => $this->input->post('tanggal_lahir'),
	'gender' => $this->input->post('gender'),
	'no_hp' => $this->input->post('no_hp')
	);

	$this->db->insert('customer', $data);
	$this->session->set_userdata('email_sesi',$data['email']);
	$this->load->view('header');
	$this->load->view('home');
	}
	
	public function chat()
	{
		if($this->session->userdata('email_sesi')=="adminku"){
			$this->load->view('headeradmin');
		}
		else{
			$this->load->view('header');
		}
		$this->load->view('chat');

	}
	
	public function profil()
	{
	if($this->session->userdata('email_sesi')=="adminku"){
		$this->load->view('headeradmin');
	}
	else{
		$this->load->view('header');
	}
	$this->load->view('profil');

	}
	public function riwayat()
	{
	if($this->session->userdata('email_sesi')=="adminku"){
		$this->load->view('headeradmin');
	}
	else{
		$this->load->view('header');
	}
	$this->load->view('riwayat');

	}
	
	
}
