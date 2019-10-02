<?php

class Produk {
	public $judul, 
			$penulis, 
			$penerbit, 
			$harga,
			$jmlHalaman,
			$waktuMain,
			$tipe;

	public function __construct($judul = "judu;", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0, $tipe) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}

	public function getLabel() {
		return "$this->$penulis, $this->$penerbit";
	}

	public function getinfoProduk() {
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";


			return $str;
	} 

}


class Komik extend Produk {
	public function getinfoProduk() {
		$str = "Komik : {$this->getinfoProduk()} - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk {
	public function getinfoProduk() {
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
		return $str;
	}
}

class CetakInfoProduk {
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str
	}
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 2500000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();



