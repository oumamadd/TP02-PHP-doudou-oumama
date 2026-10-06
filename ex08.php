<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8 — Contrôle des boucles</title>
</head>
<body>
    <h1>Exercice 8 : Contrôle des boucles</h1>

    <h2>1. Nombres pairs de 0 à 20</h2>
    <p>
        <?php
        $nombrePair = 0;

        while ($nombrePair <= 20) {
            // Mettre uniquement 10 en gras.
            if ($nombrePair == 10) {
                echo "<strong>" . $nombrePair . "</strong> ";
            } else {
                echo $nombrePair . " ";
            }

            $nombrePair += 2;
        }
        ?>
    </p>

    <h2>2. Comparaison entre while et do-while</h2>
    <?php
    $compteur = 5;
    $executionsWhile = 0;

    while ($compteur < 5) {
        $executionsWhile++;
        $compteur++;
    }

    // Réinitialiser le compteur avant la seconde boucle.
    $compteur = 5;
    $executionsDoWhile = 0;

    do {
        $executionsDoWhile++;
        $compteur++;
    } while ($compteur < 5);

    echo "<p>while : " . $executionsWhile . " exécution.</p>";
    echo "<p>do-while : " . $executionsDoWhile . " exécution.</p>";
    ?>

    <h2>3. Utilisation de continue et break</h2>
    <p>
        <?php
        for ($compteur = 1; $compteur <= 20; $compteur++) {
            // Arrêter avant d'afficher 16.
            if ($compteur == 16) {
                break;
            }

            // Ignorer les multiples de 3.
            if ($compteur % 3 == 0) {
                continue;
            }

            echo $compteur . " ";
        }
        ?>
    </p>

    <a href="index.php">Retour à l'accueil</a>
</body>
</html>