<?php
 
//  JSON - JavScript Object Notation

// jcon_uncode() - codni JSON farmatiga o'tqazadi
// json_decode() - JSON ni oddiy formatga qaytaradi

$jsonobj = '{"Piter": 35, "Ben": 40, "John": 45}'; // JSON formatda yozish


$obyekt = json_decode($jsonobj); // obyekt formatiga o'tqazish
// var_dump($obyekt);
// echo $obyekt->Piter; // obyektdagi elementlarni chaqirish key -> value

$array = json_decode($jsonobj, true);
// var_dump($array);
echo $array["Piter"]; // obyektdagi elementlarni chaqirish key -> value
