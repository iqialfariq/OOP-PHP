<?php
    abstract class Produk {
        // Cara membuat property
        protected $judul, $penulis, $penerbit, $harga, $diskon = 0;

        // Cara membuat constructor
        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        // Cara membuat method
        public function setJudul($judul) {
            $this->judul = $judul;
        }

        // Cara membuat method
        public function getJudul() {
            return $this->judul;
        }

        // Cara membuat method
        public function setPenulis($penulis) {
            $this->penulis = $penulis;
        }

        // Cara membuat method
        public function getPenulis() {
            return $this->penulis;
        }

        // Cara membuat method
        public function setPenerbit($penerbit) {
            $this->penerbit = $penerbit;
        }

        // Cara membuat method
        public function getPenerbit() {
            return $this->penerbit;
        }

        // Cara membuat method
        public function setDiskon($diskon) {
            $this->diskon = $diskon;
        }

        // Cara membuat method
        public function getDiskon() {
            return $this->diskon;
        }

        // Cara membuat method
        public function setHarga($harga) {
            $this->harga = $harga;
        }

        // Cara membuat method
        public function getHarga() {
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        // Cara membuat method
        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }
        
        // Cara membuat method abstract
        abstract public function getinfo();


        // DI PINDAH KAN KE CHILD CLASS KOMIK DAN GAME
        // public function getInfo() {
        //     // Ambil data dari constructor
        //     $str = "{$this->judul}, {$this->getLabel()}, ( Rp{$this->harga} )";
        //     return $str;
        // }
    }
?>