<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7 — Boucles for</title>
</head>
<body>
    <h1>Exercice 7 : Boucles for</h1>

    <section>
        <h2>Table de multiplication de 7</h2>

        <?php
        $nombre = 7;

        // Afficher les multiplications de 1 à 10.
        for ($multiplicateur = 1; $multiplicateur <= 10; $multiplicateur++) {
            $resultat = $nombre * $multiplicateur;
            echo "<p>" . $nombre . " × " . $multiplicateur
                . " = " . $resultat . "</p>";
        }
        ?>
    </section>

    <section>
        <h2>Pyramide de six lignes</h2>

        <pre><?php
        // La boucle extérieure choisit la ligne.
        for ($ligne = 1; $ligne <= 6; $ligne++) {
            // La boucle intérieure affiche les étoiles de cette ligne.
            for ($etoile = 1; $etoile <= $ligne; $etoile++) {
                echo "*";
            }
            echo "\n";
        }
        ?></pre>
    </section>

    <a href="index.php">Retour à l'accueil</a>
</body>
</html>