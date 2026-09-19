<?php
    class Game extends Produk implements infoProduk {
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
        public function getInfo() {
            // Ambil data dari constructor
            $str = "{$this->judul}, {$this->getLabel()}, ( Rp{$this->harga} )";
            return $str;
        }

        // Cara membuat method
        public function getInfoProduk() {
            // Ambil data dari constructor
            $str = "Game: " . $this->getInfo() . " - {$this->waktuMain} Jam";
            return $str;
        }
    }
?>