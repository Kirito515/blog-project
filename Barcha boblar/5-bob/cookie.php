<?php

setcookie("name", "my_name_is_Jamshid");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello <?php echo $_COOKIE["name"]; ?></h1>
</body>
</html>