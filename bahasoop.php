<?php 

    // 1. class dan object
    // class Produk {

    // } 
    // object
    // $produk1 = new produk();
    // $produk2 = new produk();

// =================================================

    // 2. property dan method
    // class Produk 
    // {
    //     // property public sebagai visibility
    //     public  $judul = "judul",
    //             $penulis,
    //             $penerbit,
    //             $harga;

    //     public function getLabel() 
    //     {
    //         return "$this->penulis, $this->penerbit";
    //     }
    // }

    // $produk1 = new Produk();
    // $produk1->judul = "Naruto";
    // var_dump($produk1);

    // $produk2 = new Produk();
    // $produk2->judul = "Resident Evil";
    // $produk2->tambahProperty = "Hahhaha";   
    // var_dump($produk2);

    // $produk3 = New Produk();
    // $produk3->judul = "Komik Twd";  
    // $produk3->penulis = "Kirkman";
    // $produk3->penerbit = "Paul";
    // $produk3->harga = 500000;

    // echo "Judul Komik : $produk3->judul <br>";
    // echo "Judul Penulis : $produk3->penulis <br>";
    // echo $produk3->getLabel();

    // echo "<hr>";

    // $produk4 = New Produk();
    // $produk4->judul = "Resident Evil";  
    // $produk4->penulis = "Mashimi";
    // $produk4->penerbit = "Leon";
    // $produk4->harga = 500000;

    // echo "Komik : ".$produk3->getLabel();
    // echo "<br>";        
    // echo "Game : ".$produk4->getLabel();

// =================================================

    // 3. constructor method
    // class Produk {
    //     public  $judul = "judul",
    //             $penulis = "penulis",
    //             $penerbit = "penerbit",
    //             $harga = 0;

    //     public function __construct($judul, $penulis)
    //     {
    //         $this->judul = $judul;
    //         $this->penulis = $penulis;
    //     }

    //     public function getLabel()
    //     {
    //         return "$this->penulis, $this->penerbit";
    //     }
    // }

    // $produk1 = new Produk("TWD", "Kirkman");

// =================================================

    // 4. object type
    class Produk {
        public  $judul,
                $penulis,
                $penerbit,
                $harga;

        public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getLabel()
        {
            return "$this->penulis, $this->penerbit";
        }        
    }

    class CetakInfoProduk {
        public function cetak() 
        {
            $str = " Naruto : ";
        }
    }

?>