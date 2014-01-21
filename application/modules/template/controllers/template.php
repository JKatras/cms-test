<?php  
class Template extends MX_Controller {

	function __construct() {
		parent::__construct();
	}
	
	function public_one_col() {
		$data = "";
		$this->load->view('public_one_col', $data);
	}
	
	function admin() {
		$data = "";
		$this->load->view('admin', $data);
	}
}
?>