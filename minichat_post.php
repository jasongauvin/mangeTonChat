<?php

if(!isset($_SESSION))
{
    session_start();
}
include 'minichat.php';
$pseudo = htmlspecialchars($_POST['pseudo'] ?? 'NOT NULL');
$message = htmlspecialchars($_POST['message'] ?? 'NOT NULL');

if (!empty($pseudo)) {
    $_SESSION['pseudo'] = $pseudo;
}

if (empty($pseudo) || empty($message)) {
    $_SESSION['error'] = 'Merci de renseigner tous les champs';
} else {
    // Effectuer ici la requête qui insère le message
    $req = $db->prepare('INSERT INTO message(pseudo, message, date_send) 
                                   VALUES(:pseudo, :message, NOW())')
    or die(print_r($db->errorInfo()));
    $req->execute(array(
        'pseudo' => $pseudo,
        'message' => $message
    ));
}


// Effectuer ici la requête qui insère le message
// Puis rediriger vers minichat.php comme ceci :

header('Location: minichat.php');