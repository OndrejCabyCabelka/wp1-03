<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    $r = rand(1,100);
    define("PI", 3.14);

    // obvod
    $sircuit = 2*PI*$r;

    // obsah
    $area = PI*$r*$r;

    

    ?>

    <p>Poloměr kruhu je <?= $r ?> cm </p>
    <p>Obvod kruhu  = <?= $sircuit?> cm </p>
    <p>Obsah kruhu  = <?= $area?> cm2 </p>
    
</body>
</html>