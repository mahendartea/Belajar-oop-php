<?php

class Produk
{
    public $judul, $penulis, $penerbit, $harga; //property

    //constructor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getJudul() //method atau function
    {
        return "Judul Buku adalah " . $this->judul;
    }

    public function getHarga()
    {
        return "Harga buku ini adalah : Rp. " . $this->harga;
    }
}

$buku_naruto = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> <?php echo $buku_naruto->getJudul(); ?> </h1>
    <p> <?php echo $buku_naruto->getHarga(); ?></p>

</body>

</html>