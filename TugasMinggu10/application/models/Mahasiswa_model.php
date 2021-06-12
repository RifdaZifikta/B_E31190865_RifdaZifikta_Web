<?php 
class Mahasiswa_model extends CI_Model {
public function getAll(){
	$this->db->select('*');// berfungsi untuk mengambil data pada database
	$this->db->from('tm_user');//untuk mengambil data pada tabel user
	$this->db->join('tm_grup','tm_user.grup = tm_grup.id_grup'); //berfungsi untuk melakukan join pada tabel tm_user dengan tm_grup
	$query = $this->db->get(); //berfungsi untuk eksekusi query seperti mysqli_query
	return $query;//berfungsi untuk mengembalikan nilai pada $query
}

public function input_data($data,$table){
	$this->db->insert($table,$data);//berfungsi untuk menambahkan data pada database
}}?>