<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/events
	 *	- or -
	 * 		http://example.com/events/index
     * 
	 */
	public function approved()
	{
        $data['content'] = 'events/approved';
        $data['stylesheets'] = 'events/approved_stylesheets';
        $data['scripts'] = 'events/approved_scripts';
        $data['title'] = 'Approved Events';
        $data['sub_title'] = 'The page for the approved events';
        $this->load->view($this->layout, $data);
    }
    public function pending()
	{
        $data['content'] = 'events/pending';
        $data['stylesheets'] = 'events/pending_stylesheets';
        $data['scripts'] = 'events/pending_scripts';
        $data['title'] = 'Pending Events';
        $data['sub_title'] = 'The page for the pending events';
        $this->load->view($this->layout, $data);
	}
}
