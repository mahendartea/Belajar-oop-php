# Access Modifier pada OOP PHP

Access modifier adalah atribut yang digunakan untuk mengidentifikasi sifat-sifat dari atribut atau metode. Access modifier digunakan untuk mengidentifikasi sifat-sifat dari atribut atau metode yang dapat diakses oleh objek. Access modifier memiliki tiga jenis:

1. **Public**: Atribut atau metode yang dibuat public dapat diakses oleh semua objek yang memiliki kelasnya.
2. **Protected**: Atribut atau metode yang dibuat protected hanya dapat diakses oleh objek yang memiliki kelasnya atau kelas-kelas yang memiliki kelasnya.
3. **Private**: Atribut atau metode yang dibuat private hanya dapat diakses oleh objek yang memiliki kelasnya.

Berikut adalah contoh penggunaan access modifier pada OOP PHP:

## 1. Syntax pembuatan access modifier:

```php
class NamaKelas {
    // deklarasi atribut
    public $atribut1;
    protected $atribut2;
    private $atribut3;

    // deklarasi metode
    public function metode1() {
        // kode metode
        return $nilai;
    }
}
```

## 2. Syntax pembuatan access modifier public:

modier public adalah default, jadi tidak perlu di deklarasikan pada attribute atau metode.


```php
class NamaKelas {
    // deklarasi atribut
    public $atribut1;
    protected $atribut2;
    private $atribut3;

    // deklarasi metode
    public function metode1() {
        // kode metode
        return $nilai;
    }
}
```

## 3. Syntax pembuatan access modifier protected:

Modifier **protected** digunakan untuk mendeklarasikan atribut atau metode yang hanya dapat diakses oleh objek yang memiliki kelasnya atau kelas-kelas yang memiliki kelasnya.

```php
class NamaKelas {
    // deklarasi atribut
    public $atribut1;
    protected $atribut2;
    private $atribut3;

    // deklarasi metode
    public function metode1() {
        // kode metode
        return $nilai;
    }
}
```

## 4. Syntax pembuatan access modifier private:

Modifier **private** digunakan untuk mendeklarasikan atribut atau metode yang hanya dapat diakses oleh objek yang memiliki kelasnya.

```php
class NamaKelas {
    // deklarasi atribut
    public $atribut1;
    protected $atribut2;
    private $atribut3;

    // deklarasi metode
    public function metode1() {
        // kode metode
        return $nilai;
    }
}
```
