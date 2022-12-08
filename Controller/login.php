<?php
require_once('../Model/database.php');
session_start();

if(!isset($_SESSION['username'])){
  if (isset($_POST['username'])){
    
    $pdo = connectPdo();

    $name = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `admin` WHERE username = '$name' AND `password` = '$password' ";
    $stet = $pdo->prepare($query);
    $stet->execute();
    $user = $stet->fetchAll(PDO::FETCH_ASSOC);
    
    if (!$user){
      header('Location: ../Vue/index.php');
    }
    else{
      $_SESSION['username'] = $name;
      header('Location: ../Vue/kArrival.php');
    }
  }
}
?>