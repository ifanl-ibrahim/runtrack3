<?php
session_start();
include ("./controler_account.php");
$user = new User();
var_dump($_SESSION['email']);
if(isset($_POST['deco'])){
    $user->disconnect();
}
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack3</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="inscription.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <header>
    </header>