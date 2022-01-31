<?php
    function inputBeli($uangH) {
        if ( $uangH >= 750000 ) {
            echo "Hafid mendapatkan jas";
        } else if ($uangH >= 350000) {
            echo "Hafid mendapatkan celana panjang";
        } else if ($uangH >= 225000) {
            echo "Hafid mendapatkan celana kameja";
        } else if ($uangH >= 100000) {
            echo "Hafid mendapatkan kaos";
        } else if ($uangH >= 50000) {
            echo "Hafid mendapatkan celana pendek";
        } else {
            echo "tidak punya uang";
        }
    }
    $input = inputBeli(220000);
    echo $input;
?>