<?php

class dashboard extends CI_Controller{
    public function index(){
        
        $data = [
            'title' => 'OYO | Dashboard',
            'judul' => 'Dashboard',
            'subjudul' => 'Dashboard',
            'breadcrumb1' => 'Dashboard',
            
        ];
        $this->template->load('admin/template','admin/dashboard/index',$data);
    }
}