<?php
    // Pertemuan2 - Belajar Membuat Property dan Metod

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

    $produkA = new Produk();
    // Cara menimpah value pada property
    $produkA->judul = "Naruto";
    $produkA->penulis = "Masashi Kishimoto";
    $produkA->penerbit = "Shonen Jump";
    $produkA->harga = 30000;
    // echo "Komik: $produk1->judul, Penulis: $produk1->penulis, Penerbit: $produk1->penerbit, Harga: $produk1->harga";
    // echo "<br>";

    $produkB = new Produk();
    // Cara menimpah value pada property
    $produkB->judul = "Uncharted";
    $produkB->penulis = "Neil Druckmann";
    $produkB->penerbit = "Sony Computer Entertainment";
    $produkB->harga = 25000;
    // echo "Game: $produkB->judul, Penulis: $produkB->penulis, Penerbit: $produkB->penerbit, Harga: $produkB->harga";
    // echo "<br>";

    echo "Komik: " . $produkA->getLabel();
    echo "<br>";
    echo "Game: " . $produkB->getLabel();
?>