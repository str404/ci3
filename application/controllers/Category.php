<?php
    
    class Category extends CI_Controller {
        function __construct(){
        parent::__construct();      
        $this->load->helper('url','form');
         $this->load->model('Category_model');
    }

   //  public function index()
   // {
   //   $this->load->helper('url','form');
   //  $this->load->model('Category_model');

   //      // Judul Halaman
   //      $data['page_title'] = 'List Kategori';

   //      // Dapatkan semua kategori
   //      $data['categories'] = $this->Category_model->get_all_categories();

   //      $this->load->view('category_view', $data);
   //  }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Category_model');
        // Judul Halaman
       $data['page_title'] = 'Buat Kategori';

        // Form validasi untuk Nama Kategori
        $this->form_validation->set_rules(
            'nama',
            'Nama Kategori',
            'required|is_unique[categories.nama]',
            array(
                'required' => ' Nama Harus diisi.',
                'is_unique' => 'nama ' . $this->input->post('nama') . ' sudah ada.'
            )
        );

        $this->form_validation->set_rules(
            'deskripsi',
            'deskripsi kategori',
            'required|is_unique[categories.deskripsi]',
            array(
                'required' => ' deskripsi Harus diisi.',
                'is_unique' => 'deskripsi ' . $this->input->post('deskripsi') . ' sudah ada.'
            )
        );

        if($this->form_validation->run() == false){
            $this->load->view('category_create', $data);
        } else {
            $this->Category_model->create_category();
            redirect('Category/create');
        }
    }

     public function index(){

            $this->load->model('Category_model');

            $x['data']=$this->Category_model->show_barang();

            $this->load->view('category_view',$x);



        // $data['page_title'] = 'List Artikel';
        
    //     // Dapatkan data dari model Blog dengan pagination
    //     // Jumlah artikel per halaman
    //     $limit_per_page = 6; 
    //     // URI segment untuk mendeteksi "halaman ke berapa" dari URL
    //     $start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

    //     // Dapatkan jumlah data
    //     $total_records = $this->Category_model->get_total();

    //     if ($total_records > 0) {
    // // Dapatkan data pada halaman yg dituju
    // $data["all_categories"] = $this->Category_model->get_all_categories($limit_per_page, 
    // $start_index);
    
    // // Konfigurasi pagination
    // $config['base_url'] = base_url() . 'Category/index';
    // $config['total_rows'] = $total_records;
    // $config['per_page'] = $limit_per_page;
    // $config["uri_segment"] = 3;
    
    // $this->pagination->initialize($config);
        
    // // Buat link pagination
    // $data["links"] = $this->pagination->create_links();

      //   }
       }

    function edit($id){
    $where = array('id_kategori' => $id);
    $x['data'] = $this->Category_model->edit_data($where,'categories')->result();
    $this->load->view('category_edit',$x);
}

function update(){
    $id = $this->input->post('id_kategori');
    $nama = $this->input->post('nama');
    $deskripsi = $this->input->post('deskripsi');

    $data = array(
        'nama' => $nama,
        'deskripsi' => $deskripsi
    );

    $where = array(
        'id_kategori' => $id
    );

    $this->Category_model->update_data($where,$data,'categories');
    redirect('Category');
}

function hapus($id){
        $where = array('id_kategori' => $id);
        $this->Category_model->hapus_data($where,'categories');
        redirect('category');
    }
}

?>

