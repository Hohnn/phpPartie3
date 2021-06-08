<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo php les boucles</title>
</head>
<body>
    <p>Exo 4</p>
    <?php
    $number = 1;


    while ($number <= 10) {
        echo $number, "<br>";
        $number += $number / 2 ;
    }
    ?>
</body>
</html>