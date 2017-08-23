<!-- créer un formulaire de login :
- champ login
- champ password

récupérer ses données côté php puis :
- afficher les données de l'user dans les champs correspondants
- vérifier que :
-le login correspond à "toto"
- le password correspond à "123"
- afficher un message d'erreur si le login ou le mot de passe sont faux
- afficher un message de bienvenue si le login et le password sont corrects -->

<?php

$login = '';
$password = '';
$message = '';


if ($_POST) {
  //var_dump($_POST);

  if (isset($_POST['login'])) {
    $login = $_POST['login'];
  }
  if (isset($_POST['password'])) {
    $password = $_POST['password'];
  }
if ($login == 'toto' && $password == '123') {
  $message = 'Bienvenue !';
} else {
  $message = 'Votre login ou votre mot de passe est erroné';
}

}

?><!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

<div><?= htmlentities($message) ?></div>

  <form action="login.php" method="post">

    <input type="text" name="login" value="<?=htmlentities($login);?>" placeholder="login" /><br />

    <input type="password" name="password" value="<?=htmlentities($password);?>" placeholder="mot de passe" /><br />

    <input type="submit" value="Envoyer" />

  </form>

</body>
</html>
