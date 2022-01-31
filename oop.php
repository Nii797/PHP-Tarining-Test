<?php 

    // soal oop
    // class
    class hp {
        // properties
        public $merk;
        public $harga;
        
        // method
        function setMerk($merk) 
        {
            $this->merk = $merk;
        }
        function getMerk() 
        {
            return $this->merk;
        }

        function setHarga($harga = 0)
        {
            if (is_numeric($harga)) {
                $this->harga = $harga;
            } else {
                echo "format harus angka";
                echo "\n";
            }
        }
        function getHarga(){
            return $this->harga;        
        } 

        function cetak () 
        {
            if (!empty($this->merk)) {
                if (!empty($this->harga) && is_numeric($this->harga)) {
                    echo 'Merk hp '.$this->merk.' rata-rata harganya diatas '.$this->harga;
                } else {
                    echo "\n";
                    echo "Maaf harga tidak diketahui";
                }
            } else {
                echo "maaf merk tidak diketahui";
            }
        }
    }

    // object
    $hp1 = new hp();
    $hp1->setMerk('Apple');
    $hp1->setHarga(1000);

    echo $hp1->cetak();






    // percobaan 
    // class Person {
    //     var $nama;
    //     public $umur;
    //     public $tanggal_lahir;
    //     public $alamat;
    //     public $pendidikan;
    //     public $keahlian;
    //     public $pengalaman;
    //     public $prestasi;

    //     function set_formal($nama) {
    //         $this->nama = $nama;
    //     }
    //     function get_formal()  {
    //         return "Nama saya " . $this->nama;
    //     }
    // }

    // $person1 = new Person("Soni");
    // $person1->set_formal("Soni");
    // $person1->get_formal();

    // echo $person1->get_formal();
?>