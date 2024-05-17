<html>
    <head>
        <title>Numero par</title>
</head>
<body>
    <?php
    $soma = 0;

    echo "Números pares é  ";

    for ($nu = 2; $nu <= 10; $nu++) 
    {
       if ($nu % 2 == 0) 
       { 
            echo $nu . " ";
            $soma += $nu; 
       }
    }
    
    echo "<br>";
    echo "Soma dos números pares: " . $soma;
    ?>
    </body>
    </html>