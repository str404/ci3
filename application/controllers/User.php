<?php
class User extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
                
        $this->load->library('form_validation');
        $this->load->helper('MY');
        $this->load->model('user_model');
    }

        // Register user
    public function register(){
        $data['page_title'] = 'Pendaftaran User';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]');

if($this->form_validation->run() === FALSE){
            $this->load->view('register', $data);
        } else {
            // Encrypt password
            $enc_password = md5($this->input->post('password'));

            $this->user_model->register($enc_password);

            // Tampilkan pesan
            $this->session->set_flashdata('user_registered', 'Anda telah teregistrasi.');

            redirect('User/login');
        }

    }

        // Log in user
    public function login(){
        $data['page_title'] = 'Log In';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('login', $data);
        } else {

        // Get username
    $username = $this->input->post('username');
    // Get & encrypt password
    $password = md5($this->input->post('password'));

    // Login user
    $user_id = $this->user_model->login($username, $password);

    if($user_id){
        // Buat session
        $user_data = array(
            'user_id' => $user_id,
            'username' => $username,
            'logged_in' => true,
            'level' => $this->user_model->get_user_level($user_id)

        );

    $this->session->set_userdata($user_data);

        // Set message
        $this->session->set_flashdata('user_loggedin', 'Selamat Datang'. $username );

        redirect('user/dashboard');
    } else {
        // Set message
        $this->session->set_flashdata('login_failed', 'Login is invalid');

        redirect('user/login');
    }       
}

}
	
	public function logout(){
        // Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');

        // Set message
        $this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

        redirect('user/login');
    }

        // Dashboard
    public function dashboard(){

        if(!$this->session->userdata('logged_in')){
            redirect('user/login');
        }

        $username = $this->session->userdata('username');

        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details( $username );

        // Load dashboard
        $this->load->view('dashboard', $data);
    }


}


?>