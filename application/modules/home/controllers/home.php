<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller
{

function __construct() {
	parent::__construct();
}

public function index() {
	$data = '';
//	$this->load->module('template');
//	$this->template->header($data);
//	$this->template->home_gallery($data);
//	$this->template->footer($data);
	$this->load->view('header');
	
	if(!empty($_GET["action"])){
	
		if($_GET["action"]=="home"){

			$this->load->view('homeGallery');
		}
		if($_GET["action"]=="detail"){

			$this->load->view('detail');
		}
		if($_GET["action"]=="checkout"){

			$this->load->view('checkoutForm');
		}
		if($_GET["action"]=="videos"){

			$this->load->view('videos');
		}
		if($_GET["action"]=="contact"){

			$this->load->view('contactForm');
		}
		
	} else {

		$this->load->view('homeGallery');
	}
	
	$this->load->view('footer');
		
	}
}
