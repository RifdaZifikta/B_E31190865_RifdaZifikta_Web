<?php
class Hello extends CI_Contraller{
	public function index(){
		//c3 - memuat model 'Hello_Model'
		$this -> load ->model(''Hello_Model);

		//pengambilkan objek dari kelas Hello_model dan dimuat di var $model
		$model = $this ->Hello_model;

		//mengambil data dari model
		$a = $model -> txt;

		//membuat data yang akan dikiirm ke view
		$data['teka'] = $a;
		//echo "<h2>Hello World CI</h2>";
		//memanggil file view
		$this -> load -> view ('helloview', $data );//file view
	}
}
?>
