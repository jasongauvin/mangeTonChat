<?php
if ((isset($_POST['pseudo']) AND htmlspecialchars($_POST['pseudo'] ==  "admin")) AND
    (isset($_POST['password']) AND htmlspecialchars($_POST['password'] ==  "kangourou"))) // Si le mot de passe est bon
{
    header('Location: minichat.php');
}
else // Sinon, on affiche un message d'erreur
{
    echo '<p>Mot de passe incorrect</p>';
    echo '<a href="connexion.php">Try again</a>';
}
