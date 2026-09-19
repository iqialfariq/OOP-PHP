<?php
    // Pertemuan3 - Belajar Membuat Constructor

    // Studi Kasus Produk

    class Produk {
        // Cara membuat property
        public $judul, $penulis, $penerbit, $harga;

        // Cara membuat constructor
        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }
        
        // Cara membuat method
        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }
    }

    class cetakInfoProduk {
        // Cara membuat method
        public function cetak(Produk $produk) {
            $str = "{$produk->judul}, {$produk->getLabel()}, (Rp{$produk->harga})";
            return $str;
        }
    }

    // Membuat object dengan cara constructor
    $produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
    $produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer Entertainment", 25000);

    echo "Komik: " . $produk1->getLabel();
    echo "<br>";
    echo "Game: " . $produk2->getLabel();
    echo "<br>";
    echo "<br>";

    $infoProduk1 = new cetakInfoProduk();
    echo $infoProduk1->cetak($produk1);
?>