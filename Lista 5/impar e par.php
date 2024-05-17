<html>
<head>
    <title>Par e impar</title>
</head>
<body>
    <?php
    $impar = $_POST['txtNum'];

    if($impar % 2 == 0)
    {
        echo "O número digitado é Par: " .$impar;
    }
    else
    {
        echo "O número digitado é Ímpar: " .$impar;
    }
    ?>
</body>
</html>