<?php
class Event_info_model extends CI_Model {
	
	public function __construct() {
		$this->load->database();
	}

	public function get($id=NULL) {
		if($id==NULL) {
			$query = $this->db->get('event_info');
			return $query->result_array();
		}
		$query = $this->db->get_where('event_info', array('id' => $id));
		return $query->row();
	}

	public function get_event($id) {
		$query = $this->db->get_where('event_info', array('event_event_id' => $id));
		return $query->row();
	}

}