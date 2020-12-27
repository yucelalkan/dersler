<?php 

    // Doğum yılı girilen bir kişinin
    // Yaşını hesaplayan fonksiyonu yazınız
    function yasHesapla($dogumYili){
        echo 2020-$dogumYili;
        echo "<br/>";
    }

    yasHesapla(2003);
    yasHesapla(1964);
    yasHesapla(1948);

    /* 
        2020 yerine date('Y') yazarsak
        her yıl 2020'yi değiştirmek
        zorunda kalmayız
    */

?>