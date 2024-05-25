<?php 
/*
aritmetik operatorler 
toplama +
cikarma - 
carpma * 
bolme /
mod % 
*/ 
echo 3+3 . "<br>";
echo 3-3 . "<br>";
echo 3*3 . "<br>";
echo 3/3 . "<br>";
echo 3%3 . "<br>";
echo (2+3)/2*(3-1)*9 . "<br>";
?>
<?php 
/*
== esittir 
=== aynidir degisken turleri ve degerleri ayni demek 
!= esit degildir 
!== farklidir hem turu hemde degeri farkliysa 
<,>, <=, >= , <=>
mekik  (0 , -1, 1) degiskenin birbirine esit olma buyuk olma ve kucuk olma degerlerini integer deger olarak dondurucek 
var_dump() hazir fonksiyon ile degerin degisken turunu ve tutugu degeri ogrenebiliyoruz  
*/

$a=true;
var_dump($a);
echo "<br>"
?>

<?php 
/*
++ ve -- 
++$a onceden attirma 
$a++ sonradan  attirma
--$a onceden eksiltme 
$a-- sonradan eksiltme 
*/

$sayi=10;
echo $sayi . "<br>";
echo ++$sayi. "<br>";
echo $sayi++ . "<br>"; 

$a = 1;
$a++;
echo $a ; // Ekrana 2 sonucunu yazar.

$a = 5;
echo ++$a; // Ekrana 6 sonucunu yazar.
echo $a; // Ekrana 6 sonucunu yazar.

$a = 5;
echo $a++; // Ekrana 5 sonucunu yazar.
echo $a; // Ekrana 6 sonucunu yazar.

$a = 5;
echo --$a; // Ekrana 4 sonucunu yazar.
echo $a; // Ekrana 4 sonucunu yazar

$a = 5;
echo $a--; // Ekrana 5 sonucunu yazar.
echo $a; // Ekrana 4 sonucunu yazar.
?>