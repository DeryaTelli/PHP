<?php
/*Dizi Fonksiyonları 1
print_r()
Bir değişkenin veya dizinin gösterimini ekrana basar.

var_dump()
Bu işlev bir değişkenin türü ve değeri dahil değişkenle
ilgili bilgileri gösterir. Diziler ve nesneler ardışık olarak
bileşenlerine ayrılarak tüm yapısı değerleriyle birlikte gösterilir.

explode()
Bir dizgeyi bir ayraca göre bölüp bir dizi haline getirir

implode()
Dizi elemanlarını birleştirip bir dizge elde eder.

count()
Bir dizideki eleman sayısını veya bir nesnedeki şeylerin sayısını döndürür.

is_array()
Değişkenin bir dizi içerip içermediğine bakar*/

$dizi=[1,2,3,4,5];
var_dump($dizi); //icine yazilan degisken hakkinda detayli bilgi verecetir 

$isim=['Derya','Telli'];
$dizge=implode('-',$isim); // verdigin degikeni arrayleri birlestirmek icin kullanacaktir 
print_r($dizge);

$newArray=explode('-',$dizge); // verdigin ifadeye gore diziyi ayirip yeni dizi olusturacaktir 
print_r($newArray);

echo "<pre>";
echo count($isim). "<br>";

echo is_array($isim); 









?>