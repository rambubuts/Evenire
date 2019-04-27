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
	public function approved()
	{
        $data['content'] = 'accounts/approved';
        $data['stylesheets'] = 'accounts/approved_stylesheets';
        $data['scripts'] = 'accounts/approved_scripts';
        $data['title'] = 'Accounts';
        $data['sub_title'] = 'The index page for the accounts';
        $this->load->view($this->layout, $data);
    }
    
    public function pending()
	{
        $data['content'] = 'accounts/pending';
        $data['stylesheets'] = 'accounts/pending_stylesheets';
        $data['scripts'] = 'accounts/pending_scripts';
        $data['title'] = 'Pending Accounts';
        $data['sub_title'] = 'The index page for the pending accounts';
        $this->load->view($this->layout, $data);
    }
}
