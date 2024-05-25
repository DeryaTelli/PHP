<?php 
/*
= Atama Operatoru 
. birlestirme opreatoru 

+= , -+ , /+ , *=, %= atama cesitleri
.= birlestirerek atama 
 */

$a='Naber';
$b='Selam';
echo $a.$b . "<br>";

$sayi= 4;

echo ($sayi += 4) . "<br>"; // yeni deger 
echo ($sayi -= 4) . "<br>";
echo ($sayi /= 4) . "<br>";
echo ($sayi *= 4) . "<br>";

$adSoyad='Derya';
echo ($adSoyad.='Telli') . "<br>";
?>
<?php 
    $modul='<div>';
    $modul.='<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>';
    $modul.='</div>';
    echo $modul;
?>