<?php

class Produk {
	public $judul, 
			$penulis, 
			$penerbit, 
			$harga;

	public function __construct($judul = "judu;", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel() {
		return "$this->$penulis, $this->$penerbit";
	}

}

//$produk1 = new Produk();
//$produk1 -> judul = "Naruto";
//var_dump($produk1);

//$produk2 = new Produk();
//$produk2 -> judul = "Uncharted";
//$produk2 -> tambahProperty = "haha"
//var_dump($produk2); 

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 2500000);
$produk3 = new Produk("Dragon Ball")


echo "Komik : " . $produk3->getLabel();
echo "<br>"
echo "Game : " . $produk4->getLabel();
echo "<br>"
var_dump($produk3);