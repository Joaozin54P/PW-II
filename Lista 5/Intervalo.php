<html>
    <head>
        <title>Intervalo</title>
</head>
<body>
    <?php
    $soma = 0;
    $inicial = 3;
    $final = 8;

    echo " O intervalo do " . $inicial . " até o " . $final . "<br>";

   for ($i = $inicial; $i <= $final; $i++) 
    {
        $soma += $i;
    }
    echo "A soma do intervalo é " . $soma;
    ?>
    </body>
    </html>