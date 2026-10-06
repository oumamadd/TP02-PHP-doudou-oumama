<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 10 — Traitement GET</title>
</head>
<body>
    <h1>Traitement GET</h1>

    <?php
    if (empty($_GET)) {
        echo "<p>Veuillez remplir et envoyer le formulaire GET.</p>";
    } elseif (
        !isset($_GET["nom"], $_GET["prenom"], $_GET["groupe"])
        || !is_string($_GET["nom"])
        || !is_string($_GET["prenom"])
        || !is_string($_GET["groupe"])
    ) {
        echo "<p>Les trois champs doivent être présents et valides.</p>";
    } else {
        // Supprimer les espaces au début et à la fin.
        $nom = trim($_GET["nom"]);
        $prenom = trim($_GET["prenom"]);
        $groupe = trim($_GET["groupe"]);

        if ($nom === "" || $prenom === "" || $groupe === "") {
            echo "<p>Erreur : remplissez les trois champs.</p>";
        } elseif (!in_array($groupe, ["G1", "G2", "G3", "G4"], true)) {
            echo "<p>Erreur : groupe invalide.</p>";
        } else {
            // Échapper les données avant leur affichage HTML.
            echo "<p>Bienvenue "
                . htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8') . " "
                . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8')
                . ", du groupe "
                . htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8')
                . " !</p>";
        }
    }
    ?>

    <p><a href="ex10_get.html">Retour au formulaire GET</a></p>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>