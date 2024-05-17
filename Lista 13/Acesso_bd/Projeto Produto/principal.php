<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/pprincipal.css">
        <link rel="stylesheet" href="CSS/header.css">
        <title>Bancos de dados-Principal</title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        
        <!-- nav -->
        <?php include_once 'header.php' ?>
            <!-- end nav -->
        <br><br>
        <div class="container">
            <div class="text-bx">
              <h1>Produto</h1>
              <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">
                  <a href="listar.php" style="color: inherit; text-decoration: none;">Listar</a>
                </button>
                <button class="btn btn-primary" type="button">
                  <a href="cadastrar.php" style="color: inherit; text-decoration: none;">Incluir</a>
                </button>
                <button class="btn btn-primary" type="button">
                  <a href="consultar_alterar.php" style="color: inherit; text-decoration: none;">Alterar</a>
                </button>
                <button class="btn btn-primary" type="button">
                  <a href="excluir.php" style="color: inherit; text-decoration: none;">Excluir</a>
                </button>
                <button class="btn btn-primary" type="button">
                  <a href="pesquisar.php" style="color: inherit; text-decoration: none;">Pesquisar</a>
                </button>
              </div>
            </div>
        </div>
    </body>
</html>