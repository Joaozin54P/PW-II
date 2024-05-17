<html>
    <head>
        <title>Calculadora</title>
</head>
<body>
<?php
     $numero =$_POST['txtA'];
     $nume =$_POST['txtB'];
     $operador =$_POST['txtop'];
     switch($operador)
     {
         case 1:
             $total = $numero+$nume;
             break;
         case 2:
             $total = $numero-$nume;
             break;
         case 3:
             $total = $numero/$nume;
             break;
         case 4:
             $total = $numero*$nume;
             break;
         default:
             echo "Essa operação não existe";
             break;
     }
    ?>
    </body>
    </html>