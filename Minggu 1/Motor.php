<?php
    class kendaraan {
        public $jumlahRoda;
        public $jeniskendaraan;
        public $bahanBakar;
        public $harga;
        public $merek;
        public $tahunPembuatan;

        public function statusSubsidi($bahanBakar, $tahunPembuatan) {
            if ($bahanBakar == 'Premium' && $tahunPembuatan < 2005) {
                return "Ya";
            }
            else {
                return "Tidak"; 
            }
        }

        public function hargaSecond($tahunPembuatan, $harga) {
            if ($tahunPembuatan > 2010){
                return $harga - ($harga * (20/100));
            }
            else if ($tahunPembuatan > 2005){
                return $harga - ($harga * (30/100));
            }
            else if ($tahunPembuatan < 2005){
                return $harga - ($harga * (40/100));
            }      
        }

    }
    $mobil = new kendaraan();
    $motor = new kendaraan();

    $mobil -> bahanBakar = "solar";
    $mobil -> tahunPembuatan = 2010;
    $motor -> bahanBakar = "Premium";
    $motor -> tahunPembuatan = 2010;

    echo $mobil -> statusSubsidi ($mobil ->bahanBakar, $mobil ->tahunPembuatan);
    echo "<br/>";
    echo $mobil -> statusSubsidi ($mobil ->bahanBakar, $mobil ->tahunPembuatan);
    echo "<br/>";

    $mobil -> tahunPembuatan = 2017;
    $mobil -> harga = 21000000;

    echo $mobil -> hargaSecond ($mobil ->tahunPembuatan, $mobil ->harga);


?> 