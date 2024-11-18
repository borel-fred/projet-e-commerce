<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Connexion</title>
</head>
<body>
    <div class="tronc">
        <form action="">
            <div class="upper">
                <p>CONNECTER VOUS</p>
            </div>
        <input type="text" placeholder="nom"  id="nom" name="nom">
            <span id="error_nom"></span>    

            <input type="email" placeholder="Votre E-mail" class="addresse" name="email"  />

            <input type="submit" value="soumetre" class="btn-btn">

            <div class="inscrit"><p>Pas de compte?</p> <a href="inscription.php">creer un compte</a></div>
        </form>
    </div>
</body>
</html>