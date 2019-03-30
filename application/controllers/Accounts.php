<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/accounts
	 *	- or -
	 * 		http://example.com/accounts/index
     * 
	 */
	public function index()
	{
		$this->load->view('accounts/index.php');
	}
}
