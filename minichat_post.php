<?php
include 'minichat.php';
$pseudo = htmlspecialchars($_POST['pseudo'] ?? 'NOT NULL');
$message = htmlspecialchars($_POST['message'] ?? 'NOT NULL');

// Effectuer ici la requête qui insère le message
$req = $db->prepare('INSERT INTO message(pseudo, message) 
                                   VALUES(:pseudo, :message)')
or die(print_r($db->errorInfo()));
$req->execute(array(
    'pseudo' => $pseudo,
    'message' => $message
));

// Effectuer ici la requête qui insère le message
// Puis rediriger vers minichat.php comme ceci :

header('Location: minichat.php');