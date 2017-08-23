
<?php

$url ='';
$tags = [];

if ($_POST) {
  // var_dump($_POST);
  if (isset($_POST['url'])) {
    $url = $_POST['url'];
  }

  if (isset($_POST['tags'])) {
    $tags = $_POST['tags'];
  }

}

?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>form-02b</title>
  </head>
  <body>

<div>url : <?= htmlentities($url) ?></div>

<div>tags : </div>

<ul>
<?php
foreach ($tags as $key => $value) {
  echo '<li>' . htmlentities($value) . '</li>';
  echo '<br />';
}
?>
</ul>

  </body>
</html>

<!-- stocker les données de l'user dans :
- la variable $url
- la variable $tags
(boucler avec foreach)-->
