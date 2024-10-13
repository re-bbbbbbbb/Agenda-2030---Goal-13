<!DOCTYPE html>
<head>
  <title>Visualizzazione Azioni</title>
  <link rel="stylesheet" href="./_styleVisualizza.css">
</head>

<?php include_once "header.html" ?>
<?php include_once "navbar.html" ?>

<br/>

<body>
  <div class="DIVcontainervisualizza">
  <h3>Azioni sostenibili degli utenti</h3>

  <?php
  // Connessione DB
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dati";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verifica connessione
  if ($conn->connect_error) {
      die("Connessione al database fallita: " . $conn->connect_error);
  }

  // Recuperare e mostrare i dati delle azioni
  $sql = "SELECT id_utente, azione, data FROM abitudini_sostenibili";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      echo "<ul>";
      while ($row = $result->fetch_assoc()) {
          echo "<li>Azione: " . $row["azione"] . " - Data: " . $row["data"] . "</li><br/><br/>";
      }
      echo "</ul>";
  } else {
      echo "Nessuna azione sostenibile registrata.";
  }

  $conn->close();
  ?>
  </div>

</body>
</html>