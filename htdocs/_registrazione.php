<?php
// Connessione database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dati";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica connessione
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

// Recuperare dati dal form
$nome = $_POST['nome'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Inserire dati nel database
$sql = "INSERT INTO utenti (nome, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nome, $email, $password);

if ($stmt->execute()) {
    echo "Registrazione avvenuta con successo!";
    header("Location: _HTMLazioni-sostenibili.php");
    exit();
} else {
    echo "Errore durante la registrazione: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>