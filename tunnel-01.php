<?php

// * dans tunnel-01.php créer un formulaire avec :
//   - champ texte nommé "product"
//   - champ numérique nommé "quantity"
// le formulaire doit envoyer les données à tunnel-02.php
//
// * dans tunnel-02.php, récupérer les données et insérez-les dans les clés "product" et "quantity" de la variable de session.
// ajouter un lien nommé "commander" qui renvoit vers la page tunnel-03.php
//
// * dans tunnel-03.php, afficher les clés "product" et "quantity" de la variable de session.
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<title>exo</title>
</head>
<body>

<form action="tunnel-02.php" method="post">

  <label>Article </label><input type="text" name="product" placeholder="Produit" /><br />

  <label>Quantité </label><input type="number" name="quantity" placeholder="Quantité" /><br />

  <input type="submit" value="Valider" />

</form>
</body>
</html>
