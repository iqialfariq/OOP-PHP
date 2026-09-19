# 🧠 Penjelasan OOP PHP
<p align="justify">
OOP (Object-Oriented Programming) adalah pendekatan pemrograman yang menyusun program berdasarkan object (objek). Dalam OOP, data dan fungsi yang
berhubungan dengan data tersebut dikelompokkan ke dalam sebuah class, kemudian dari class tersebut kita dapat membuat object.
</p>

---

```
Tujuan utama OOP adalah membuat program menjadi:

→ Lebih terstruktur.
→ Lebih mudah dikembangkan.
→ Lebih mudah dipelihara.
→ Kode bisa digunakan kembali (reusable).
→ Lebih mudah dikelola ketika aplikasi semakin besar.
```

---

## 🧩 Macam-macam Istilah pada OOP PHP

---

## 📦 CLASS
```
→ Class merupakan blueprint / template untuk membuat instance dari object.
→ Class mendefinisikan sebuah object.
→ Class menyimpan data dan perilaku yang disebut dengan property dan method.
→ Class tidak boleh diawali dengan angka dan space.
```

```php
// Cara membuat class
class namaClass {
    // Property
    public $a;

    // Method
    public function b() {
 
    }
}
```

---

## 🎯 OBJECT
```
→ Object merupakan tempat untuk hasil dari class.
→ Object dapat dibuat menggunakan satu class.
→ Object dibuat dengan menggunakan keyword NEW.
```

```php
// Cara membuat object
$produk3 = new product();
```

---

## 🧱 PROPERTY
```
→ Property mempresentasikan data / keadaan dari sebuah object.
→ Property disebut juga sebagai variabel yang ada didalam object / class (member variabel).
→ Property dibuat dengan menambahkan keyword visibility didepan nya.
```

```php
// Cara membuat property
public $judul, $penulis, $penerbit, $harga;
```

---

## ⚙️ METHOD
```
→ Method mempresentasikan perilaku dari sebuah object.
→ Method disebut juga function yang ada didalam class.
→ Method dibuat dengan menambahkan keyword visibility didepan nya.
```

```php
// Cara membuat method
public function getLable() {
    return "{$this -> judul} | {$this -> penulis} | {$this -> penerbit} | Rp. {$this -> harga}";
}
```

---

## 🏗️ CONSTRUCTOR
```
→ Constructor merupakan method khusus didalam class yang otomatis dijalankan ketika object dibuat.
→ Constructor digunakan untuk mengisi property object dengan data yang dikirim saat object dibuat.
→ Constructor dibuat menggunakan method __construct().
```

```php
// Cara membuat constructor
public function __construct($judul, $penulis, $penerbit, $harga) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
}
```

---

## 🔖 OBJECT TYPE
```
→ Object Type merupakan penentuan tipe data object yang boleh diterima oleh sebuah parameter pada function atau method.
→ Object Type digunakan untuk memastikan bahwa object yang dikirim berasal dari class yang sesuai dengan kebutuhan.
→ Dengan Object Type, kita bisa membatasi object yang diterima agar sesuai dengan class yang sudah ditentukan.
```

```php
// Cara membuat object type
class cetakInfoProduk {
    public function cetak(Produk $Produk) {
        $str = "{$Produk->getProduk()}";
        return $str;
    }
}
```

---

## 👨‍👦 INHERITANCE
```
→ Inheritance atau pewarisan adalah konsep OOP ketika sebuah class dapat mewarisi property dan method dari class lain.
→ Class yang mewariskan disebut parent class (class induk).
→ Class yang menerima warisan disebut child class (class anak).
→ Inheritance dibuat menggunakan keyword extends.
```

```php
// Cara membuat inheritance
class Komik extends Produk {
    public function getInfoProduk() {
        $str = "Komik: {$this->judul}, {$this->getLabel()}, ( Rp{$this->harga} ) - {$this->jmlHalaman} Halaman";
        return $str;
    }
}
```

---

## 🔐 VISIBILITY
```
→ Visibility merupakan aturan yang menentukan siapa yang boleh mengakses property dan method yang ada didalam class.
→ Visibility digunakan untuk mengatur hak akses terhadap property dan method.
→ Dengan visibility, kita bisa menentukan apakah property atau method dapat diakses dari luar class, dari class anak, atau hanya dari class itu sendiri.
→ Visibility dibuat menggunakan keyword public, protected, private.
```

```php
// Cara membuat visibility
public $judul = "Komik";

public function cetakJudul() {
    return $this->judul;
}
```

---

## 🔄 SETTER & GETTER
```
→ Setter adalah method yang digunakan untuk mengisi atau mengubah nilai property di dalam class.
→ Getter adalah method yang digunakan untuk mengambil atau membaca nilai property di dalam class.
→ Setter dan getter sering digunakan bersama visibility private atau protected.
→ Tujuannya supaya akses terhadap property bisa diatur melalui method, bukan langsung dari luar class.
```

```php
// Cara membuat setter dan getter
class Produk {

    private $judul;

    // Setter
    public function setJudul($judul) {
        $this->judul = $judul;
    }
    
    // Getter
    public function getJudul() {
        return $this->judul;
    }
}
```

