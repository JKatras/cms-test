<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller
{
function __construct() {
	parent::__construct();
}
function home() {
	echo "Welcome to Dashboard";
}
function cms_links() {
	$data['view_file'] = 'cms_links';
	$this->load->module('template');
	$this->template->admin($data);
}

}