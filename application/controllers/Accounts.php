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
        $data['title'] = 'Approved Accounts';
        $data['sub_title'] = 'The index page for the approved accounts';
        $this->load->view($this->layout, $data);
	}
		public function pend_index()
	{
        $data['content'] = 'accounts/pend_index';
        // $data['stylesheets'] = 'accounts/index_stylesheets';
        // $data['scripts'] = 'accounts/index_scripts';
        $data['title'] = 'Pending Accounts';
        $data['sub_title'] = 'The index page for the pending accounts';
        $this->load->view($this->layout, $data);
}
