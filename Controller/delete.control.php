<?php
include('../Model/delete.model.php');

class deleteConfirmation extends delete{
    public function confirmation(){
        if(isset($_GET['productId'])){
            $productId = $_GET['productId'];

            $executing = new delete();
            $executing->deleting($productId);
        }
        header('Location: ../view/kArrival.php');
    }
}

$action = new deleteConfirmation();
$action->confirmation();


?>