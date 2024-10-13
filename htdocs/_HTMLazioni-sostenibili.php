<!DOCTYPE html>
<head>
  <title>Registrazione Azioni</title>
  <link rel="stylesheet" href="./_styleAzioni.css">
</head>

<?php include_once "header.html" ?>
<?php include_once "navbar.html" ?>

<br/>

<body>
  <div class="DIVcontainerform-2">
  
    <h3>Registra azioni sostenibili</h3>
  
    <form action="_registra_azioni.php" method="post">
      <label for="azione">Azione sostenibile:</label>
      <input type="text" id="azione" name="azione" required><br/><br/>

      <input type="submit" value="Salva" class="button">
    </form>
  </div>
</body>
</html>