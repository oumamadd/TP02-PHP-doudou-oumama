<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 1 — Affichage PHP</title>
</head>
<body>
    <h1>Exercice 1</h1>

    <?php
    // Afficher le message de bienvenue.
    echo "<p>Bienvenue dans mon TP PHP</p>";

    /*
     * Le nom et le prénom utilisés
     * sont des données fictives.
     */
    echo "<p>Nom : Amrani</p>";
    echo "<p>Prénom : Lina</p>";
    echo "<p>Groupe : G1</p>";
    ?>

    <p><?= "J'apprends à intégrer PHP dans une page HTML." ?></p>

    <a href="index.php">Retour à l'accueil</a>
</body>
</html>