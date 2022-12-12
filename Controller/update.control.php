<?php

use update as GlobalUpdate;

include('../Model/update.model.php');

class updateConfirmation extends update {
    public function changing(){
        if(isset($_POST['productId'])){
            $productId = $_POST['productId'];

            $productName = $_POST['productName'];
            $productPrice = $_POST['productPrice'];
            

            $executing = new update();
            $executing->updating($productName,$productPrice,$productId);

            header('Location: ../view/kArrival.php');
        }
        
    }
}

$action = new updateConfirmation();
$action->changing();

?>