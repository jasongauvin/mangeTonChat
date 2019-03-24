<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion à mangeTonChat</title>
</head>
<body>
<p>Veuillez entrer votre pseudo et votre mot de passe pour pour vous connectez au serveur "mangeTonChat"</p>
    <div class="connexion">
        <form method="post" action="connexion_post.php">
            <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo">
            <br>
            <label for="password">Password</label> : <input type="password" name="password" id="password">
            <br>
            <input type="submit" value="Send !">
        </form>
    </div>
</body>
</html>