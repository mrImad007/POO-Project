<?php
    include('../Controller/login.control.php');

    class loginout extends connecting{
        public function gettingOut(){
            session_start();

            session_unset();
            session_destroy();

            header('Location: ../view/index.php');
        }
    }

    $execution = new loginout;
    $execution->gettingOut();
?>