<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spice extends CI_Controller {

	function index(){
		$this->load->view('header');
		$this->load->view('landing'); 
		$this->load->view('footer');                                                  
	}
	
	function contact(){
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}

	function shop(){
		$this->load->view('header');
		$this->load->view('shop');
		$this->load->view('footer');
	}
}
?>
