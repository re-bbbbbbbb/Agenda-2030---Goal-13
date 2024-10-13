<!DOCTYPE html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="./_styleRegistrazione.css">
</head>

<?php include_once "header.html" ?>

<?php include_once "navbar.html" ?>

<br/>

<body>
  <div class="DIVcontainerform-1">
  
    <h3>Registrazione utente</h3>

    <form action="_registrazione.php" method="post">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required><br/><br/>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br/><br/>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br/><br/>

      <input type="submit" value="Salva" class="button">
    </form>
  </div>
</body>
</html>