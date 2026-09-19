<?php
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
?>