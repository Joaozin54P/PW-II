<html>
<head>
    <title>MEDIA</title>
</head>
<body>
    <?php
    $Nota = $_POST['txtN1'];
    $nota = $_POST['txtN2'];

    $aprovacao = ($Nota+$nota)/2;

    if($aprovacao >= 8)
    {
        echo "Você está aprovado " .$aprovacao;
    }
    elseif ($aprovacao <= 3)
    {
        echo "Você está reprovado " .$aprovacao;
    }
    else
    {
        echo "Você está de recuperação " .$aprovacao;
    }
    ?>
</body>
</html>