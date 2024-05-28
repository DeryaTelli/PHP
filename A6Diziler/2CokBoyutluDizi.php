<?php 


$hayvanlar = [
    'Ucan Hayvanlar'=>['Kartal','Guvercin','Sahin'],
    'Surungen Hayvanlar'=> ['Yilan','Solucan','Tirtil'],

];
echo "<pre>";

print_r($hayvanlar);
echo $hayvanlar['Surungen Hayvanlar'][2];
echo "<br>";
echo $hayvanlar['Ucan Hayvanlar'][1];

$dizi = [
    'a'=>[
        'b'=>[
            'c'=>[1,2,3,4,5]
        ]
    ]
];
print_r($dizi);

?>