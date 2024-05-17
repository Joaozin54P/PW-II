<html>
<head>
    <title>Usuario</title>
</head>
<body>
    <?php
    $usuario = $_POST['txtUS'];
    $senha = $_POST['txtSE'];

    if($usuario == "ETE" && $senha == "ETE" )
    {
        echo "Bem vindo ao sistema! " .$usuario;
    }
    else
    {
        echo "Usuario ou senha inválidas! Tente novamente! ";
    }
    ?>
</body>
</html>