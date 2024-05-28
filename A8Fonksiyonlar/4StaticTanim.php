<?php 
function say(){
    static $sayi=0; //son degerini koruyor 
    echo $sayi;
    $sayi++;
}
say();
say();
say();
say();

?>