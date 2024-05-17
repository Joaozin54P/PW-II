<html>
    <head>
        <title>Maior ou Igual</title>
</head>
<body>
    <?php
    $A = $_POST['txtNum'];

    if($A > 0)
    {
        echo '<font color="blue">'. "O número passou de zero " .$A . '</font>';
    }
    else
    {
        echo '<font color="red">'. "O número é menor que zero " .$A . '</font>';
    }
    
        
   
    ?>
    </body>
    </html>