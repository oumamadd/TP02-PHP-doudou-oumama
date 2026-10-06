
# TP 02 PHP — Programmation Web 2

- Année universitaire : 2026/2027
- Nom : doudou
- Prénom : Oumama
- Groupe : 04

## Exercices

1. Affichage HTML/PHP et commentaires
2. Variables et concaténation
3. Constantes et calculs
4. Types et conversions
5. Conditions et mentions
6. Switch et mois
7. Table de multiplication et pyramide
8. Boucles, continue et break
9. Tableau associatif et notes
10. Formulaires GET et POST
## Exécution locale

Depuis le dossier du projet, lancer dans PowerShell :

    & "C:\xampp\php\php.exe" -S localhost:8000

Puis ouvrir http://localhost:8000/index.php.s
## Exercice 2 — Réponses

Les variables $note et $Note sont différentes car PHP est sensible
à la casse : les majuscules et les minuscules sont distinguées.

Noms valides : $a, $_a, $a_a, $AAA, $a1.
Noms invalides : $a! (caractère interdit), $1a (commence par un chiffre).
## Exercice 4 — Réponse

Avec echo, false est converti en chaîne vide : aucun caractère
n'est affiché. Avec var_dump(), son type et sa valeur apparaissent :
bool(false).
## Exercice 5 — Tests

| Moyenne testée | Message obtenu |
|---|---|
| -1 | Note invalide |
| 9 | Non validé |
| 10 | Passable |
| 12 | Assez bien |
| 14 | Bien |
| 16 | Très bien |
| 21 | Note invalide |
## Exercice 10 — GET et POST

Avec GET, les valeurs apparaissent dans l'URL après le signe ?,
par exemple : ex10_get.php?nom=Amrani&prenom=Lina&groupe=G1.

Avec POST, les valeurs sont envoyées dans le corps de la requête HTTP.
Elles n'apparaissent pas dans l'URL, qui se termine par ex10_post.php.
POST ne chiffre pas les données à lui seul.

Les deux traitements vérifient la présence des champs et refusent
les valeurs vides, y compris les chaînes composées seulement d'espaces.
Les données affichées sont échappées avec htmlspecialchars().