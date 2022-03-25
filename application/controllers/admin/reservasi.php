<?php

class reservasi extends CI_Controller{
    public function  __construct()
    {
        parent::__construct();
        $this->load->model('Mod_reservasi', 'MR');
    }
    public function index()
    {
        $data = [
            'title' => 'OYO | Transaksi',
            'judul' => 'Transaksi',
            'subjudul' => 'Reservasi',
            'breadcrumb1' => 'Transaksi',
            'datareservasi'=> $this->MR->AmbilDataReservasi()->result()
            
        ];
        $this->template->load('admin/template','admin/reservasi/index',$data);
    }
    public function add(){
        $this->form_validation->set_rules('startdate','Tanggal','required');
        $this->form_validation->set_message('required','{field} tidak boleh kosong!');
        if($this->form_validation->run() == false){
            $data = [
                'title' => 'OYO | Master Data',
                'judul' => 'Master Data',
                'subjudul' => 'Add Tipe Kamar',
                'breadcrumb1' => 'Master Data',
            ];
            $this->template->load('admin/template','admin/reservasi/add',$data);

        }else{
            $data = [
                'startdate' => $this->input->post('startdate',TRUE)
            ];
            $this->MR->Simpan($data);
            $this->session->set_flashdata('pesan','Data berhasil disimpan!');
            redirect('admin/reservasi','refresh');
        }
    }
}