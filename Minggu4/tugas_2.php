<?php 

	class Item
	{
		private $item;

		public function Ukuran($item)
		{
			$ukuran = $this -> item = $item;
			return "Ukuran : ".$ukuran."<br>";
		}

		public function Warna($item)
		{
			$warna = $this -> item = $item;
			return "Warna : ".$warna."<br>";
		}

		public function Nama($item)
		{
			$Nama = $this -> item = $item;
			return "Nama : ".$Nama."<br>";
		}
	}

	class Topi extends item
	{
		private $model='Koboy';

		public function modelTopi()
		{
			$model= $this -> model;
			return "Model : ".$model."<br>";
		}
	}

	class Celana extends item
	{
		private $tipe='Panjang';
		private $model='Jeans';

		public function tipeCelana()
		{
			$tipe= $this -> tipe;
			return "Model : ".$tipe."<br>";
		}

		public function modelCelana()
		{
			$model= $this -> model;
			return "Model : ".$model."<br>";
		}
	}

	class Baju extends item
	{
		private $tipe="Kaos";

		public function Tipebaju()
		{
			$tipe= $this -> tipe;
			return "Model : ".$tipe."<br>";
		}
	}

	$Topi = new Topi();
	$Celana = new Topi();
	$Baju = new Baju();

	$baju = $Baju-> Tipebaju();
	$nama = $Baju-> Nama('Nevada');
	$warna = $Baju-> Warna('Merah');
	$ukuran = $Baju-> Ukuran('XL');

	echo "<h3>Produk Baju</h3>";
	echo $baju;
	echo $nama;
	echo $warna;
	echo $ukuran;
 ?>