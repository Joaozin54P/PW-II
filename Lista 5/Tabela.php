<html>
<head>
    <title>TABELA</title>
</head>
<body>
    <?php
    $codigo = $_POST['txtN1'];

    switch($codigo)
    {
        case 1:
            echo "Você é secretária";
            break;
        case 2:
            echo "Você é Gerente";
            break;
        case 3:
            echo "Você é Operário";
            break;
        case 4:
            echo "Você é Analista";
            break;
        case 5:
            echo "Você é Faxinerio";
            break;
        default:
        echo "Esse código é inválido";
        break;
    }
    ?>
</body>
</html>