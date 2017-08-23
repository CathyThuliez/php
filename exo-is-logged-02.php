<?php

// si l'utilisateur est loggé, le rediriger vers duckduckgo.com
// si non afficher le message : "vous n'êtes pas loggé"

if (ISSET($SESSION['logged']) && $_SESSION['logged']) {
  $url = "http://duckduckgo.com";
  header("location: " . $url, true, 302);
} else {
  echo "Vous n\'êtes pas loggé";
}
