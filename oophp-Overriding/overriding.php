<?php

class Produk {
	public $judul, 
			$penulis, 
			$penerbit, 
			$harga,
			$jmlHalaman;

	public function __construct($judul = "judu;", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0, $tipe) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel() {
		return "$this->$penulis, $this->$penerbit";
	}

	public function getInfoProduk() {
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
			return $str;
	} 

}


class Komik extend Produk {
	public $jmlHalaman;

	public --__construct( $judul = "judul", $penulis = "penulis", $penerbit = penerbit, $harga = 0, $jmlHalaman = 0 ) {

		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfoProduk() {
		$str = "Komik : ". parent::getInfoProduk() . " {$this->getInfoProduk()} - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk {
	public $waktuMain;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = penerbit, $harga = 0, $waktuMain = 0 ) {
		parent::__construct( $judul, $penulis, $penerbit, $harga );

		$this->waktuMain = $waktuMain;
	}

	public function getInfoProduk() {
		$str = "Game : " . parent::getInfoProduk() . " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
		return $str;
	}
}

class CetakInfoProduk {
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str
	}
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 0, "Komik");
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 2500000, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();



