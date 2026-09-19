<?php
    // Pertemuan8 - Belajar Membuat Static Keywords

    // class contohStatic {
    //     // Cara membuat property static
    //     public static $angka = 1;

    //     // Cara membuat method static
    //     public static function halo() {
    //         return "halo" . self::$angka++ . " Kali";
    //     }
    // }

    // // Cara mengakses property static
    // echo contohStatic::$angka;
    // echo "<br>";
    // echo contohStatic::halo();
    // echo "<hr>";
    // echo contohStatic::halo();

    class contoh {
        public static $angka = 1;
        
        public function halo() {
            return "Halo " . self::$angka++ . " Kali";
        }
    }

    $objc1 = new contoh;

    echo $objc1->halo();
    echo "<br>";
    echo $objc1->halo();
    echo "<br>";
    echo $objc1->halo();
    echo "<br>";
    $objc2 = new contoh;

    echo $objc2->halo();
    echo "<br>";
    echo $objc2->halo();
    echo "<br>";
    echo $objc2->halo();
    echo "<br>";
?>