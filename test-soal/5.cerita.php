<?php 
    $uangHeru = 850000;
    $persen = 5/100;
    $hasil = $persen * $uangHeru;
    echo "Rp ".number_format($hasil, 0, ',', '.')." bunga selama setahun";
    // Rp 42.500 bunga selama setahun
?>