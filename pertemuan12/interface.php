<?php
    // Pertemuan11 - Belajar Membuat Interface

    // Studi Kasus Produk

    interface infoProduk {
        // Cara membuat method
        public function getInfoProduk();
    }

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

    // Class khusus Komik
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

    // Class khusus Game
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

    class cetakInfoProduk {
        // Cara membuat property
        public $daftarProduk = [];

        // Cara membuat method
        public function tambahProduk(Produk $produk) {
            $this->daftarProduk[] = $produk;
        }

        // Cara membuat method
        public function cetak() {
            $str = "DAFTAR PRODUK: <br>";

            // Looping array dengan nilai dari parameter
            foreach ($this->daftarProduk as $produk) {
                $str .= "- {$produk->getInfoProduk()} <br>";
            }

            return $str;
        }
    }

    // Membuat object dengan cara constructor
    $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 200);
    $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer Entertainment", 250000, 45);

    $cetakProduk = new cetakInfoProduk();
    // Kirim ke function method tambah abis itu masuk ke parameter dan menimpah nilai default property
    $cetakProduk->tambahProduk($produk1);
    $cetakProduk->tambahProduk($produk2);
    echo $cetakProduk->cetak();
?>