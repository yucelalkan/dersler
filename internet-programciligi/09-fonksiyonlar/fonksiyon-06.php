<?php

    // Gelen ortalamaya göre sınıf geçme
    // ve kalma durumunu hesaplayan fonksiyon
    // tanımlayınız ve kullanınız.

    function sinifGecmeDurumu($ortalama)
    {
        if( $ortalama<50 )
            echo "Sınıfta Kaldı";
        else
            echo "Sınıfı Geçti";
    }

    sinifGecmeDurumu(40);
    sinifGecmeDurumu(56);

?>
