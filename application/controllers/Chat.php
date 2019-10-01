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
		$M1 = $this->m_chat->get_all();


		$waktu = time();
		$data = array(
			'chat_id' => "123",
			'user_id' => "123",
			'pesan' => $this->input->post('pesan'),
			'waktu' => date("h:i",$waktu),
			'status' => "1"
		);

		$this->db->insert('chatting', $data);

		$this->load->view('header');
		$this->load->view('chat',$data);
	}
}
