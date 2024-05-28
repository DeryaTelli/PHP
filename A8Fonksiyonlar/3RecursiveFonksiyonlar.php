<?php 
function sayi($i){
    echo $i;
    if($i<5){
        $i++;
        sayi($i);
    }
}
sayi(1);
echo "<br>";

$categories=[
    [
        'id'=>1,
        'parent'=>0,
        'name'=>'Front-End'
],
[
    'id'=>2,
    'parent'=>0,
    'name'=>'Back-End'
],
[
    'id'=>3,
    'parent'=>2,
    'name'=>'PHP'
],
[
    'id'=>4,
    'parent'=>1,
    'name'=>'VueJS'
]
];
function getCategories($arr, $par=0){ // degiskenler array and parent 
    $html="";
    $html.="<ul>";
    foreach($arr as $value){
        if($value['parent']==$par){
            $html.="<li>";
            $html.= $value['name'];
            $html.=getCategories($arr,$value['id']);
            $html.="</li>";
        }
    }  
    $html.="</ul>";
    return $html;
}
echo getCategories($categories);
?>