<?php
    // Pertemuan2 - Belajar Membuat Constructor

    // Studi Kasus Produk

    class Produk {
        // Cara membuat property
        public $judul, $penulis, $penerbit, $harga;

        // Membuat constructor
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

    // Membuat object dengan cara construnctor
    $produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
    $produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer Entertainment", 25000);
    $produk3 = new Produk("PUBG");

    echo "Komik: " . $produk1->getLabel();
    echo "<br>";
    echo "Game: " . $produk2->getLabel();
    echo "<br>";
    var_dump($produk3);
?>