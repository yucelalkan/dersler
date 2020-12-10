<?php

    // 1-50 arasında 6 tane rastgele sayı üreten
    // fonksiyonu tanımlayınız ve kullanınız.

    // rand(başlangıç,bitiş)
    // rand(1,20)   1 ile 20 arasında sayı üretir

    function rastgele()
    {
        for($i=1; $i<=6; $i++)
            echo rand(1,50)."-";
    }

    rastgele();

?>
