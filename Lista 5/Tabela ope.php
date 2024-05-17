<html>
<head>
    <title>TABELA</title>
</head>
<body>
    <?php
    $valor1 = $_POST['txtN1'];
    $valor2 = $_POST['txtN2'];
    $codigo = $_POST['txtco'];

    switch($codigo)
    {
        case 1:
            $total = $valor1+$valor2;
            break;
        case 2:
            $total = $valor1-$valor2;
            break;
        case 3:
            $total = $valor1/$valor2;
            break;
        case 4:
            $total = $valor1*$valor2;
            break;
        default:
        echo "Essa operação é inválido";
        break;
    }

    echo "Resultado: " .$total;
    ?>
</body>
</html>