<?php
    class Komik extends Produk implements infoProduk {
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
        public function getInfo() {
            // Ambil data dari constructor
            $str = "{$this->judul}, {$this->getLabel()}, ( Rp{$this->harga} )";
            return $str;
        }

        // Cara membuat method
        public function getInfoProduk() {
            // Ambil data dari constructor
            $str = "Komik: " . $this->getInfo() . " - {$this->jmlHalaman} Halaman";
            return $str;
        }
    }
?>