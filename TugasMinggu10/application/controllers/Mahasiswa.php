<?php
class Mahasiswa extends CI_Controller {
function __construct(){
	parent:: __construct();//berfungsi untuk menjalankan file pertama kali ketika dipanggil
	$this->load->model('Mahasiswa_model'); //berfungsi untuk memanggil file mahasiswa_model
}
public function index(){
$data['user'] = $this->Mahasiswa_model->getAll()->result(); //berfungsi untuk memanggil data dari database melalui file mahasiswa_model
$this->template->views('crud/home_mahasiswa',$data);//berfungsi untuk menampilkan view home_mahasiswa
}
public function tambah(){
$this->template->views('crud/tambah_mahasiswa');//berfungsi untuk menampilkan view tambah_mahasiswa
}
public function input(){
	$username = $this->input->post('username');//berfungsi untuk menambahkan data ke field username
	$password = $this->input->post('pass');//berfungsi untuk menambahkan data ke field password
	$nama = $this->input->post('nama');//berfungsi untuk menambahkan data ke field nama
	$grup = $this->input->post('grup');//berfungsi untuk menambahkan data ke field grup

	$data = array(
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup
	);
	$this->Mahasiswa_model->input_data($data, 'tm_user');//berfungsi untuk memproses data melalui file mahasiswa_model di method input_data
	redirect('Mahasiswa/index');//berfungsi untuk kembali ke tampilan home_mahasiswa
}
}
?>