<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
        parent::__construct();
                
        $this->load->library('form_validation');
        $this->load->helper('MY');
        $this->load->model('user_model');
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function hello()
	{
		$this->load->view('hello');
	}

	public function mymethod()
	{
		$this->load->view('madura');
	}
	public function bootstrap(){
		$this->load->view('home');
	}
	public function Tugas(){
		$user_id = $this->session->userdata('level');

        // Dapatkan detail user
         $data['level'] = $this->user_model->get_user_level( $user_id );
            $this->load->view('Web_Pribadi', $data);
	}


}
