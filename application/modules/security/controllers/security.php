<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Security extends MX_Controller
{
	function __construct() {
		parent::__construct();
	}
	function make_hash($password) {
		$hash = $this->bcrypt->hash_password($password);
		return $hash;
	}
}
