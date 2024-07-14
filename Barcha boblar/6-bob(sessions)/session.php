<?php 

session_start(); // sessiyani boshlash
$_SESSION["u_name"] = "Jamshid.";
$_SESSION["phone_number"] = "+998910201801";

// session_unset9(); // sessiyadagi ma'lumotlarni o'chirib tashlaydi
// session_destroy() // sessiyani tugatish;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h1>Foydalanuvchi: <?= $_SESSION["u_name"];?>  Telefon raqami: <?= $_SESSION["phone_number"]?></h1>
</body>
</html>