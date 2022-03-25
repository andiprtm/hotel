<?php

class tipekamar extends CI_Controller{
    public function  __construct()
    {
        parent::__construct();
        $this->load->model('Mod_tipekamar', 'MTK');
    }
    public function index()
    {
        $data = [
            'title' => 'OYO | Transaksi',
            'judul' => 'Transaksi',
            'subjudul' => 'Reservasi',
            'breadcrumb1' => 'Transaksi',
            'datatipekamar'=> $this->MTK->AmbilAll()->result()
            
        ];
        $this->template->load('admin/template','admin/tipekamar/index',$data);
    }
    public function add(){
        $this->form_validation->set_rules('tipekamar','Tipe Kamar','required');
        $this->form_validation->set_message('required','{field} tidak boleh kosong!');
        if($this->form_validation->run() == false){
            $data = [
                'title' => 'OYO | Master Data',
                'judul' => 'Master Data',
                'subjudul' => 'Add Tipe Kamar',
                'breadcrumb1' => 'Master Data',
            ];
            $this->template->load('admin/template','admin/tipekamar/add',$data);

        }else{
            $data = [
                'tipekamar' => $this->input->post('tipekamar',TRUE)
            ];
            $this->MTK->Simpan($data);
            $this->session->set_flashdata('pesan','Data berhasil disimpan!');
            redirect('admin/tipekamar','refresh');
        }
    }
}