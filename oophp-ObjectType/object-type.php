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

class CetakInfoProduk {
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str
	}
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 2500000);

echo "Komik : " . $produk3->getLabel();
echo "<br>"
echo "Game : " . $produk4->getLabel();
echo "<br>"

$infoProduk = new CetakInfoProduk();
echo $infoProduk->cetak($produk1)