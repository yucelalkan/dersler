<?php 

    $aylar = array("Ocak", "Şubat", "Mart", 
    "Nisan", "Mayıs", "Haziran", "Temmuz",
    "Ağustos","Eylül","Ekim","Kasım","Aralık");

    
?>

<select>
    <?php 
        for($i=0; $i<=11; $i++)
        {
            echo "<option> $aylar[$i] </option>";
        }
    ?>
</select>

