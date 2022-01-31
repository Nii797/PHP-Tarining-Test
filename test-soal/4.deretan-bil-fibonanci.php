<?php
    $angka_sebelumnya = 0;
    $angka_sekarang = 1;
    echo "$angka_sebelumnya $angka_sekarang";
    for ( $i=1; $i<=10; $i++ ) {
        $output = $angka_sebelumnya + $angka_sekarang;
        echo "$output";
        $angka_sebelumnya = $angka_sekarang;
        $angka_sekarang = $output;
    }
?>