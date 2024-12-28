<?php
session_start();  // Start the session at the beginning
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('./client/header.php') ?>
</head>
<body>
    <?php 
    include('./client/commonFiles.php');

    if(isset($_GET['signUp']) && (!isset($_SESSION['user']) ||!isset($_SESSION['user']['username']))){
        include('./client/signUp.php');
    }if(isset($_GET['login'])){        
        include('./client/login.php');
    }
    if(isset($_GET['ask'])&& (isset($_SESSION['user']) ||isset($_SESSION['user']['username']))){
        include('./client/ask.php');
    }
    ?>
</body>
</html>