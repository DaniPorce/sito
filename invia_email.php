<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati dal modulo HTML
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $numero_cellulare = $_POST['numero_cellulare'];
    $messaggio = $_POST['messaggio'];

    // Destinatario dell'email
    $destinatario = 'danieleporcelli123@gmail.com';

    // Oggetto dell'email
    $oggetto = 'Nuovo messaggio da ' . $nome . ' ' . $cognome;

    // Corpo dell'email
    $corpo_messaggio = "Nome: $nome\nCognome: $cognome\nEmail: $email\nNumero di cellulare: $numero_cellulare\nMessaggio:\n$messaggio";

    // Invia l'email
    $esito = mail($destinatario, $oggetto, $corpo_messaggio);

    if ($esito) {
        // Email inviata con successo
        echo '<p>Grazie per averci contattato. Ti risponderemo presto.</p>';
    } else {
        // Errore nell'invio dell'email
        echo '<p>Si è verificato un errore nell\'invio del messaggio. Riprova più tardi.</p>';
    }
}
?>
