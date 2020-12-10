<?php

    // Gelene devamsızlık değerine göre
    // sınıf geçme veya kalma durumunu hesaplayan
    // fonksiyonu tanımlayınız ve kullanınız.

    function sinifGecmeDurumu($devamsizlik)
    {
        if( $devamsizlik>10 )
            echo "Sınıfta Kaldı";
        else
            echo "Sınıfı Geçti";
        echo "<br/>";
    }

    sinifGecmeDurumu(7);
    sinifGecmeDurumu(15);
    sinifGecmeDurumu(4);


?>
