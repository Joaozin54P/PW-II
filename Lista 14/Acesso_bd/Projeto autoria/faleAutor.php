<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/falec.css">
        <title>Bancos de dados - Fale Conosco</title>

        <script language="javascript">
            function Mascara() {
                var evento = window.event;
                var keypress = evento.keyCode;

                // Campo telefone - bloqueia letras e insere na máscara automaticamente
                if (keypress >= 48 && keypress <= 57) {
                    var separado1 = '(';
                    var separado2 = ')';
                    var separado3 = '-';
                    var conjunto1 = 0;
                    var conjunto2 = 3;
                    var conjunto3 = 9;

                    if (document.cadastro.telefone.value.length == conjunto1) {
                        document.cadastro.telefone.value += separado1;
                    }
                    if (document.cadastro.telefone.value.length == conjunto2) {
                        document.cadastro.telefone.value += separado2;
                    }
                    if (document.cadastro.telefone.value.length == conjunto3) {
                        document.cadastro.telefone.value += separado3;
                    }
                    
                    return true;
                } else {
                    return false;
                }
            }

        </script>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
        <div class="container">
            <!-- nav -->
            <?php include 'headerAutor.php' ?>
            <!-- end nav --><br><br>

            <div class="wrapper">
                <h1>Fale Conosco</h1>
                <form method="post" name="cadastro">
                    <div class="input-box">
                        <input type="text" placeholder="Nome" name="nome" maxlength="15" required>
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="input-box">
                        <input type="email" placeholder="Email" name="email" maxlength="80" required>
                        <i class="bi bi-envelope-at-fill"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Telefone" name="telefone" maxlength="14" required onkeypress="return Mascara()">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <button type="submit" name="btnconsultar" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </body>
</html>
