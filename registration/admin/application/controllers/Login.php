<?php
    /*session_start();*/
    class Login extends CI_Controller{

        public function __construct(){
            parent:: __construct();
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function view(){
            $this->load->view('pages/login');
        }

        public function user_login(){
            $this->load->model("login_model");
            $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
            $this->form_validation->set_rules('pass', 'Password', 'trim|required|xss_clean');

            if($this->form_validation->run() == TRUE){
                if(isset($this->session->userdata['logged_in'])){
                    $this->load->view('pages/index');
                }else{
                    $this->load->view('pages/index');
                }
            } else {
                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('pass')
                );
                $result = $this->login_model->login($data);
                if (!$result) {                    
                    echo "Invalid Username or Password";
                    return;
                }
                // Add user data in session
                $this->session->set_userdata('user', $result);

                $this->load->view('templates/header');
                $this->load->view('pages/index');
                $this->load->view('templates/footer');
            }
        }
        public function logout() {
        // Removing session data
            /*$sess_array = array(
                'username' => ''
            );
            $this->session->unset_userdata('logged_in', $sess_array);
            $data['message_display'] = 'Successfully Logout';*/
            $this->session->sess_destroy();
            redirect('/registration/creator');
        }
    }


  ?>
