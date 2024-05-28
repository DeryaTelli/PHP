<?php 
function isim(){
    echo "Derya";
}
isim();
echo "<pre>";
function isim2(){
    return "Mihri";
}
$ad=isim2();
echo $ad;

echo "<pre>";

function topla($a,$b){
    return $a+$b;
}
echo topla(5,4);
?>