<html>
    <head>
        <title>Variaveis</title>
</head>
<body>
    <?php
    $A = $_POST['txtA'];
    $B = $_POST['txtB'];

    echo "Essa é antes da troca:  a= " . $A . " e b= " . $B . "<br>";

    //o temp é utilizado para armazenar temporariamente os valores
    $temp = $A;
    $A = $B;
    $B = $temp;

    echo "Esse é depois da trocada: a= " . $A . " e b= " . $B;
    ?>
    </body>
    </html>