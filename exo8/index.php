<?php
    function test(){
        for ($i=200; $i >= 0 ; $i -= 12) { 
            echo "<div> Enfin !!!! </div>";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo php les boucles</title>
</head>
<body>
    <p>Exo 8</p>
    <?= test()?>
</body>
</html>