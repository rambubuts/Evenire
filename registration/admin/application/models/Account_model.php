<?php
class Account_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }

    public function get($id=NULL) {
        if($id==NULL) {
            $query = $this->db->get('accounts');
            return $query->result_array();
        }
        $query = $this->db->get_where('accounts', array('account_id' => $id));
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

        return $this->db->insert('accounts', $data);
    }

    public function get_acc($id) {
        $query = $this->db->get_where('event_info', array('event_event_id' => $id));
        return $query->row();
    }

    public function approve($id) {
        $this->db->set('paid', 1);
        $this->db->where('id', $id);
        $this->db->update('accounts');
    }

    public function activate($id) {
        $this->db->set('account_status', 1);
        $this->db->where('account_id', $id);
        $this->db->update('accounts');
    }

    public function deactivate($id) {
        $this->db->set('account_status', 2);
        $this->db->where('account_id', $id);
        $this->db->update('accounts');

        $this->db->set('status', 0);
        $this->db->where('accounts_account_id', $id);
        $this->db->update('events');
    }

    public function calendar() {
        $query = $this->db->get_where('accounts', array('paid' => 1, 'active' => 1));

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

    public function approved() {
        $this->db->select('*');
        $this->db->from('accounts');
        $this->db->where('account_status =', 1);
        $this->db->or_where('account_status =', 2);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function pending() {
        $query = $this->db->get_where('accounts', array('account_status' => 0));
        return $query->result_array();
    }
}