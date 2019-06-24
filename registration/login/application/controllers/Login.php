<?php
    /*session_start();*/
    class Pages extends CI_Controller{

        public function __construct(){
            parent:: __construct();
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function view(){
            $this->load->view('pages/index');
        }

        public function user_login(){
            $this->load->model("login_model");
            $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
            $this->form_validation->set_rules('pass', 'Password', 'trim|required|xss_clean');

            if($this->form_validation->run() == TRUE){
                if(isset($this->session->userdata['logged_in'])){
                    $this->load->view('registration/creator/pages/index');
                }else{
                    $this->load->view('pages/index');
                }
            } else {
                    $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('pass')
                );
                    $result = $this->login_model->login($data);
                if ($result == TRUE) {
                    /*$session_data = array(
                    'username' => $result[1]->username,
                );*/
                    // Add user data in session
                    /*$this->session->set_userdata('logged_in', $session_data);*/
                    $this->load->view('registration/creator/');
                } else {
                    $data = array(
                        'error_message' => 'Invalid Username or Password'
                    );
                }
            }
        }
    }


  ?>
