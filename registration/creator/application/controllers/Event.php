<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
    
	public function __construct(){
		parent:: __construct();
		$this->load->library('session');
    }
    
    public function index(){
        $this->load->model("Event_model");
        $data['data']= $this->Event_model->displayrecords();
        $data['info']= $this->Event_model->displayEventInfo();

        $this->load->view('templates/header');
        $this->load->view('pages/event', $data);
        $this->load->view('templates/footer');
    }

    public function form_validation()
    {
        $user = $this->session->userdata('user'); 
        /*Insert Event Table*/
        $this->load->library('form_validation');
        $this->form_validation->set_rules("title", "Event Title", 'required|alpha');
        $this->form_validation->set_rules("type", "Type", 'required|alpha');
        $this->form_validation->set_rules("category", "Category", 'required|alpha');

        /*Insert Event Info Table*/
        $this->form_validation->set_rules("location", "Location", 'required|alpha');
        $this->form_validation->set_rules("s_date", "Event Start", 'required|alpha');
        $this->form_validation->set_rules("s_time", "Starts Time", 'required|alpha');
        $this->form_validation->set_rules("e_date", "Event Ends", 'required|alpha');
        $this->form_validation->set_rules("e_time", "End Time", 'required|alpha');
        $this->form_validation->set_rules("setting", "Event Setting", 'required|alpha');
        $this->form_validation->set_rules("description", "Event Description", 'required|alpha');
        $this->form_validation->set_rules("attendees", "Event Attendees", 'required|alpha');

        /*Insert Event Img Table*/
        $this->form_validation->set_rules("file_image", "Image Filename", 'required|alpha');

        /*Insert Event Programs Table*/
        $this->form_validation->set_rules("topics", "Event Topics", 'required|alpha');
        $this->form_validation->set_rules("handle", "Event Handle", 'required|alpha');
        $this->form_validation->set_rules("time_sched", "Schedule", 'required|alpha');

        /*Insert Event Bundle Table*/
        $this->form_validation->set_rules("bundle_type", "Event Bundle", 'required|alpha');
        $this->form_validation->set_rules("bundle_desc", "Bundld Description", 'required|alpha');

        if($this->form_validation->run() === FALSE)
        {
            //true
            $this->load->model("event_model");
            $event_data = array(
                "event_title"           =>$this->input->post("title"),
                "event_type"            =>$this->input->post("type"),
                "event_category"        =>$this->input->post("category"),
                "accounts_account_id"   =>$user->account_id,
                "status"                =>"0"
            );

            $result = $this->event_model->insert_event_data($event_data);

            $event_info_data = array(
                "event_location"            =>$this->input->post("location"),
                "event_started_date"        =>$this->input->post("s_date"),
                "event_end_date"            =>$this->input->post("e_date"),
                "event_start_time"          =>$this->input->post("s_time"),
                "event_end_time"            =>$this->input->post("e_time"),
                "event_setting"             =>$this->input->post("setting"),
                "event_description"         =>$this->input->post("description"),
                "event_attendees"           =>$this->input->post("attendees"),
                "event_event_id"            =>$result,
                "event_accounts_account_id" =>$user->account_id

            );

            $event_img_data = array(
                "event_img"                 =>$this->input->post("file_image"),
                "event_event_id"            =>$result,
                "event_accounts_account_id" =>$user->account_id
            );

            $event_program_data = array(
                "event_program_topic"       =>$this->input->post("topics"),
                "event_handle"              =>$this->input->post("handle"),
                "event_handle_sched"        =>$this->input->post("time_sched"),
                "event_event_id"            =>$result,
                "event_accounts_account_id" =>$user->account_id

            );

            $event_bundle_data = array(
                "event_bundle_type"        =>$this->input->post("bundle_type"),
                "event_bundle_description" =>$this->input->post("bundle_desc"),
                "event_event_id"            =>$result,
                "event_accounts_account_id" =>$user->account_id
            );
            $this->event_model->insert_event_info_data($event_info_data);
            $this->event_model->insert_event_img_data($event_img_data);
            $this->event_model->insert_event_program_data($event_program_data);
            $this->event_model->insert_event_bundle_data($event_bundle_data);
            redirect(base_url() . "event/index");
            /*echo $result;*/
        }
        else{
            $this->load->view('templates/header');
            $this->load->view("pages/event");
            $this->load->view('templates/footer');

        }
    }

    public function inserted(){
        $this->load->view('templates/header');
        $this->load->view("pages/event");
        $this->load->view('templates/footer');
    }

    public function viewEvents(){
        /*$this->load->model("Event_model");*/
        /*$event_id = $this->input->post('eventID');
        if(isset($event_id) and !empty($event_id)){
            $event_records = $this->Event_model->displayEventRecords($event_id);
            $output = '';
            foreach ($event_records->result_array() as $row) {
                $output .='
            }

        }*/
    }
}
?>
