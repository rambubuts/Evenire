<?php
class Event_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    function insert_event_data($event_data){
        $this->db->insert("events", $event_data);
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

    function insert_event_info_data($event_data){
        $this->db->insert("event_info", $event_data);

    }

    function insert_event_img_data($event_data){
        $this->db->insert("event_img", $event_data);
    }

    function insert_event_program_data($event_data){
        $this->db->insert("event_program", $event_data);
    }

    function insert_event_bundle_data($event_data){
        $this->db->insert("event_bundle", $event_data);
    }

    function displayrecords() {
        $query = $this->db->order_by('status', 'ASC')->get('events');
        return $query->result();
    }

    function displayParticipantRecords() {
        $query = $this->db->get_where('accounts', array('account_type' => 2));
        return $query->result();
    }

    function displayEventInfo($id=NULL){
        if ($id==NULL) {
            $query = $this->db->get('events');
            return $query->result();
        }
        $query = $this->db->get_where('event_info', array('event_event_id' => $id));
        return $query->row();
    }
}
