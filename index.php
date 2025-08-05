<?php

$car = "Moshina";

$foods = ['manti', "xonim", "somsa"]

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php darslar</title>
</head>

<body>
    <h1>salom dunyo</h1>
    <p>mening yoqtirgan moshinam - <?= $car ?></p>
    <h1>toamlar : </h1>
    <ul>
        <?php foreach($foods as $food): ?>
            <li><?= $food ?></li>
            <?php endforeach?>
    </ul>
</body>

</html>