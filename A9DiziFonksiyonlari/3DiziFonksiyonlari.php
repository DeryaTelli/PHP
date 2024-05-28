<?php 
/* 
in_array(); Bir dizide bir değerin varlığını araştırır.
array_shift(); Dizini başlangıcından bir eleman çıkarır.
array_pop(); Dizinin sonundaki elemanı diziden çıkartır.
array_slice(); Bir dizinin belli bir bölümünü döndürür
array_sum(); Bir dizideki değerlerin toplamını hesaplar.
array_product(); Bir dizideki değerlerin çarpımını bulur.
array_unique(); Diziden yinelenen değerleri siler.
array_values(); Bir dizinin tüm değerlerini döndürür.
array_push(); Belli sayıda elemanı dizinin sonuna ekler.
array_unshift(); Bir dizinin başlangıcına bir veya daha fazla eleman ekler.
array_keys(); Bir dizideki tüm anahtarları veya bir anahtar altkümesini döndürür.
*/

$array=['Derya','Irem', 'Mihri', 'Cansu ', 'Suna'];
var_dump(in_array('Irem',$array));// verilen parametre icinde var mi yokmu kontrol ediyor 
/*$array_shift($array); // dizinin basindan eleman cikariyor
array_pop($array);// dizinin sonundan eleman cikardi 
print_r($array);*/
$new_array=array_slice($array,0,2);// ilk parametrede dizimi veriyorum ikinci paramterede nereden baslamasi gerektigini soyluyorum 3 parametrede ise kac tane deger getirmesi gerektinigi soyluyorum 

print_r($new_array);




?>