<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MX_Controller {
//
//	function __construct() {
//		parent::__construct();
//	}
//	function public_one_col() {
//		$data = '';
//		$this->load->view('public_one_col', $data);
//	}
//	function admin()
//	{
//		$data = '';
//		$this->load->view('admin');
//	}
	function index() {
		
		$this->load->view('admin');
		$this->load->model('mdl_users');
		$data['query'] = $this->mdl_users->get('userId');
		$this->load->view('display', $data);
	}
}