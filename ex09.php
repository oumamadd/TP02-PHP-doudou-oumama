<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9 — Tableau de notes</title>
</head>
<body>
    <h1>Exercice 9 : Notes de la classe</h1>

    <?php
    // Jeu de données fictives.
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    $sommeNotes = 0;
    $nombreValides = 0;
    $meilleureNote = -1;
    $meilleurEtudiant = "";
    ?>

    <table border="1" cellpadding="8">
        <tr>
            <th>Étudiant</th>
            <th>Note</th>
            <th>Résultat</th>
        </tr>

        <?php foreach ($notes as $etudiant => $note): ?>
            <?php
            $sommeNotes += $note;

            if ($note >= 10) {
                $resultat = "Validé";
                $nombreValides++;
            } else {
                $resultat = "Non validé";
            }

            // Conserver la meilleure note et le nom correspondant.
            if ($note > $meilleureNote) {
                $meilleureNote = $note;
                $meilleurEtudiant = $etudiant;
            }
            ?>
            <tr>
                <td><?= htmlspecialchars($etudiant, ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= $note ?></td>
                <td><?= $resultat ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?php
    $moyenneClasse = $sommeNotes / count($notes);
    ?>

    <p>Somme des notes : <?= $sommeNotes ?></p>
    <p>Moyenne de la classe : <?= $moyenneClasse ?></p>
    <p>Nombre d'étudiants ayant validé : <?= $nombreValides ?></p>
    <p>
        Meilleure note :
        <?= htmlspecialchars($meilleurEtudiant, ENT_QUOTES, 'UTF-8') ?>
        avec <?= $meilleureNote ?>/20.
    </p>

    <a href="index.php">Retour à l'accueil</a>
</body>
</html>