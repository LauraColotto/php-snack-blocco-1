<?php

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

if(empty($name) || empty($email) || empty($age)){
  echo "Accesso Negato, inserisci correttamente i dati";
  die;
}


if(strlen($name) > 3
  && strpos($email, ".") == true
  && strpos($email, "@") == true
  && is_numeric($age))
  {
    echo "Accesso Consentito";
  } else {
    echo "Accesso Negato";
  }

?>
