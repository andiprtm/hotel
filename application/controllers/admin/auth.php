<?php

class auth extends CI_Controller{
    public function index(){
        $this->load->view('admin/login');
    }
    public function cek(){
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_message('required','{field} tidak boleh kosong!');

        if($this->form_validation->run()==FALSE){
            $this->load->view('admin/login');
        }else{
            $this->db->where('username', $this->input->post('username'));
            $this->db->where('password', $this->input->post('password'));
            $hasil = $this->db->get('users');
            if($hasil->row_array()>0){
                foreach($hasil->result() as $ketemu){
                    $session_data = array (
                        'username' => $ketemu->username,
                        'role' => $ketemu->role,
                        'nama' => $ketemu->namausers,
                    );
                    $this->session->set_userdata($session_data);
                }
               
                $data = [
                    'title' => 'dashboard',
                    'judul'=> 'dashboard',
                    'breadcrumb1' => 'dashboard',
                ];
                redirect('admin/dashboard', $data);
            }else{
                $this->session->set_flashdata('pesan','<div class="alert alert-warning"> username atau password tidak ditemukan! </div>');
                redirect('admin/auth');
            }
            


        }
    }
}