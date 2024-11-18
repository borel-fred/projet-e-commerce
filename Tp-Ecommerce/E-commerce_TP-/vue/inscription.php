<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Inscription</title>

</head>
<body>
<div class="tronc">

        <form method="POST" action="target.php" name="myForm">
        <div class="upper">
                <p>Inscrivez vous ici</p>
            </div>
        <input type="text" placeholder="nom"  id="nom" name="nom">
                <span id="error_nom"></span>    

                <input type="text" placeholder="prenom"  id="prenom" name="prenom"/>
                <span id="error_prenom"></span> 

                
                    <input type="text" placeholder="num de telephone"  
                     id="nume" name="num-tel"/>
                    <span id="error-tel"></span>

                
                <input type="email" placeholder="Votre E-mail" class="addresse" name="email"  />
                <input type="date" id="dob"   name="dob" />
                <!-- <input type="text" id="age" placeholder="age" name="age" readonly> -->
             
                <select name="choix" id="choice">
                    <option value="">Choisissez votre sexe</option>
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option> 
                </select>
            
                <div class="down">
                    <button type="submit" id="btn" >Enregistrer</button>
                </div>
            <p>vous avez deja un compte ? <a href="connexion.php">se conneceter</a></p>
        </form>
    </div>
</body>
</html>