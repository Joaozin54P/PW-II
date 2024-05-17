<html>
    <head>
        <title>Peso Ideal</title>
</head>
<body>
    <?php

    $nome = $_POST['txtnome'];
    $peso = $_POST['txtpe'];
    $altura = $_POST['txtal'];
    $sexo = $_POST ['sexo'];

    $PI = $altura*$altura;

    if($sexo == "maculino")
    {
        $pi = $PI*23;
    }
    elseif($sexo == "feminino")
    {
        $pi = $PI*22;
    }

    echo"Segue abaixo as informaões digitadas na página anterior". '<br>';
    echo"Nome digitado...:".$_POST['txtnome']. '<br>';
    echo"Peso...:".$_POST['txtpe']. "kg" .'<br>';
    echo"Sexo...:".$_POST['sexo']. '<br>';
    echo"Altura...:".$_POST['txtal']. '<br>';

    if($peso > $pi)
    {
        echo '<font color="red">'. "Acima do peso" . '</font>';
    }
    elseif ($peso < $pi)
    {
        echo '<font color="yellow">'. "Abaixo do pesso" . '</font>';
    }
    else
    {
        echo '<font color="green">'. "Dentro do peso" . '</font';
    }
 ?>   
</body>
</html> 