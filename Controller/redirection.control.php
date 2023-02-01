<?php
include('../Controller/login.control.php');

class redirection extends logInnn{
    public function redirecting(){
        session_start();
        if(!isset($_SESSION['login'])){
            header('Location: ../view/signin.php');
        }else{
            header('Location: ../view/dashboard.php');
        }
    }
}

$exe = new redirection;
$exe->redirecting();
?>