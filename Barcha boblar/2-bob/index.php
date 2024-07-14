<?php 

if($_SERVER["REQUE_METHODST"] = "POST"){

$fname = $_POST["form_name"];
$fsurname = $_POST["form_surname"];

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <form action="" method="POST">
        <div>
            <label for="">Name:</label>
            <input type="text" name="form_name">
        </div>
        <div>
            <label for="">Surname:</label>
            <input type="text" name="form_surname">
        </div>
        <div>
            <button type="submit">Send</button>
        </div>
    </form>

    <div>
        <h1>Royxatdan o'tdingiz!</h1>
        <h3>Sizning Ismingiz: <?= $fname ?? "";?></h3>
        <h3>Sizning Familyangiz: <?= $fsurname ?? "";?></h3>

    </div>
</body>
</html>