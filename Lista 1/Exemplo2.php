<html>
    <head>

    <title> Aula  Exemplo do Uso de Variáveis </title>

</head>

<body>
    <?php
    //Declarando variáveis

    $var1 = 1; //Inteiro
    $varX = 9.50; //Ponto Flutuante
    $varY = 9.50; //Ponto Flutuante
    $var2 = $varX + $varY; //Recebendo o resultado de uma Expressão

    $varSTR = "Atribui String"; // Variável texto - string
    $varletra = "a";  // variável caracter                
    $varbool = true; // atribuição lógica
    
    echo "Exemplo de uma aplicação em PHP";               
    print "<P>";

    echo "Conteúdo de var1:  ";
    echo $var1;
    print "<P>";

    echo "Conteúdo de varX:  ";
    echo $varX;
    print "<P>";

    echo "Conteúdo de var2:  ";
    echo $var2;
    print "<P>";

    echo "Conteúdo de varSTR:  ";
    echo $varSTR;
    print "<P>";

    echo "Conteúdo de varletra:  ";
    echo $varletra;
    print "<P>";

    echo "Conteúdo de varbool:  ";              
    echo $varbool;
    
    ?>

</body>
</html>