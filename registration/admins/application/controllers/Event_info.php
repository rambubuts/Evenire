<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_info extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/events
	 *	- or -
	 * 		http://example.com/events/index
     * 
	 */
	public function index() {
		$this->load->helper('date');
		$data['events'] = $this->event_model->get();
        $data['content'] = 'events/index';
        $data['stylesheets'] = 'events/index_stylesheets';
        $data['scripts'] = 'events/index_scripts';
        $data['title'] = 'Events';
        $data['sub_title'] = 'The page for the events';
        $this->load->view($this->layout, $data);
	}

	public function calendar() {
		echo json_encode($this->event_model->calendar());
	}

	public function create() {
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('speaker', 'Speaker', 'required');
		$this->form_validation->set_rules('venue', 'Venue', 'required');
		$this->form_validation->set_rules('start_date', 'Start date', 'required');
		$this->form_validation->set_rules('end_date', 'End date', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['content'] = 'events/create';
			$data['title'] = 'Create Event';
			$data['sub_title'] = 'The page for creating an event';
			$this->load->view($this->layout, $data);
		} else {
			$this->event_model->create();
			redirect('/events', 'refresh');
    	}
	}

	public function view($id) {
		$this->load->helper('date');
		$data['event'] = $this->event_model->get($id);
		$data['content'] = 'events/view';
		$data['title'] = 'View Event';
		$data['sub_title'] = 'The page for viewing an event';
		$this->load->view($this->layout, $data);
	}

	public function deactivate($id) {
		$this->event_model->deactivate($id);
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	public function activate($id) {
		$this->event_model->activate($id);
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	public function approve($id) {
		$this->event_model->approve($id);
		redirect($_SERVER['HTTP_REFERER']);
	}
}
