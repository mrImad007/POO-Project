<?php

use update as GlobalUpdate;

include('../Model/update.model.php');

class updateConfirmation extends update {
    public function changing(){
        if(isset($_POST['productName'],)){
            $productId = $_GET['productId'];

            $productName = $_POST['productName'];
            $productPrice = $_POST['productPrice'];
            $productImage = $_POST['productImage'];

            $executing = new update();
            $executing->updating($productName,$productPrice,$productImage,$productId);

            header('Location: ../view/index.php');
        }
    }
}

$action = new updateConfirmation();
$action->changing();

?>