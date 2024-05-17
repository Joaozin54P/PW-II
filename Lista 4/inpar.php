<html>
<head>
    <title>Ímpar e Par</title>
</head>
<body>
    <?php
    $pi = $_POST['txtPi'];

    if($pi % 2 == 0)
    {
        echo "O número digitado é Par: " .$pi;
    }
    else
    {
        echo "O número digitado é Ímpar: " .$pi;
    }
    ?>
</body>
</html>