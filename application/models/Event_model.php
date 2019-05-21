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
		$query = $this->db->get_where('events', array('paid' => 1, 'active' => 1));

		$formatted = array();
		foreach($query->result_array() as $entry) {
			$formatted[] = array(
				'id' => $entry['id'],
				'title' => $entry['name'],
				'start' => date('Y-m-d\TH:i:s', strtotime($entry['start_date'])),
				'end' => $entry['end_date'],
				'allDay' => FALSE,  
			);
		}
		return $formatted;
	}
}