<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/calendar
	 *	- or -
	 * 		http://example.com/calendar/index
     * 
	 */
	public function index()
	{
        $data['content'] = 'calendar/index';
        $data['stylesheets'] = 'calendar/index_stylesheets';
        $data['scripts'] = 'calendar/index_scripts';
        $data['title'] = 'Calendar';
        $data['sub_title'] = 'The index page for the calendar';
        $this->load->view($this->layout, $data);
	}
}
