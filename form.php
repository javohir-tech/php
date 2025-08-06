<?php

$name = $_POST['name'];
$sur_name = $_POST['sur_name'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>

<body>
    <h1>Ismingiz : <?= $name ?> </h1>
    <h1>Familyangiz: <?= $sur_name ?> </h1>
</body>

</html>