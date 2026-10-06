<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4 — Types et conversions</title>
</head>
<body>
    <h1>Exercice 4 : Types et conversions</h1>

    <?php
    // Six valeurs de types différents.
    $entier = 42;
    $chaine = "42";
    $decimal = 15.8;
    $vrai = true;
    $faux = false;
    $valeurNulle = null;
    ?>

    <h2>1. Types et valeurs</h2>
    <pre><?php
    echo "Entier : ";
    var_dump($entier);

    echo "Chaîne : ";
    var_dump($chaine);

    echo "Décimal : ";
    var_dump($decimal);

    echo "Vrai : ";
    var_dump($vrai);

    echo "Faux : ";
    var_dump($faux);

    echo "Valeur nulle : ";
    var_dump($valeurNulle);
    ?></pre>

    <h2>2. Conversions</h2>
    <pre><?php
    echo '"42" converti en entier : ';
    var_dump((int) $chaine);

    echo "15.8 converti en entier : ";
    var_dump((int) $decimal);

    echo "42 converti en chaîne : ";
    var_dump((string) $entier);
    ?></pre>

    <h2>3. Affichage des booléens</h2>
    <p>true avec echo : [<?php echo $vrai; ?>]</p>
    <p>false avec echo : [<?php echo $faux; ?>]</p>

    <pre><?php
    echo "true avec var_dump : ";
    var_dump($vrai);

    echo "false avec var_dump : ";
    var_dump($faux);
    ?></pre>

    <h2>4. Conversions en booléens</h2>
    <pre><?php
    echo "0 en booléen : ";
    var_dump((bool) 0);

    echo '"0" en booléen : ';
    var_dump((bool) "0");

    echo '"PHP" en booléen : ';
    var_dump((bool) "PHP");

    echo "Tableau vide en booléen : ";
    var_dump((bool) []);
    ?></pre>

    <a href="index.php">Retour à l'accueil</a>
</body>
</html>