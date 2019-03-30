<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/events
	 *	- or -
	 * 		http://example.com/events/index
     * 
	 */
	public function index()
	{
		$this->load->view('events/index.php');
	}
}
