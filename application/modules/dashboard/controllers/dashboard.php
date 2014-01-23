<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller
{
function __construct() {
	parent::__construct();
}
function home() {
	echo "Welcome to Dashboard";
}


}