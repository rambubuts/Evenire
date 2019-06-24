<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/dashboard
	 *	- or -
	 * 		http://example.com/dashboard/index
     * 
	 */
	public function index() {
		$data['accounts']['approved'] = $this->account_model->approved();
		$data['accounts']['pending'] = $this->account_model->pending();
		$data['events']['reported'] = $this->event_model->reported();
        $data['content'] = 'dashboard/dashboard';
        $data['stylesheets'] = 'dashboard/dashboard_stylesheets';
        $data['scripts'] = 'dashboard/dashboard_scripts';
        $data['title'] = 'Dashboard';
        $data['sub_title'] = 'The index page for the dashboard';
        $this->load->view($this->layout, $data);
	}
	
	public function header() {
		$data['content'] = 'dashboard/dashboard';
		$data['stylesheets'] = 'dashboard/dashboard_stylesheets';
		$data['scripts'] = 'dashboard/dashboard_scripts';
		$data['title'] = 'Dashboard';
		$data['sub_title'] = 'The index page for the dashboard';
		$this->load->view($this->layout, $data);
	}
}
