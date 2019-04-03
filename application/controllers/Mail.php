<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends MY_Controller {

    
	/**
	 * Inbox Page for the mail controller
	 *
	 * Maps to the following URL
	 * 		http://example.com/mail
	 *	- or -
	 * 		http://example.com/mail/inbox
     * 
	 */
	public function inbox()
	{
        $data['content'] = 'mail/inbox';
        $data['stylesheets'] = 'mail/inbox_stylesheets';
        $data['scripts'] = 'mail/inbox_scripts';
        $data['title'] = 'Mail';
        $data['sub_title'] = 'The page for the mail';
        $this->load->view($this->layout, $data);
	}
}
