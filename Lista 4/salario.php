<html>
    <head>
        <title>Salario</title>
</head>
<body>
    <?php
    $sal = $_POST['txtS'];
    $gra = $sal*0.1;
    $inp = $sal*0.2;

    $salL = ($sal+$gra)-$inp;

    echo "Depois de você ter pago 20% da renda, o seu salário de agora é: " .$salL;
    ?>
    </body>
    </html>