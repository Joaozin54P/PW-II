<html>
    <head>
        <title>QUADRADOS</title>
</head>
<body>
    <?php
    $pri = $_POST['txt1'];
    $seg = $_POST['txt2'];
    $ter = $_POST['txt3'];
    
    $soma = $pri*$pri +  $seg* $seg + $ter*$ter;

    echo "O resultado dos quadrados é: " .$soma;
    ?>
    </body>
    </html>