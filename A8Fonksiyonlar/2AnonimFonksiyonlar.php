<?php 

$topla=function($sayi1,$sayi2){
    return $sayi1+$sayi2;
};
echo $topla(5,4);

echo "<pre>";

$dizi=[1,2,3,4,5];
$dizi=array_map(function($sayi){
    return 2*$sayi;
},$dizi);
print_r($dizi);

echo "<pre>";
$islem=[
    'topla'=>function($a,$b){return $a+$b;},
    'cikar'=>function($a,$b){return $a-$b;},
    'carp'=>function($a,$b){return $a*$b;},
    'bol'=>function($a,$b){return $a/$b;},
];
echo $islem['topla'](5,4) . "<br>";
echo $islem['cikar'](5,4). "<br>";
echo $islem['bol'](6,3). "<br>";
echo $islem['carp'](3,3). "<br>";
?>

