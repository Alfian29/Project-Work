<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi_Model extends CI_Model {

	public function get_donasi()
	{
		return $data_donasi= $this->db->get('donasi')->result();
	}

	public function masuk_db()
	{
		$data_donasi=array(
            'id_donasi'=>$this->input->post('id_donasi'),
            'nama'=>$this->input->post('nama'),
            'no_telp'=>$this->input->post('no_telp'),
            'email'=>$this->input->post('email'),
            'tanggal'=>$this->input->post('tanggal'),
            'nominal'=>$this->input->post('nominal'),
            'alat_pembayaran'=>$this->input->post('alat_pembayaran')            
		);
		$sql_masuk=$this->db->insert('donasi', $data_donasi);
		return $sql_masuk;
    }
}
?>