<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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

	function __construct(){
		parent::__construct();		
		$this->load->model('blog_data');
		$this->load->helper('url','form');
 
	}

	public function index()
	{
		$data['blog'] = $this->blog_data->get_data()->result();
		$this->load->view('Blog',$data);
	}

	public function Bio(){
		$data['blog'] = $this->blog_data->get_data()->result();
		$this->load->view('Blog', $data);
	}

	public function create(){
		$this->load->view('form');
	}

	public function create_action(){
		
		$config['upload_path']          = 'assets/gambar/upload';
        $config['allowed_types']        = 'gif|jpg|png';
        $this->load->library('upload', $config);

        	if ( ! $this->upload->do_upload('userfile'))
        	{
        	        $error = array('error' => $this->upload->display_errors());
        	        print_r($error);
        	}
        	else
        	{
        	        $data = array('upload_data' => $this->upload->data());
        	
		// $id = $this->input->post('id');
		// $judul = $this->input->post('judul');
		// $tanggal = $this->input->post('tanggal');
		// $author= $this->input->post('author');
		// $konten = $this->input->post('konten');
 
		$data = array(
			'judul' => $this->input->post('judul'),
			'tanggal' => $this->input->post('tanggal'),
			'author' => $this->input->post('author'),
			'konten' => $this->input->post('konten'),
			'gambar' => $this->upload->data('file_name')
			);
		$this->blog_data->input_data($data,'blog');
		redirect('Blog/index');
	}
	}


}
?>
