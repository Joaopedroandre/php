<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>João Talarico</title>
    </head>
    <body>
        <h1>Página apresentar.php </h1>
        <p><b>Login recebido foi: </b><?php echo $_GET["login"]; ?> </p>
        <p><b>Email recebido foi: </b><?php echo $_GET["email"]; ?> </p>
        <p><b>CEP recebido foi: </b><?php echo $_GET["CEP"]; ?> </p>
        <p><b>CPF recebido foi: </b><?php echo $_GET["CPF"]; ?> </p>
        <br/>
        <a href="index.php">Voltar: form.php</a>
    </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>