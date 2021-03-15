<?php 

	class Tablet
	{
		public $merk;
		private $camera;
		protected $memory='300GB';

		public function camera($tes)
		{
			$camera=$this-> camera=$tes;
			return "dengan kualitas Kamera <b>".$camera."</b>";
		}
	}

	class handphone extends Tablet
	{
		private $handphone_baru;

		public function beli_handphone()
		{
			$merk=$this -> merk;
			$memory=$this -> memory;
			$handphone_baru=$this -> handphone_baru = "Beli Hp Baru Merek <b>".$merk."</b> , dengan jumlah memory <b>".$memory."</b>";
			return $handphone_baru;

		}
	}

	$test=new handphone();
	$test-> merk='samsung';
	$camera=$test-> camera('18 MP');
	$coba=$test-> beli_handphone();
	echo $coba.' '.$camera;
 ?>