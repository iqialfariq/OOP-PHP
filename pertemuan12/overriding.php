<?php
    // Pertemuan5 - Belajar Membuat Overriding

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

        // Cara membuat method
        public function getInfoProduk() {
            // Ambil data dari constructor
            $str = "{$this->judul}, {$this->getLabel()}, ( Rp{$this->harga} )";

            return $str;
        }
    }

    // Class khusus Komik
    class Komik extends Produk {
        // Cara membuat property uniq
        public $jmlHalaman;

        // Construct method untuk property uniq
        public function __construct(
            $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0) {
            // Jalankan hal yang sama dengan parent nya
            parent::__construct($judul, $penulis, $penerbit, $harga);
            // Akses parent lalu timpah isi nya
            $this->jmlHalaman = $jmlHalaman;
        }

        // Cara membuat method
        public function getInfoProduk() {
            // Ambil data dari constructor
            $str = "Komik: " . parent::getInfoProduk() . ", - {$this->jmlHalaman} Halaman";
            return $str;
        }
    }

    // Class khusus Game
    class Game extends Produk {
        // Cara membuat property uniq
        public $waktuMain;

        // Construct method untuk property uniq
        public function __construct(
            $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0) {
            // Jalankan hal yang sama dengan parent nya
            parent::__construct($judul, $penulis, $penerbit, $harga);
            // Akses parent lalu timpah isi nya
            $this->waktuMain = $waktuMain;
        }

        // Cara membuat method
        public function getInfoProduk() {
            // Ambil data dari constructor
            $str = "Game: " . parent::getInfoProduk() . ", - {$this->waktuMain} Jam";
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
    $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 200);
    $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer Entertainment", 25000, 45);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();
?>