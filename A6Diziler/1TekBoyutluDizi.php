<?php 
$isimler=array(); // bos bir dizi  
$isimler2=[]; //bos bir dizi 


$isimler =array('Derya','Selin','Mihri');
echo "<pre>";
print_r($isimler);// dizinin tum icerigini yazdirir 

echo $isimler[2];
echo "<br>";

$adlar=[
    'isim1'=>'Derya', //anahtarini ben belirledim 
    'isim2'=>'Mihri'
];
print_r($adlar);
echo $adlar['isim2'];

var_dump($adlar); // dizinin icerini daha detayli gosteriyor 

?>