<?php 
	
	class mobilLengkap 
	{
		private $aksi1;
		private $aksi2;
		private $aksi3;

		public function nontonTv(){
			$aksi1=$this -> aksi1 = "Tv Dihidupkan";
			$aksi2=$this -> aksi2 = "Tv Mencari Chanel";
			$aksi3=$this -> aksi3 = "Tv Menampilkan Gambar";
			return "Keterangan : <br>".$aksi1."<br>".$aksi2."<br>".$aksi3."<br>";
		}

		public function radio(){
			$aksi1=$this -> aksi1 = "Radio Dihidupkan";
			$aksi2=$this -> aksi2 = "Radio Mencari Chanel";
			$aksi3=$this -> aksi3 = "Radio Mengeluarkan Suara";
			return "Keterangan : <br>".$aksi1."<br>".$aksi2."<br>".$aksi3."<br>";
		}
	}

	class MobilMBWberaksi
	{
		private $aksi1;

		public function nontonTv(){
			$aksi1=$this -> aksi1 = "Tv Dihidupkan";
			$aksi2=$this -> aksi2 = "Tv Mencari Chanel";
			$aksi3=$this -> aksi3 = "Tv Menampilkan Gambar";
			return "Keterangan : <br>".$aksi1."<br>".$aksi2."<br>".$aksi3."<br>";
		}

		public function HidupkanMobil(){
			$aksi1=$this -> aksi1 = "Mobil Dihidupkan";
			return "Keterangan : <br>".$aksi1."<br>";
		}
		public function MatikanMobil(){
			$aksi1=$this -> aksi1 = "Mobil Mati";
			return "Keterangan : <br>".$aksi1."<br>";
		}
		public function ubahGigi(){
			$aksi1=$this -> aksi1 = "Masuk";
			return "Keterangan : <br>".$aksi1."<br>";
		}
	}

	class MobilBMW extends mobilLengkap
	{
		
	}
	// panggil inherit dan panggil method dari class induknya
	$tes1=new MobilBMW();
	$tv=$tes1 -> nontonTv();
	echo $tv;

	// panggil class MobilBMWberaksi
	$tes2=new MobilMBWberaksi();
	$on=$tes2 -> HidupkanMobil();
	$off=$tes2 -> MatikanMobil();
	$turn=$tes2 -> ubahGigi();
	echo $on;
	echo $off;
	echo $turn;
 ?>