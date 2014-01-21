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
	function __construct() {
		parent::__construct();
	}
	function index() {
//		$data='';
//		$this->load->view('admin', $data);
		$this->load->model('mdl_template');
		$data['query'] = $this->mdl_template->get('id');
		$this->load->view('display', $data);
	}
	function admin($data) {
	
//		$data = '';
		$this->load->view('admin', $data);
	}
}