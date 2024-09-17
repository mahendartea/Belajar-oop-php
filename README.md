# OOP PHP

## Apa itu pemrograman OOP PHP

OOP PHP adalah singkatan dari Object Oriented Programming (Pemrograman Berorientasi Objek) dalam bahasa pemrograman PHP. Pemrograman berorientasi objek adalah paradigma pemrograman yang mengorganisir kode dalam bentuk objek, yang merupakan entitas yang menggabungkan data (atribut) dan fungsi (metode) yang beroperasi pada data tersebut.

Dalam konteks PHP, pemrograman berorientasi objek memungkinkan pengembang untuk membuat kode yang lebih modular, terstruktur, dan mudah di-maintain. Objek-objek dapat dibuat dari kelas-kelas yang didefinisikan oleh pengembang, dan objek-objek ini dapat berinteraksi satu sama lain untuk membangun aplikasi yang kompleks.

## Kelebihan Pemrograman OOP PHP

1. **Modularitas**: Kode dapat dibagi menjadi bagian-bagian yang terpisah, yang memudahkan dalam pengembangan, pemeliharaan, dan pengujian.
2. **Reusabilitas**: Objek dapat digunakan kembali dalam berbagai bagian dari aplikasi, mengurangi duplikasi kode dan meningkatkan efisiensi.
3. **Kapsulasi**: Data dan fungsi yang terkait dapat dikelompokkan bersama dalam objek, menghindari akses langsung dari luar objek dan meningkatkan keamanan dan integritas data.
4. **Abstraksi**: Pengembang dapat menyembunyikan detail implementasi dari pengguna objek, sehingga memudahkan dalam penggunaan dan pemahaman objek.
5. **Pewarisan**: Kelas baru dapat diwarisi dari kelas yang sudah ada, memungkinkan untuk menggunakan kembali kode dan menambahkan atau mengubah perilaku yang diwarisi.
6. **Polimorfisme**: Objek dari kelas yang berbeda dapat ditangani secara seragam melalui antarmuka atau kelas induk yang sama, meningkatkan fleksibilitas dan keterbacaan kode.
7. **Pengembangan yang lebih cepat**: Dengan menggunakan konsep OOP, pengembang dapat mengembangkan aplikasi dengan lebih cepat karena dapat memanfaatkan kode yang sudah ada dan mengurangi kesalahan.
8. **Skalabilitas**: Aplikasi yang dibangun dengan OOP dapat dengan mudah diperluas dan disesuaikan dengan kebutuhan yang berubah.

## Konsep PHP

### Class dan Object

- **Class**: Blueprint atau template untuk membuat objek. Class mendefinisikan atribut (data) dan metode (fungsi) yang dimiliki oleh objek.
- **Object**: Instance dari sebuah class. Objek adalah entitas yang dapat dibuat dari class dan memiliki nilai atribut tertentu.

1. Syntax PHP untuk mendefinisikan class:

```php
class NamaClass {
    // Deklarasi atribut
    public $atribut1;
    protected $atribut2;
    private $atribut3;

    // Deklarasi metode
    public function metode1() {
        // Kode metode
        return $nilai;
    }
```

Contoh Implementasi Class:

```php
Class Mobil {
    public $merk;
    public $warna;
    public $tahunProduksi;

    public function getInfo() {
        return "Mobil ini bermerk $this->merk, berwarna $this->warna, dan dibuat pada tahun $this->tahunProduksi.";
}
```

2. Syntax PHP untuk membuat objek dari sebuah class:

```php
$namaObjek = new NamaClass();
```

Contoh Implementasi Object:

```php
$mobil = new Mobil();
$mobil->merk = "iPhone";
$mobil->warna = "hitam";
$mobil->tahunProduksi = 2022;
echo $mobil->getInfo();
```

[Constructor](constructor.md)
