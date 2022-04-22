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



  /////////////////////////////////////////////////////////////////// Fonction pour créer l'utilisateur en BDD



  public function register($_nom, $_prenom, $_email, $_password, $_confirm_password) {
    $link = $this->_link;
    $_nom = htmlspecialchars($_nom);
    $_prenom = htmlspecialchars($_prenom);
    $_email = htmlspecialchars($_email);
    $_password = htmlspecialchars($_password);
    $_confirm_password = htmlspecialchars($_confirm_password);

    $nom = trim($_nom);
    $prenom = trim($_prenom);
    $email = trim($_email);
    $password = trim($_password);
    $confirm = trim($_confirm_password);
    $crypt = password_hash($password, PASSWORD_BCRYPT);
    $verif = "SELECT `email` FROM `utilisateurs` WHERE `email` = '$email'";
    $query = $link->query($verif);

    if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($password) && !empty($confirm)) {
      if ($query->fetch(PDO::FETCH_ASSOC) == 0) {
        if ($password == $confirm) {
          $query = "INSERT INTO `utilisateurs`(`nom`, `prenom`, `email`, `password`) VALUES ('$nom', '$prenom', '$email', '$crypt')";
          $link->query($query);
          header("Location:connexion.php");
        } 
        else echo '<br>Les mots de passe ne sont pas identiques.<br>';
      } 
      else echo '<br>Cette adresse mail n\'est pas valide<br>';
    } 
    else echo '<br>Veuillez remplir le formulaire s\'il vous plait ! <br>';
  }



  ////////////////////////////////////// Fonction qui vérifie les informations en BDD pour se connecter avec le bon utilisteur 



  public function connect($_email, $_password) {

    $_email = htmlspecialchars($_email);
    $_password = htmlspecialchars($_password);

    $link = $this->_link;

    $SQL = "SELECT * FROM utilisateurs WHERE email = '$_email'";
    $query = $link->query($SQL);
    $user = $query->fetch(PDO::FETCH_ASSOC);
    if ($_password == null) {
      echo 'remplissez tout les champs';
    } 
    else {
      if (password_verify($_password, $user['password'])) {
        $_SESSION['email'] = $user;
        header("location: index.php");
      } 
      else {
        echo "<br>L'adresse mail ou le mot de passe n'est pas correct ! <br>";
        }
      }
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



  ///////////////////////////////////////////////////// Fonction pour déconnecter l'utilisateur



  public function disconnect()
  {
    $this->_email = '';
    $this->_password = '';
    session_destroy();
    header("refresh: 0.1; url=index.php");
  }



  //////////////////////////////////// Fonction pour Blocker les pages qui ne doivent pas etre vu 
  
  
  
  public function block() {

  if (isset($_SESSION['email'])) {
    $_SESSION['email'];
    header ("location:index.php");}
  }
}
?>