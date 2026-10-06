<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3 — Constantes et calculs</title>
</head>
<body>
    <h1>Exercice 3 : Récapitulatif de commande</h1>

    <?php
    // Constantes données par l'exercice.
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    $prixUnitaireHT = 60;
    $quantite = 3;

    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = $totalHT * TAUX_TVA / 100;
    $totalTTC = $totalHT + $montantTVA;

    // Conserver le total TTC avant d'ajouter la livraison.
    $montantFinal = $totalTTC;
    $montantFinal += 15;
    ?>

    <table border="1" cellpadding="8">
        <tr>
            <th>Élément</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td>Prix unitaire HT</td>
            <td><?= $prixUnitaireHT . " " . DEVISE ?></td>
        </tr>
        <tr>
            <td>Quantité</td>
            <td><?= $quantite ?></td>
        </tr>
        <tr>
            <td>Total HT</td>
            <td><?= $totalHT . " " . DEVISE ?></td>
        </tr>
        <tr>
            <td>TVA (<?= TAUX_TVA ?> %)</td>
            <td><?= $montantTVA . " " . DEVISE ?></td>
        </tr>
        <tr>
            <td>Total TTC</td>
            <td><?= $totalTTC . " " . DEVISE ?></td>
        </tr>
        <tr>
            <td>Livraison</td>
            <td><?= "15 " . DEVISE ?></td>
        </tr>
        <tr>
            <td>Montant final</td>
            <td><?= $montantFinal . " " . DEVISE ?></td>
        </tr>
    </table>

    <p>
        <?= defined("TAUX_TVA")
            ? "La constante TAUX_TVA existe."
            : "La constante TAUX_TVA n'existe pas." ?>
    </p>

    <a href="index.php">Retour à l'accueil</a>
</body>
</html>