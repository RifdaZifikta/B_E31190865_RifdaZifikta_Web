<?php
// buat class laptop
class laptop {
	function restart(){
	}
   // buat property untuk class laptop
   private $pemilik="Anto";
   private $merk="Acer";
  
   // buat method untuk class laptop
   public function matikan_laptop($pemilik,$merk) {
     return "Matikan Laptop $merk punya $pemilik";
   }
  
   public function hidupkan_laptop_anto() {
     return "Hidupkan Laptop $this->merk punya $this->pemilik";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_andi= new laptop();
 
echo $laptop_andi->matikan_laptop("Andi", "Lenovo"); echo "<br \>";
// hasil: "Matikan Laptop Lenovo punya Andi". 
  
echo $laptop_andi->hidupkan_laptop_anto(); echo "<br \>";
// hasil: "Hidupkan Laptop Acer punya Anto";
?>