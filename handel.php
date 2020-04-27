<?php
    $price=$_GET["price"];
    $amount=$_GET["qunat"];
    $totalprice=$price*$amount;
    echo "The Total Price Before Discount is :".$totalprice."<br/>";
    $discount;
    if($totalprice>1000){
        $discount=$totalprice -($totalprice*15/100);
    }
    elseif($totalprice<1000){
        $discount=$totalprice -($totalprice*10/100);
    }
    echo "The Total Price After Discount is :".$discount;
?>