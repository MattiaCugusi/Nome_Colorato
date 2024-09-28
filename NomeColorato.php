<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome colorato</title>
</head>
<body>
    <?php

    $nome = "Mattia";
    $r = rand(0,255);
    $g = rand(0,255);
    $b = rand(0,255);

    echo "<p>r = " . $r . "</p>";
    echo "g = " . $g . "</p>";
    echo "b = " . $b . "</p>";

    echo "<h1 style= 'color: rgb($r,$g,$b)'>$nome</h1>";

   
    


    ?>
    
</body>
</html>