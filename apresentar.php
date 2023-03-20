<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>João Talarico</title>
    </head>
    <body>
        <h1>Página apresentar.php </h1>
        <p><b>Login recebido foi: </b><?php echo $_GET["login"]; ?> </p>
        <p><b>Email recebido foi: </b><?php echo $_GET["email"]; ?> </p>
        <br/>
        <a href="index.php">Voltar: form.php</a>
    </body>
</html>