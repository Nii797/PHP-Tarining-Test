<?php 

    for ( $n=1; $n<=100; $n++ ) {
        if ( $n % 2 === 0 ) {
            if ( $n == 2 ) {
                echo "Not Weird<br>";
            } else if ( $n === 5 ) {
                echo "Not Weird<br>";
            }
        } else if ( $n % 2 === 1 ){
            echo "Weird<br>";
        }
    }

?>