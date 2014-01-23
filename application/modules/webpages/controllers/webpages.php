<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webpages extends MX_Controller
{

function __construct() {
	parent::__construct();
}

function get($order_by){
$this->load->model('mdl_webpages');
$query = $this->mdl_webpages->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_webpages');
$query = $this->mdl_webpages->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id){
$this->load->model('mdl_webpages');
$query = $this->mdl_webpages->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_webpages');
$query = $this->mdl_webpages->get_where_custom($col, $value);
return $query;
}

function _insert($data){
$this->load->model('mdl_webpages');
$this->mdl_webpages->_insert($data);
}

function _update($id, $data){
$this->load->model('mdl_webpages');
$this->mdl_webpages->_update($id, $data);
}

function _delete($id){
$this->load->model('mdl_webpages');
$this->mdl_webpages->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_webpages');
$count = $this->mdl_webpages->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_webpages');
$max_id = $this->mdl_webpages->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_webpages');
$query = $this->mdl_webpages->_custom_query($mysql_query);
return $query;
}

}
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
//	function __construct() {
//		parent::__construct();
//	}
//	function index() {
//		$data='';
//		$this->load->view('admin', $data);
//		$this->load->model('mdl_webpages');
//		$data['query'] = $this->mdl_webpages->get('userId');
//		$this->load->view('display', $data);
//	}
//	function admin() {
//	
//		$data = '';
//		$this->load->view('admin', $data);
//	}
