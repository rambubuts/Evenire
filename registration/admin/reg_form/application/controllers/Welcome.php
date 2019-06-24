<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 function index(){
		$this->load->view('form/index');
	}
		public function reg(){
		$this->load->view('form/register');
	

	}
	
	}
