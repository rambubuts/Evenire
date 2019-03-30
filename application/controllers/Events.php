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
	public function index()
	{
        $data['content'] = 'events/index';
        // $data['stylesheets'] = 'events/index_stylesheets';
        // $data['scripts'] = 'events/index_scripts';
        $data['title'] = 'Events';
        $data['sub_title'] = 'The index page for the events';
        $this->load->view($this->layout, $data);
	}
}
