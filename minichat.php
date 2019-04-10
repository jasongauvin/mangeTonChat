
<?php
    // demarrage session
    if(!isset($_SESSION))
    {
        session_start();
    }
// Récupération des paramètres utiles
    $pseudo   = isset($_SESSION['pseudo']) ? $_SESSION['pseudo'] : '';?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mangeTonChat</title>
</head>
<body>
    <h1>mangeTonChat</h1>
    <p>Bienvenue à toi !</p>
    <p>Respect, courtoisie et douceur sont de mise sur ce chat. Merci.</p>

    <h2>ENVOYER</h2>
    <div class="message_send">
        <form method="post" action="minichat_post.php">
            <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" required placeholder="Pseudo"
                <?php echo empty($pseudo) ? 'autofocus' : "value=\"$pseudo\""; ?> >
            <br>
            <label for="message">Message</label> : <textarea name="message" id="pseudo" cols="30" rows="10" placeholder="Message"
             <?php if (!empty($pseudo)) echo 'autofocus'; ?> ></textarea>
            <br>
            <input type="submit" value="Send !">
        </form>
    </div>

    <h2>MESSAGES</h2>
    <?php
    // connexion à la db "minichat"
    try
    {
        // On se connecte à MySQL
        $db = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
    // si tout vas bien on continue


    // je construis ma requete
    $reqAll = 'SELECT id, pseudo, message, DATE_FORMAT(date_send, "%d/%m/%Y %Hh%imin%ss"  ) as date_send 
            FROM message';
    $reqPseudo = 'WHERE'.isset($_POST['pseudo']);
    $reqLimit = ' LIMIT 0, 10';
    $reqOrder = ' ORDER BY id DESC';

    // je prepare et execute ma requete
    $reponse = $db->prepare($reqAll.$reqOrder.$reqLimit)or die(print_r($db->errorInfo()));
    $reponse->execute();

    // j'affiche ma requete

    foreach ($reponse as $message){
        echo '<h4>'.$message['pseudo'].'</h4>
            <p>'.$message['date_send'].'</p>
            <p>'.$message['message'].'</p>';
    }
    ?>
</body>
</html>
