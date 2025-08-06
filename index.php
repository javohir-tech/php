<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        .form-box { 
            display :flex;
            gap: 10px;
            justify-content :center;
        }
    </style>
</head>

<body>
    <h1 style="text-align : center">Forma</h1>
    <form action="" method="">
        <div class="form-box">
            <label for="name">Ismingiz</label>
            <input type="text" id="name">
        </div>
        <div style="margin-top : 10px" class="form-box">
            <label for="sur_name">Familya</label>
            <input type="text" id="sur_name">
        </div>
    </form>
</body>

</html>