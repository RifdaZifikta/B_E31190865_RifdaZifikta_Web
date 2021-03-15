<?php

interface hitungLuas {
    public function hitungLuasPersegi($sisi);

    public function hitungLuasSegitiga($sisi);

    public function hitungLuasLingkaran($sisi);
}

class Persegi implements hitungLuas {

    public function hitungLuasPersegi($sisi)
    {
        return $sisi * $sisi;
    }

    public function hitungLuasSegitiga($sisi)
    {
        return "Error : Objek bukan segitiga.";
    }

    public function hitungLuasLingkaran($sisi)
    {
        return "Error : Objek bukan Lingkaran";
    }
}

class Segitiga implements hitungLuas {

    public function hitungLuasPersegi($sisi)
    {
        return "Error : Objek bukan persegi";
    }

    public function hitungLuasSegitiga($sisi)
    {
        return (1/2) * $sisi * $sisi;
    }

    public function hitungLuasLingkaran($sisi)
    {
        return "Error : Objek bukan lingkaran";
    }
}

class Lingkaran implements hitungLuas {

    public function hitungLuasPersegi($sisi)
    {
        return "Error : Objek bukan persegi";
    }

    public function hitungLuasSegitiga($sisi)
    {
        return "Error : Objek bukan segitiga";
    }

    public function hitungLuasLingkaran($sisi)
    {
        return $sisi * $sisi * pi();
    }
}

$objek1 = new Persegi();
$objek2 = new Segitiga();
$objek3 = new Lingkaran();

echo "<b>Jika luas sisi = 3</b><hr>";
echo "Luas Persegi = {$objek1->hitungLuasPersegi(3)}";
echo '<br>';
echo "Luas Segitiga = {$objek2->hitungLuasSegitiga(3)}";
echo '<br>';
echo "Luas Lingkaran = {$objek3->hitungLuasLingkaran(3)}";