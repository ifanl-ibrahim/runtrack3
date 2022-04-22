<?php

function valid_data($data) {
  //trim supprime les espaces inutiles
  $data = trim($data);
  //stripslashes supprime les antishlashs
  $data = stripslashes($data);
  //htmlspecialchars permet de transformer les caractères spéciaux en caractère HTML
  $data = htmlspecialchars($data);
  return $data;
}

class User {
  private $_link;
  private $_id;
  public $_nom;
  public $_prenom;
  public $_email;
  public $_password;
  



  ////////////////////////////////////////////////////////////////////// Fonction connexion à la BDD



  public function __construct() {
    $conn = new PDO("mysql:host=localhost; dbname=utilisateurs", 'root', '');
    $this->_link = $conn;
  }



  /////////////////////////////////////// Fonction JS pour récupéré les donnée en bdd



  public function fetch($_email) {
    $link = $this->_link;
    $_email = htmlspecialchars($_email);

    $email = trim($_email);
    $verif = "SELECT `email` FROM `utilisateurs` WHERE `email` = '$email'";
    $query = $link->query($verif);
    $table = [];
    array_push($table, $query);
    return $table;
  }
}
?>