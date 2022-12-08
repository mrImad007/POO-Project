<?php
    // connection à la base des données
    function connectPdo(){
        $pdo = new PDO("mysql:host=localhost;port=3306;dbname=brief5;charset=utf8",'root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

?>