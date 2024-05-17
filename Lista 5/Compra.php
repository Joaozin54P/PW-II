<html>
    <head>
        <title>Compra</title>
</head>
<body>
    <?php
    $com = $_POST['txtC'];

    if($com > 100)
    {
        echo "A compra passou de cem " .$com;
    }
    else
    {
        echo "A compra é igual a cem " .$com;
    }
    ?>
    </body>
    </html>