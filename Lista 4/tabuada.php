<html>
    <head>
        <title>tabuada</title>
</head>
<body>
    <?php
    $i=0;
    $num =$_POST['txtNum'];
    while($i <= 10)
    {
        $tab = $num*$i;
        echo $num. 'X' .$i. '=' .$tab. '<br/>';
        $i++;
    }
    ?>
    </body>
    </html>