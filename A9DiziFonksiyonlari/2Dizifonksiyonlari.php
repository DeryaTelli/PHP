<?php 

/*Dizi Fonksiyonları 2

shuffle()
Bir diziyi karıştırır.

array_combine()
Anahtarlar için bir dizi, değerler için ise başka bir dizi kullanarak bir ilişkisel dizi oluşturur.

array_count_values()
Bir dizideki tüm değerleri sayar.

array_flip()
Bir dizideki anahtarlarla değerleri yer değiştirir.

array_key_exists();
Belirtilen anahtar veya indis dizide var mı diye bakar.

array_map();
Belirtilen dizilerin elemanlarını geriçağırım işlevini uygular.

array_filter();
Bir dizinin elemanlarını bir geriçağırım işleviyle süzgeçten geçirir.

array_merge()
Belirtilen dizileri ardarda ekleyerek yeni bir dizi oluşturur.

array_rand();
Bir diziden belli sayıda rasgele anahtar döndürür.

array_reverse();
Diziyi tersine sıralayıp döndürür.

array_search();
Bir dizide belirtilen değeri arar ve bulursa ilgili ilk anahtarı döndürür.
*/
echo "<pre>";
$sayilar=range(1,20); // birden 20 ye kadar dizi olusturuyor 
//range fonksiyonuna 3 bir paremetre eklersen vermis oldugun aralikicindeki artisi belirlersin 

shuffle($sayilar); // degisken olarak verdigin dizideki elemanlari karistirarak yeni dizi uretiyor 

print_r($sayilar);

echo "<pre>";
$meyve=['elma','karpuz','muz'];
$harf=['a','b','c'];
$newArray=array_combine($meyve,$harf); // meyve ve harflerden olusan bir dizi olusturacaktir
// bu fonksiyona girilen ilk parametre anahtar ikincisi ise deger olacak sekilde dizi olusturulur 
//birlestirilmek istenen diziler ayni uzunluga sahip olmak zorunda 
print_r($newArray);

$meyveler=['elma','karpuz','muz','elma','karpuz','muz','elma','karpuz','muz'];
$countMeyve=array_count_values($meyveler); 
print_r($countMeyve);

$harfler=['a','b','c'];
$dizi=array_flip($harfler); // harflerden olusan dizideki anahtar ile degerlerinin yerni degistirecektir 
print_r($dizi);
$dizi=array_key_exists('4',$harfler); // icindeki verilen anahtara sahip bir deger olup olmadigini kontrol ediyor true ve false donduruyor 

var_dump($dizi);

$sayilar=[1,2,3,4,5,6,7,8,9,10];
$dizi=array_map(function($sayi){
    return $sayi+2;
},$sayilar);
print_r($dizi);

//array_mapin farkli kullaimi 

function cube($sayi){
    return $sayi*$sayi*$sayi;
}
$dizi=array_map('cube',$sayilar);
print_r($dizi);


//array filter dizideki elemanlarimi istedigim ozellige gore filtrelememe yariyor bu islemi function icinde veriyoruz 
// ilk paremetresi dizi digeri ise fonksiyon olacak sekilde yaziliyor 
$ciftSayi=array_filter($sayilar,function($sayi){ 
    return $sayi%2==0 ? $sayi:false;
});
$teksayi=array_filter($sayilar,function($sayi){
    return $sayi%2!=0? $sayi:false;
});
print_r($ciftSayi);
print_r($teksayi);

$A=range(1,10);
$B=range(10,20);
$C=array_merge($A,$B); // olusturdugun iki diziyi birlestirmek icin kullanilir 
print_r($C);



$dizi=['Elma','Karpuz','Muz','Armut'];
print_r(array_rand($dizi,2)); // ilk parametre olarak dizimi ikinci parametre olarak ise kactane random anahtar istedigimin numarasini vermem gerekiyor 
print_r(array_reverse($dizi)); // diziyi tersine cevirir
print_r(array_search('Muz',$dizi)); // dizideki verilen degeri arar ve bulursa ilgili ilk anahtari dondurur)

?>