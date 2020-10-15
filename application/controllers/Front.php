<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Petulu';
		$data['sejarah'] = $this->db->get('sejarah')->row_array();
		$data['lokasi'] = $this->db->get('lokasi')->row_array();

		// $this->load->view('templates_front/auth_header', $data);
		$this->load->view('front/index', $data);
		// $this->load->view('templates_front/auth_footer', $data);
	}
}
