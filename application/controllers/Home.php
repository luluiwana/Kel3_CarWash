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
	public function add(){
	 $data = array(
	'email' => $this->input->post('email'),
	'paket' => $this->input->post('paket'),
	'jenis_kendaraan' => $this->input->post('jenis_kendaraan'),
	'no_plat' => $this->input->post('no_plat')
	);
	
	$email = $data['email'];
	
	$qdatang=$this->db->query("SELECT COUNT(*) as jml FROM riwayat WHERE email='$email'");
	foreach($qdatang->result() as $row){
		$jml=$row->jml;
	}

	if($jml==1){
		$query=$this->db->query("SELECT DATEDIFF(CURRENT_DATE, waktu_datang) AS days FROM riwayat WHERE email='saya' ORDER BY id_history DESC LIMIT 1 ");
		foreach($query->result() as $row){
			$selisih = $row->days;
		}
		$this->db->query("UPDATE customer SET periode=$selisih WHERE email='$email'");
	}
	elseif($jml>1){
		$query=$this->db->query("SELECT DATEDIFF(CURRENT_DATE, waktu_datang) AS days FROM riwayat WHERE email='$email' ORDER BY id_history DESC LIMIT 1 ");
		foreach($query->result() as $row){
			$selisih = $row->days;
		}
		$query=$this->db->query("SELECT * FROM customer WHERE email='$email' ");
		foreach($query->result() as $row){
			$periode = $row->periode;
		}
		$ramal = ($periode+$selisih)/2;
		$this->db->query("UPDATE customer SET periode=$ramal WHERE email='$email'");
	}
	//$this->db->query("UPDATE customer SET periode=6 WHERE email='$email'");
	$this->db->insert('riwayat', $data);
	
	
	redirect('http://localhost/catwash/home/riwayat');
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
	
	public function faq(){
		if($this->session->userdata('email_sesi')=="adminku"){
		$this->load->view('headeradmin');
	}
	else{
		$this->load->view('header');
	}
	$this->load->view('faq');
	}
	
	public function feedback(){
	if($this->session->userdata('email_sesi')=="adminku"){
		$this->load->view('headeradmin');
		$this->load->view('feedbackadmin');
	}
	elseif(!$this->session->userdata('email_sesi')){
		$this->load->view('header');
		$this->load->view('feedbackgagal');
		
	}
	else{
		$this->load->view('header');
		$this->load->view('feedback');
	}
	
	}
	
	
}
