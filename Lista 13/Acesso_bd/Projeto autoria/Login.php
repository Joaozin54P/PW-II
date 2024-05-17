<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="CSS/login.css">
        <title>Bancos de dados</title>

        <script language=javascript>
  function blokletras(keypress) {
    // Campo senha - bloqueia letras
    if (keypress >= 48 && keypress <= 57) {
      return true;
    } else {
      return false;
    }
  }
</script>

    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        

    <div class="wrapper">
    <h1>Login</h1>
    <?php
    if (isset($_GET['login_error'])) {
        echo '<p class="error-message">Usuário ou senha inválidos. Tente novamente.</p>';
    }
    ?>
    <form method="post">
        <div class="input-box">
            <input type="text" placeholder="Usuário" name="usuario" maxlength="15" required>
            <i class="bi bi-person-fill"></i>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Senha" name="senhaa" maxlength="4" required onkeypress="return blokletras(window.event.keyCode)">
            <i class="bi bi-key-fill"></i>
        </div>
        <button type="submit" name="btnconsultar" class="btn btn-primary">Entrar</button>
    </form>
</div>



<?php
extract($_POST, EXTR_OVERWRITE);

if (isset($btnconsultar)) {
    include_once 'Usuario.php';
    $u = new Usuario();
    $u->setLogin($usuario);
    $u->setSenha($senhaa); // Converta a senha para inteiro
    $pro_bd = $u->logar();

    $existe = false;

    foreach ($pro_bd as $pro_mostrar) {
        $existe = true;
        ?>
        <br><b class="welcome-text"> <?php echo "Bem-vindo! Usuário: " . $pro_mostrar[0]; ?> <br><br>
        <center>
        <a href="banco.php" class="btn btn-primary">Entrar</a>
        </center>
        <?php
    }

    if ($existe == false) {
        header("location: login.php?login_error=true");
        exit;
    }
}
    ?>
    </body>
</html>