<?php
    class kendaraan {
        var $jumlahRoda;
        var $warna;
        var $bahanBakar;
        var $harga;
        var $merek;
        
        function statusHarga() {
            if (($this->harga > 50000000)) $status = 'Mahal'
            else if $status = 'Murah';
            return $status;        
        }
        
        function setMerek($x) {
            $this->merek = $x;
        }
        
        function setHarga($x) {
            $this->harga = $x;
        }
        
        function setRoda($x) {
            $this->jumlahRoda = $x;
        }
        
        function setWarna($x) {
            $this->warna = $x;
        }
        
        function setbahanBakar($x) {
            $this->bahanBakar = $x;
        }
    }
    
    $kendaraan1 = new kendaraan();
    $kendaraan1->setMerek = 'Honda Supra';
    $kendaraan1->setHarga = 23000000;
    
    $kendaraan2 = new kendaraan();
    $kendaraan2->setMerek = 'Toyota Yaris';
    $kendaraan2->setRoda = 4;
    $kendaraan2->setHarga = 160000000;
    $kendaraan2->setWarna = 'Merah';
    $kendaraan2->setbahanBakar = 'Premium';
 
    $kendaraan3 = new kendaraan();
    $kendaraan3->setMerek = 'Honda Yaris';
    $kendaraan3->setRoda = 2;
    $kendaraan3->setHarga = 13000000;
    $kendaraan3->setWarna = 'Putih';
    $kendaraan3->setbahanBakar = 'Premium';
 
    $kendaraan4 = new kendaraan();
    $kendaraan4->setMerek = 'Toyota Yaris';
    $kendaraan4->setRoda = 4;
    $kendaraan4->setHarga = 170000000;
    $kendaraan4->setWarna = 'Hitam';
    $kendaraan4->setbahanBakar = 'Solar';    
?>