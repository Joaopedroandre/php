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
    <div>
    <h1>Página form.php</h1>
      <h3>Tela de login</h3>
      <form action="apresentar.php" method="get">
          <label>Login: </label>
          <input type="text" name="login"/><br/><br/>
          <label>Email: </label>
          <input type="text" name="email"><br/><br/>
          <label>CEP: </label>
          <input type="text" name="CEP"><br/><br/>
          <label>CPF: </label>
          <input type="text" name="CPF"><br/><br/>
          <input type="submit" value="Entrar">
          <input type="reset" value="Limpar">
      </form>
    </div>
  </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>