<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 10 — Traitement POST</title>
</head>
<body>
    <h1>Traitement POST</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        echo "<p>Veuillez remplir et envoyer le formulaire POST.</p>";
    } elseif (
        !isset($_POST["nom"], $_POST["prenom"], $_POST["groupe"])
        || !is_string($_POST["nom"])
        || !is_string($_POST["prenom"])
        || !is_string($_POST["groupe"])
    ) {
        echo "<p>Les trois champs doivent être présents et valides.</p>";
    } else {
        // Supprimer les espaces au début et à la fin.
        $nom = trim($_POST["nom"]);
        $prenom = trim($_POST["prenom"]);
        $groupe = trim($_POST["groupe"]);

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

    <p><a href="ex10_post.html">Retour au formulaire POST</a></p>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>