<?php

class Mod_reservasi extends CI_Model{
    var $tabel = 'reservasi';
    public function Simpan($data){
        $this->db->insert($this->tabel, $data);
    }
    public function Ubah($data,$id){
        $this->db->set($data);
        $this->db->where($id);
        $this->db->update($this->tabel);
    }
    public function Ambil($data){
        $this->db->where($data);
        return $this->db->get($this->tabel);
    }
    public function AmbilAll(){
        $this->db->get($this->tabel);
    }
    public function AmbilDataReservasi(){
        $this->db->select('reservasi.idreservasi, reservasi.startdate, reservasi.qtykamar, reservasi.lama, reservasi.status, tamu.nama, kamar.namakamar');
        $this->db->from($this->tabel);
        $this->db->join('tamu','reservasi.tamuid=tamu.idtamu','left');
        $this->db->join('kamar','reservasi.kamarid=kamar.idkamar','left');
        return $this->db->get();
    }

}