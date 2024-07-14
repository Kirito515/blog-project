<?php 

// echo 'Ohayou Gozaimasu';

////////////////////////////////////////////////////////////? Variables - o'zgaruvchilar /////////////////////////////////////////
// o'zgaruvchilar 2 xil 'echo va print

// $name = "Jamshid";
// echo $name;

// $age = 16;
// print $age;

$name = "Jamshid";
$surname = "Ibragimov";
$age = 16;

$user = "menin gismim $name, familiyam $surname, yoshim $age" . "<br>";
echo($user);

//////////////////////////////////////////////////////////? data Typey - ma'lumot turlari ////////////////////////////////////////

/*
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
*/

//! string
$str = "Hello";

//! integer - butun sonlar
$int = 4040;

//! float - butun sonlar
$flt = 5.33433;

//! Boolean - true va false
$bln1 = true; // true - 1 chiqaradi
$bln2 = false; // false - 0 chiqaradi

//! array- bir necha ma'lumotlarni 1 ta o'zgaruvchida saqlaydi - ochilishi 2xil = 
$array = ["olma", "banan", "nok"];
$array1 = array("damas", "lasetti", "malibu". "<br>");
print_r($array1);

////////////////////////////////////////////////////////? Matematik funksuyalar ///////////////////////////////////////////////


$min = min(3, 45, 39, 100, 1894); //min - eng kichik sonni chiqaradi
echo $min . "<br>";

$max = max(3, 45, 39, 100, 1894); //max - eng katta sonni chiqaradi
echo $max . "<br>";

$kv = sqrt(100); // berilgam qiymatni ildiz ostisini chiqaradi
echo $kv . "<br>";

echo round(5.6) . "<br>"; // sonni yaxlitlaydi

echo rand().  "<br>"; // random sonlarni chiqaradi


//? constants - o'zgarmaslar

define('car', 'SUPRA');
echo car . "<br>";

////////////////////////////////////////////////////////////? operatorlar //////////////////////////////////////////////


$x = 10;
$y = 5;

// echo($x + $y);
// echo($x - $y);
// echo($x * $y);
// echo($x / $y);

///////////////////////////

// $x += $y; // x ni y ga qo'shib x ga chiqar deyapti
// $x -= $y; //x dan y ni ayirib x ga chiqar deyapti
// $x *= $y;
// $x /= $y;
// echo $x;

//////////////////////////

// $a = (/*shart*/) ? 'true' : 'false'; = // $a = (1==1) ? "to'g'ri" : "noto'g'ri"


////////////////////////////////////////////////////////////? if else //////////////////////////////////////////////

// $x = 10;
// $y = 20;

// if($x > $y) {
//     echo 'x y dan katta';
// } elseif ($x == $y) {
//     echo "x y ga teng";
// } else {
//     echo "x y dan kichik";
// }


////////////////////////////////////////////////////////////? switch  //////////////////////////////////////////////

// $swch = "Uchiha";

// switch($swch) {
//     case 'Uzumaki' :
//         echo "Noto'g'ri topdingiz";
//         break;
//     case 'Hyuga' :
//         echo "Noto'g'ri topdingiz";
//         break;
//     case 'Uchiha' :
//         echo "To'g'ri topdingiz";
//         break;
//     default :
//     echo "Narutoni ko'r";
//     break;
// }


////////////////////////////////////////////////////////////? for loops  //////////////////////////////////////////////

// 1. while 
// 2. do... while
// 3. for 
// 4. foreach

// ! 1

// $x = 1;

// while($x <= 10) {
//     echo 'Hello' . "<br>";
//     $x++;
// }

///////////////

// do{
//     echo $x;
//     $x++;
// } while ($x <= 5);


// for ($x=0; $x <= 10; $x++) { 
//     echo $x . "<br>";
// }

// $gm = ["damas", "gentra", "malibu"];

// foreach($gm as $cars){
//     echo $cars . "<br>";
// }


////////////////////////////////////////////////////////////? function  //////////////////////////////////////////////

// function funksiyaNomi() {
    //     echo 'Bu funksiya';
    // } funksiyaNomi();
    
    
function bleach($name = "Ichigo", $bankai = "Tensa Zangetsu") {
    echo 'Name: ' . $name . ' - ' . 'Bankai name: ' . $bankai . "<br>";
}
bleach("Rukia", "Hokka no togame");
bleach("Byakuya", "SenbonZakura Kageyoushi");

////////////////////////////////////////////////////////////? var_dump //////////////////////////////////////////////

// var_dump() - o'zgaruvchining ichida nima bor ekanligini ko'rsatadi / xatolarni topishda ishlatiladi
// die() - die dan keyingi kodlarni to'xtatadi 


////////////////////////////////////////////////////////////? Array, royxat, massiv //////////////////////////////////////////////

//! 1.Indexed arrays - Arrays with a numeric index

// $cars = ["Damas", "Malibu", "Cobalt", "Supra"];
// echo $cars[1];

//! 2.Associative arrays - Arrays with named keys

$human = ["Sarvar" => 16, "Jasur" => 20, "Ilhom" => 22, "AOT" => "B L E A C H"];
echo $human["AOT"] . "<br>";

//! 3.Multidimensional arrays - Arrays containing one or more arrays

$bleach = [
    ["Ichigo", "Orihime", "Ishida"],
    [11 => "Kenpachi", 4 => "Unahana", 5 => "Aizen"],
    ["Ulqiora", "Grimjoo", "nnoitora"],
];
echo $bleach[1]["5"] . "<br>";

?>