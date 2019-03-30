<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/mail
	 *	- or -
	 * 		http://example.com/mail/index
     * 
	 */
	public function index()
	{
        $data['content'] = 'mail/index';
        $data['title'] = 'Mail';
        $data['sub_title'] = 'The index page for the mail';
        $this->load->view($this->layout, $data);
	}
}
