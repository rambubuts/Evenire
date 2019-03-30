<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends MY_Controller {

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
        $data['content'] = 'accounts/index';
        // $data['stylesheets'] = 'accounts/index_stylesheets';
        // $data['scripts'] = 'accounts/index_scripts';
        $data['title'] = 'Accounts';
        $data['sub_title'] = 'The index page for the accounts';
        $this->load->view($this->layout, $data);
	}
}
