<?php
    // Menghubungkan file ini dengan file init
    require_once "App/init.php";

    // Membuat object dengan cara constructor
    $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 200);
    $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer Entertainment", 250000, 45);

    $cetakProduk = new cetakInfoProduk();
    // Kirim ke function method tambah abis itu masuk ke parameter dan menimpah nilai default property
    $cetakProduk->tambahProduk($produk1);
    $cetakProduk->tambahProduk($produk2);
    echo $cetakProduk->cetak();
?>