<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dati";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica connessione
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

// Recuperare azione dal form
if (isset($_POST['azione'])) {
    $azione = $_POST['azione'];

    // Inserire azione nel database
    $sql = "INSERT INTO abitudini_sostenibili (azione, data) VALUES (?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $azione);

    if ($stmt->execute()) {
        echo "Azione sostenibile registrata con successo!";
        header("Location: _visualizza_azioni.php");
        exit();
    } else {
        echo "Errore durante la registrazione dell'azione: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Errore: azione non inviata";
}
?>