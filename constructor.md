# Constructor pada OOP PHP

Constructor adalah metode yang digunakan untuk membuat objek dari kelas. Constructor digunakan untuk menginisialisasi atribut objek dan menyimpan nilai dari atribut tersebut. Constructor dijalankan secara otomatis ketika objek dibuat dari kelas tersebut. Constructor didefinisikan dengan nama yang sama dengan nama kelas dan tidak memiliki tipe pengembalian.

Berikut adalah contoh penggunaan constructor pada OOP PHP:

1. Syntax pembuatan constructor:

```php
class NamaKelas {
    // deklarasi atribut
    private $atribut1;
    protected $atribut2;
    public $atribut3;

    // constructor
    public function __construct($nilai1, $nilai2, $nilai3) {
        $this->atribut1 = $nilai1;
        $this->atribut2 = $nilai2;
        $this->atribut3 = $nilai3;
    }

```

2. Implemtasi Constructor PHP

```php
class Mobil {
    private $merk;
    private $warna;
    private $tahunProduksi;

    public function __construct($merk, $warna, $tahunProduksi) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->tahunProduksi = $tahunProduksi;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function getTahunProduksi() {
        return $this->tahunProduksi;
    }

    public function setMerk($merk) {
        $this->merk = $merk;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function setTahunProduksi($tahunProduksi) {
        $this->tahunProduksi = $tahunProduksi;
    }

    public function info() {
        return "Mobil ini bermerk " . $this->merk . ", berwarna " . $this->warna . ", dan dibuat pada tahun " . $this->tahunProduksi;
    }

    ```
