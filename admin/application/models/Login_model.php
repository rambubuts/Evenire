<?php
class Login_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function login($data) {
        $query = $this->db->get_where('login', $data);
        $login = $query->row();

        $query = $this->db->get_where('accounts', array('account_id' => $login->accounts_account_id));
        $account = $query->row();
        if ($query->num_rows() == 1) {
            return $account;
        } else {
            return false;
        }
    }
}
