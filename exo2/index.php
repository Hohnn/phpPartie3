<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo php les boucles</title>
</head>
<body>
    <p>Exo 2</p>
    <?php
    $number = 0;
    $number2 = rand(1, 100);
    while ($number <= 20) {
        $result = $number * $number2; 
        echo $result, "<br>";
        $number++;
    }
    ?>
</body>
</html>