<?php
class Event_model extends CI_Model {
	
	public function __construct() {
		$this->load->database();
	}

	public function get($id=NULL) {
		if($id==NULL) {
			$query = $this->db->get('events');
			return $query->result_array();
		}
		$query = $this->db->get_where('events', array('id' => $id));
		return $query->row();
	}

	public function create() {
		$data = array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'venue' => $this->input->post('venue'),
			'speaker' => $this->input->post('speaker'),
			'start_date' => $this->input->post('start_date'),
			'end_date' => $this->input->post('end_date'),
		);

		return $this->db->insert('events', $data);
	}

	public function approve($id) {
		$this->db->set('status', 1);
		$this->db->where('event_id', $id);
		$this->db->update('events');
	}

	public function activate($id) {
		$this->db->set('status', 1);
		$this->db->where('event_id', $id);
		$this->db->update('events');
	}

	public function deactivate($id) {
		$this->db->set('status', 0);
		$this->db->where('event_id', $id);
		$this->db->update('events');
	}

	public function calendar() {
		$query = $this->db->get_where('events', array('status' => 1));
		$formatted = array();
		foreach($query->result_array() as $entry) {
			$info = $this->db->get_where('event_info', array('event_event_id' => $entry['event_id']))->row();
			$formatted[] = array(
				'id' => $entry['event_id'],
				'title' => $entry['event_title'],
				'start' => date('Y-m-d\TH:i:s', strtotime($info->event_started_date)),
				'end' => date('Y-m-d\TH:i:s', strtotime($info->event_end_date)),
				'allDay' => FALSE,  
				'info' => $info,
			);
		}
		return $formatted;
	}

	public function get_info($id) {
		$event_query = $this->db->get_where('events', array('event_id' => $id));
		$event = $event_query->row();

		$info_query = $this->db->get_where('event_info', 
			array('event_event_id' => $id));
		$info = $info_query->row();

		$account_query = $this->db->get_where('accounts', 
			array('account_id' => $event->accounts_account_id));
		$account = $account_query->row();
		
		$event->info = $info;
		$event->account = $account;
		
		return $event;
	}

	public function reported() {
		$query = $this->db->get_where('events', array('status' => 0));
		$events = $query->result_array();

		return $events;
	}
}