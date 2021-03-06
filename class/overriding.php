<?php

//membuat kelas produk
class Product{

    //membuat prpoerty
    public $kategori,
           $nama,
           $pembuat,
           $penerbit,
           $harga;

    public function __construct($kategori, $nama, $pembuat, $penerbit, $harga){
        $this->kategori = $kategori;
        $this->nama = $nama;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
           
    //membuat method getLable
    public function getLable(){
        return "$this->nama, $this->pembuat, $this->penerbit";
    }

    public function getInfoProduct(){
        $str = "{$this->kategori} | {$this->getLable()} (Rp. $this->harga)";
        return $str;
    }
}

class komik extends Product{
    
    public $jmlHalaman;

    public function __construct($kategori, $nama, $pembuat, $penerbit, $harga, $jmlHalaman){
        
        parent::__construct($kategori, $nama, $pembuat, $penerbit, $harga, $jmlHalaman);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduct(){
        $str = parent::getInfoProduct() . "~ {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class game extends Product{

    public $waktuMain;

    public function __construct($kategori, $nama, $pembuat, $penerbit, $harga, $waktuMain){
        parent::__construct($kategori, $nama, $pembuat, $penerbit, $harga, $waktuMain);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduct(){
        $str = parent::getInfoProduct() . "~ {$this->waktuMain} Jam.";
        return $str;
    }
}

//objek
$product1 = new komik("komik", "one pece", "oda nobunaga", "shonen jump", 10000, 100);
$product2 = new game("game", "FFXV", "yukimura", "kotak enik", 1000000, 50);

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();

