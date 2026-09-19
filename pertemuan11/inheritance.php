<?php
    // Pertemuan4 - Belajar Membuat Inheritance

    // Studi Kasus Produk

    class Produk {
        // Cara membuat property
        public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain;

        // Cara membuat constructor
        public function __construct(
            $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
        }
        
        // Cara membuat method
        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        // Cara membuat method
        public function getInfoProduk() {
            // Ambil data dari constructor
            $str = "{$this->judul}, {$this->getLabel()}, ( Rp{$this->harga} )";

            return $str;
        }
    }

    // Class khusus Komik
    class Komik extends Produk {
        // Cara membuat method
        public function getInfoProduk() {
            // Ambil data dari constructor
            $str = "Komik: {$this->judul}, {$this->getLabel()}, ( Rp{$this->harga} ) - {$this->jmlHalaman} Halaman";
            return $str;
        }
    }

    // Class khusus Game
    class Game extends Produk {
        // Cara membuat method
        public function getInfoProduk() {
            // Ambil data dari constructor
            $str = "Game: {$this->judul}, {$this->getLabel()}, ( Rp{$this->harga} ) - {$this->waktuMain} Jam";
            return $str;
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
    $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 200, 0);
    $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer Entertainment", 25000, 0, 45);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();
?>