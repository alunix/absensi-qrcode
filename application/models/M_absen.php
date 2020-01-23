<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_absen extends CI_Model{
//Fungsi untuk menampilkan isi tabel peserta
    function get_absen(){
        return $this->db->get('tb_absen');
    }
  
    
    
    //Fungsi untuk menyimpan nilai dari form ke tabel peserta
    function absen_masuk($data){
        $this->db->insert('tb_absen', $data);
    }
    
    //Fungsi untuk Kode Otomatis
    // function kode(){
    //     $this->db->select('RIGHT(tb_peserta.id_peserta,2) 
    //     as id_peserta', FALSE);
    //     $this->db->order_by('id_peserta','DESC');    
    //     $this->db->limit(1);    
    //     $query = $this->db->get('tb_peserta');  
    //     //cek dulu apakah ada sudah ada kode di tabel.    
    //     if($query->num_rows() <> 0){      
    //     //cek kode jika telah tersedia    
    //         $data = $query->row();      
    //         $kode = intval($data->id_peserta) + 1; 
    //       }
    //     else{      
    //         $kode = 1;  //cek jika kode belum terdapat pada table
    //       }
            
    //         $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);    
    //         $kodetampil = "T".$batas;  //format kode
    //         return $kodetampil;  
    // }

    
    //Fungsi untuk mengambil nilai dari tabel peserta
    // function getEdit_peserta($id){
    //     return $this->db->get_where('tb_peserta', 
    //     array('id_peserta' => $id));      
    // }
    
    //Fungsi untuk mengupdate nilai dari tabel peserta
    function absen_pulang($data, $nama){
        $this->db->update('tb_absen', $data, 
        array('nama' => $nama));
    }   
    
    //Fungsi untuk menghapus isi dari tabel peserta dengan kriteria $id
    // function hapus_peserta($id){
    //     $this->db->where('id_peserta', $id);
    //     $this->db->delete('tb_peserta'); 
    // }
}   
?>
