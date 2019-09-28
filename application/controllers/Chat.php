<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->model('m_chat');
		$data['ngechat'] = $this->m_chat->get_all_messages();
		$this->load->view('chat',$data);
	}

	function tambah_chat()
	{
		$this->load->model('m_chat');
		$string = $this->input->post('teks');
		$data = $this->m_chat->input_chat($string);
		$this->load->view('chat',$data);
	}
}
