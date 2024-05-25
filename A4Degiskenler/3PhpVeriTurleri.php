<?php 
/*
Veri tiplero 
String 
integer 
float(double)
Boolean(true, false)
Array 
Object 
Null
gettype(); hazir tanimli fonksiyon ile veritipinin ne oldugunu ogreniyoruz 
*/

$b='Derya';
echo gettype($b) . "<br>"; //string 
$c=3;
echo gettype($c). "<br>"; //integer
$d=3.4;
echo gettype($d) . "<br>"; //float
$e=true;
echo gettype($e) . "<br>"; //boolean
$f=array(1,2,3,4,5);
echo gettype($f) . "<br>"; //array
$g=new stdClass();
echo gettype($g) . "<br>";//object 
$k=NULL;
echo gettype($k) . "<br>";//null




?>