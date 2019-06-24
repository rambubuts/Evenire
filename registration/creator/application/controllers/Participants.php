<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participants extends CI_Controller {
    public function index(){
        $this->load->model("Event_model");
        $data['data']= $this->Event_model->displayParticipantRecords();

        $this->load->view('templates/header');
        $this->load->view('pages/participant', $data);
        $this->load->view('templates/footer');
    }
}
?>
