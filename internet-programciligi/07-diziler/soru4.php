<?php 

    // Mevsim adı girilecek, o mevsimde 
    // bulunan aylar listelenecek

    $mevsim = "asdasd";

    switch($mevsim){
        case "kış"      : echo "Aralık, Ocak, Şubat";       break;
        case "ilkbahar" : echo "Mart, Nisan, Mayıs";        break;
        case "yaz"      : echo "Haziran, Temmuz, Ağustos";  break;
        case "sonbahar" : echo "Temmuz, Ağustos, Eylül";    break;
        default : echo "Hatalı mevsim adı";
    }


?>