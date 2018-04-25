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
	public function view(){
		$data['blog'] = $this->blog_data->get_data_by_id($id);
		$this->load->view('Blog', $data);
	}

	public function create(){
		$this->load->view('form');
	}

	public function create_action(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('tanggal','Tanggal','required');
		$this->form_validation->set_rules('author','Author','required');
		$this->form_validation->set_rules('konten','Konten','required');

		if ($this->form_validation->run()==false) {
			$this->load->view('form');
		}else{
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

	function edit($id){
	$where = array('id' => $id);
	$data['blog'] = $this->blog_data->edit_data($where,'blog')->result();
	$this->load->view('edit',$data);
}

function update(){
	$id = $this->input->post('id');
	$judul = $this->input->post('judul');
	$tanggal = $this->input->post('tanggal');
	$author = $this->input->post('author');
	$konten = $this->input->post('konten');

	$data = array(
		'judul' => $judul,
		'tanggal' => $tanggal,
		'author' => $author,
		'konten' => $konten
	);

	$where = array(
		'id' => $id
	);

	$this->blog_data->update_data($where,$data,'blog');
	redirect('Blog/index');
}

function hapus($id){
		$where = array('id' => $id);
		$this->blog_data->hapus_data($where,'blog');
		redirect('Blog/index');
	}

}
?>
