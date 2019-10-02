<?php

class Produk {
	public $judul, 
			$penulis, 
			$penerbit,
			$harga;

	public function __construct($judul = "judu;", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0, $tipe) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function setJudul( $judul){
        if (!is_string($judul) ){
            throw new Exception("Judul Harus String");
        }
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit=$penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);   
   }

	public function getLabel() {
		return "$this->$penulis, $this->$penerbit";
	}

	public function getInfoProduk() {
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
			return $str;
	} 

	public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }

}

class Komik extend Produk {
	public function getInfoProduk() {
		$str = "Komik : ". parent::getinfoProduk() . " {$this->getinfoProduk()} - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk {
	public function getInfoProduk() {
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
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setJudul("JudulBaru");
echo $produk1->getJudul();

?>


