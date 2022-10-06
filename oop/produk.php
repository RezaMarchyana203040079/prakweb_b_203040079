<?php



class Produk
{
  public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = "0";

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}


// $produk1 = new Produk();
// $produk1->judul = "Naruto";

// $produk2 = new Produk();
// $produk2->judul = "uncharted";
// $produk2->tambahproperty = "contoh";

$produk3 = new Produk();
$produk3->judul = "naruto";
$produk3->penulis = "masashi";
$produk3->penerbit = "shonen jump";
$produk3->harga = "30000";


// var_dump($produk1);
// var_dump($produk2);
// var_dump($produk3);

// echo "komik : $produk3->penulis,$produk3->penerbit";
// echo "<br>";
// echo $produk3->sayHello();

// echo $produk3->getLabel();

// echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "nael Druckmann";
$produk4->penerbit = "sony computer";
$produk4->harga = "250000";

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game: " . $produk4->getLabel();
