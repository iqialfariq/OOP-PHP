<?php
    // Studi Kasus Produk

    class Produk {
        // Cara membuat property
        public 
                $judul = "Judul",
                $penulis = "Penulis",
                $penerbit = "Penerbit",
                $harga = 0;

        // Cara membuat method
        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }
    }

    $produk1 = new Produk();
    // Cara menimpah value pada property
    $produk1->judul = "Naruto";
    $produk1->penulis = "Masashi Kishimoto";
    $produk1->penerbit = "Shonen Jump";
    $produk1->harga = 30000;
    // echo "Komik: $produk1->judul, Penulis: $produk1->penulis, Penerbit: $produk1->penerbit, Harga: $produk1->harga";
    // echo "<br>";

    $produk2 = new Produk();
    // Cara menimpah value pada property
    $produk2->judul = "Uncharted";
    $produk2->penulis = "Neil Druckmann";
    $produk2->penerbit = "Sony Computer Entertainment";
    $produk2->harga = 25000;
    // echo "Game: $produk2->judul, Penulis: $produk2->penulis, Penerbit: $produk2->penerbit, Harga: $produk2->harga";
    // echo "<br>";

    echo "Komik: " . $produk1->getLabel();
    echo "<br>";
    echo "Game: " . $produk2->getLabel();
?>