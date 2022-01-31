<?php 
    // Menentukan besar diskon
    // diskon =  × Rp 165.000    
    //            = 15 × Rp 1650
    //            = Rp 24.750
    // Menentukan harga sepatu yang harus dibayar
    // Dibayar = harga awal - diskon
    //              = Rp 165.000 - Rp 24.750
    //              = Rp 140.250
    // Menentukan uang kembalian
    // Kembalian = Uang dibayar - harga dibayar
    //                   = Rp 150.000 - Rp 140.250
    //                   = Rp 9.750
    // Jadi uang kembaliannya adalah Rp 9.750
    $hargaSepatu = 165000;
    $diskon = 15/100;
    $hasil = $diskon * $hargaSepatu;
    echo "Harga Diskon ".number_format($hasil, 0, ',', '.');
?>