---

## 🔗 STATIC KEYWORD
```
→ Static adalah keyword dalam PHP yang digunakan untuk membuat property atau method yang dimiliki oleh class, bukan object secara individual.
→ Biasanya digunakan ketika suatu data atau fungsi ingin digunakan bersama tanpa harus membuat object terlebih dahulu.
→ Static dapat digunakan pada Property, Method, Variable lokal dalam function (konsep berbeda).
→ Cara mengakses static menggunakan fungsi SELF::
```

```php
// Cara membuat static keyword
class Produk {
    // Static property
    public static $jumlah = 0;

    // Static method
    public static function info() {
      return "Ini adalah produk";
    }
}

// Mengakses static property
echo Produk::$jumlah;

echo "<br>";

// Memanggil static method
echo Produk::info();
```

---

## 💎 CONSTANT
```
→ Constant adalah nilai yang sudah ditetapkan dan tidak bisa diubah setelah dibuat.
→ Constant digunakan untuk menyimpan nilai yang sifatnya tetap.
→ Berbeda dengan variable, constant tidak menggunakan tanda $.
→ Constant biasanya ditulis menggunakan huruf kapital agar mudah dibedakan.
```

```
Magic Method Constant
__LINE__
__FILE__
__DIR__
__FUNCTION__
__CLASS__
__TRAIT__
__METHOD__
__NAMESPACE__
```

```php
// Cara membuat Constant dengan define dan const

// Tidak bisa disimpan didalam kelas / harus disimpan diluar
define("NAMA_CONSTANT", "NILAI");

// Bisa disimpan didalam class
const NAMA = "Budi";
```

---

## 🚧 ABSTRACT CLASS
```
→ Abstract class adalah class khusus yang digunakan sebagai class dasar (parent class).
→ Abstract class tidak bisa dibuat menjadi object secara langsung.
→ Biasanya digunakan sebagai kerangka dasar untuk class turunannya (child class).
→ Abstract class dibuat menggunakan keyword abstract.
```

```php
// Cara membuat Abstract Class

// Membuat class induk abstract
abstract class Hewan {
    // Membuat aturan bahwa child wajib memiliki method
    abstract public function bersuara();
}

// Kucing menjadi child dari Hewan
class Kucing extends Hewan {
    // Wajib dibuat karena sudah ditentukan oleh abstract class Hewan
    public function bersuara() {
        return "Meong";
    }
}
 
$kucing = new Kucing();
echo $kucing->bersuara(); // Output: Meong
```

---

## 📜 INTERFACE
```
→ Interface adalah sebuah kontrak atau aturan yang menentukan method apa saja yang wajib dimiliki oleh class.
→ Interface digunakan untuk menentukan kemampuan atau perilaku yang harus dimiliki oleh class.
→ Interface tidak digunakan untuk membuat object secara langsung.
→ Class yang menggunakan interface wajib mengimplementasikan method yang dideklarasikan didalamnya.
→ Interface dibuat menggunakan keyword interface.
→ Cara menggunakan interface untuk child class dengan keyword implements.
```

```php
// Cara membuat Interface
// Membuat sebuah interface
interface BisaTerbang {
    // Menjadi aturan yang wajib dimiliki class yang menggunakan interface tersebut
    public function terbang();
}

// Class Burung menggunakan aturan dari BisaTerbang
class Burung implements BisaTerbang {
    // Karena interface memiliki method terbang(), maka Class Burung wajib membuat method tersebut
    public function terbang() {
        return "Burung sedang terbang";
    }
}
 
$burung = new Burung();
echo $burung->terbang(); // Output: Burung sedang terbang
```

---

## ⚡ AUTOLOADING
```
→ Autoloading adalah mekanisme PHP untuk memuat file class secara otomatis ketika class tersebut dibutuhkan.
→ Tujuannya supaya kita tidak perlu menulis require atau require_once untuk setiap file class secara manual.
→ Autoloading sangat berguna ketika project sudah memiliki banyak class dan file.
```

```php
// Cara membuat Autoloading
spl_autoload_register(function ($class) {
    require_once "Produk/" . $class . ".php";
});
```

```
Cara membaca kode:
"PHP, daftarkan function autoload. Ketika ada class yang dibutuhkan tetapi belum dimuat,
masukkan nama class tersebut ke $class. Kemudian cari file dengan nama class tersebut di folder Produk dan masukkan file tersebut."
```
---

## 🧭 NAMSESPACE
```
→ Namespace adalah cara untuk mengelompokkan class, function, dan constant ke dalam sebuah ruang nama.
→ Tujuan utamanya adalah menghindari bentrok nama ketika kita memiliki class dengan nama yang sama.
→ Namespace bisa dibayangkan seperti folder khusus untuk nama class, tetapi namespace bukan folder secara fisik.
→ Name Space dibuat menggunakan "keyword namespace" lalu diikuti dengan ekstensi atau urutan folder dan file nya.
→ Keyword use digunakan untuk mengambil/menggunakan class dari namespace tertentu.
```
