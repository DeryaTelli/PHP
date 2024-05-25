<?php 
/*
Mantiksal operatorler 
&& ve 
|| veya 
! degilse 
 */


$a = 3;
$b = 2;

echo (($a > $b) && ($a != $b)). "<br>"; // Hem $a > $b hem de $a != $b durumları true sonucu verdiğinden; sonuç true olacaktır.
echo (($a > $b) || ($a == $b)). "<br>"; // Hem $a > $b true $a == $b false sonucu verdiğinden; Veya(||) koşulunda sonuç true olacaktır.


?>
<?php 


//ternary operator 
//(koşul) ? true ise : true değilse 
($a < 5) ? print  "a küçüktür 5" :  "a küçük değildir 5"  ;
    

?>
<?php 
$m=1;
switch ($m){
    case 1:
        echo '1.kosul';
        break;
    case 2: 
        echo '2. kosul '; 
        break; 
    default: 
        echo 'default calisti ';        
}
?>

