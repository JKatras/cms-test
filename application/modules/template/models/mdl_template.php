<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_template extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	function get($order_by) {
		$this->db->order_by($order_by);
		$query = $this->db->get('users');
		return $query;
	}
}

?>