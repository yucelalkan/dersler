<?php 

    // İki sınav notu verilen öğrencinin
    // Ders geçme durumunu hesaplayan
    // Fonksiyonu yazınız.

    function dersGecme($a,$b){
        $ortalama = ($a+$b)/2;
        echo "Ortalama: $ortalama ";
        
        if($ortalama>=50)
            echo "Dersi Geçti";
        else 
            echo "Dersten Kaldı";
        echo "<br/>";
    }

    dersGecme(40,47);
    dersGecme(30,95);
    dersGecme(72,96);
?>