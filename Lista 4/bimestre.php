<html>
    <head>
        <title>Bimestres</title>
</head>
<body>
    <?php
     $Pri =$_POST['txtP'];
     $Seg =$_POST['txtS'];
     $Ter =$_POST['txtT'];
     $Qua =$_POST['txtQ'];
     $media = ($Pri + $Seg + $Ter + $Qua) / 4;
     
     if($media >= 5)
     {
        echo "Você está aprovado com média " . $media;
    }
    else
    {
        echo "Você está reprovado com média " . $media;
    }
    ?>
    </body>
    </html>