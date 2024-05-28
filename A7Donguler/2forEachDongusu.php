

<?php 

$isimler=['Derya','Mihri', 'Can ', 'Ege'];
foreach($isimler as $isim){
    echo $isim . "<br>";
}
foreach($isimler as $anahtar=>$deger){
    echo $anahtar.'-'.$deger. '<br>';
}
?>