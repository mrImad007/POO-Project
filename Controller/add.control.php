<?php
include('../Model/add.model.php');

class addConfirmation extends add{
    public function confirmation(){
        if(isset($_POST['productName'])){
            $productName = $_POST['productName'];
            $productPrice = $_POST['productPrice'];
            $productImage = $_POST['productImage'];

            $executing = new add();
            $executing->adding($productName,$productPrice,$productImage);
        }
    }
}

$action = new addConfirmation();
$action->confirmation()
//need a form page ofr adding products
?>