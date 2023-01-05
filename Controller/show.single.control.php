<?php
    include('../Model/show.single.php');


        $prod = new affichage;
        $products=$prod->showAllProducts($productId);


?>