<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_chat extends CI_Model {


	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function get_all(){
		$this->db->select('*');
		$this->db->from('chatting');
		return $this->db->get();
	}

}

?>