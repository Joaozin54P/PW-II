<html>
    <head>
        <title>Maior e menor</title>
</head>
<body>
    <?php
    $pr = $_POST['txtp'];
    $se = $_POST['txts'];
    $te = $_POST['txtt'];

    if($pr > $se)
    {
        echo "O numero maior é " .$pr " e o menor é " .$se;
    }
    if($se > $pr)
    {
        echo "O numero maior é " .$se " e o menor é " .$pr;
    }
    if($te> $pr)
    {
        echo "O numero maior é " .$te " e o menor é " .$pr;
    }
    ?>
    </body>
    </html>