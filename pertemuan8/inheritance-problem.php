<?php
    // Pertemuan4 - Belajar Membuat Inheritance

    // Studi Kasus Produk

    class Produk {
        // Cara membuat property
        public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain , $type;

        // Cara membuat constructor
        public function __construct(
            $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", 
            $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $type = "Produk") {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
            $this->type = $type;
        }
        
        // Cara membuat method
        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        // Cara membuat method
        public function getInfoLengkap() {
            // Ambil data dari constructor
            $str = "{$this->type}: {$this->judul}, {$this->getLabel()}, ( Rp{$this->harga} )";

            // Cek apakah string sudah sesuai kondisi method
            if($this->type == "Komik") {
                $str .= " - {$this->jmlHalaman} Halaman";
            } else if($this->type == "Game") {
                $str .= " - {$this->waktuMain} Jam";
            }

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
    $produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 200, 0, "Komik");
    $produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer Entertainment", 25000, 0, 45, "Game");

    echo $produk1->getInfoLengkap();
    echo "<br>";
    echo $produk2->getInfoLengkap();
?>