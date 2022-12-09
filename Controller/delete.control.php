<?php
include('../Model/delete.model.php');

class deleteConfirmation extends delete{
    public function confirmation(){
        if(isset($_GET['productId'])){
            $productId = $_GET['productId'];

            $executing = new delete();
            $executing->deleting($productId);
        }
    }
}

$action = new deleteConfirmation();
$action->confirmation()
//need a form page ofr adding products
?>