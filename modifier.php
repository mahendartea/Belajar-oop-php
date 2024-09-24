<?php
//public
// class Kendaraan
// {
//     public $warna;

//     public function setWarna($warna)
//     {
//         $this->warna = $warna;
//     }
// }

// $mobil = new Kendaraan();
// $mobil->setWarna("Merah"); // Bisa diakses secara public
// echo $mobil->warna; // Output: Merah


//protected
// class Kendaraan {
//     protected $jenisMesin;

//     protected function setJenisMesin($jenisMesin) {
//         $this->jenisMesin = $jenisMesin;
//     }
// }

// class Mobil extends Kendaraan {
//     public function startMesin() {
//         $this->setJenisMesin("Diesel");
//         echo "Mesin {$this->jenisMesin} telah dihidupkan.";
//     }
// }

// $mobil = new Mobil();
// $mobil->startMesin();

//private

class Kendaraan
{
    private $nomorSeri;

    public function setNomorSeri($nomorSeri)
    {
        $this->nomorSeri = $nomorSeri;
    }

    private function getNomorSeri()
    {
        return $this->nomorSeri;
    }
}

$mobil = new Kendaraan();
$mobil->setNomorSeri("123ABC");
