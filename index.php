<?php

// var_dump($_SERVER)/
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $sur_name = $_POST['sur_name'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        .form-box {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h1 style="text-align : center">Forma</h1>
    <form action="" method="POSt">
        <div class="form-box">
            <label for="name">Ismingiz</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="form-box">
            <label for="sur_name">Familya</label>
            <input type="text" id="sur_name" name="sur_name">
        </div>
        <div class="form-box">
            <button>Jo'natish</button>
        </div>
    </form>
    <div>
        <h1>Ismingiz : <?= $name ?? "" ?></h1>
        <h1>Familyangiz : <?= $sur_name ?? "" ?></h1>
    </div>
</body>

</html>