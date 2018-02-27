<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page secrète</title>
</head>

<body>
    <h1> LA NASA VOUS DIT HELLO </h1>

    <p>
        <strong> Bienvenue sur le site de la NASA. </strong>
    </p>

    <?php
    if (isset($_POST['mdp']) && $_POST['mdp'] == "kangourou") { // si le mot de passe est bon on affiche les codes secrets
        ?> 
        </p> Nous allons vous révéler des secrets que beaucoup voudraient découvrir.
        <br>
        <p> voici l'information top secrète : </p>
        <p style='color:green'> la curiosité est un vilain défaut </p>

        <?php
    } else { //sinon on affiche le message d'erreur
        ?>
            <p>
                <strong> Le mot de passe entré est faux </strong>
            </p>
            <p> Vous n'avez pas l'autorisation. Vous ne trouverez jamais le mot de passe. hahahahaha </p>
            <?php
    } ?>

</body>

</html>