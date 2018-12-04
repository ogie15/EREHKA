<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {
	function header(){
		$this->load->view('header');
		$this->load->view('landing'); 
		$this->load->view('footer');                                                  
	}
	
}
?>
