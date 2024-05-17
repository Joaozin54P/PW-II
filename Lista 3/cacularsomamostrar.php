<html>
    <head>
        <title>Página cacularsomamostrar.php</title>
</head>
<body>
    <br>
    <?php
    $A = $_POST['txta'];
    $B = $_POST['txtb'];

    $soma=$A + $B;
    echo "A soma dos valores é ".$soma.'<br>';
    if($soma>10) 
    {
        echo "Soma maior de dez";
    }
    ?>
    </body>
    </html>
