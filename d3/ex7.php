<!-- WAP to read cost price and selling price of an item and find out how much loss or profit
occurs. -->

<?php

$cost_price = $_POST['cprice'];
$sell_price = $_POST['sprice'];

function Profit($cost_price,$sell_price){
    $profit=$sell_price-$cost_price;
    return $profit;
}
function Loss($cost_price,$sell_price){
    $loss=$cost_price-$sell_price;
    return $loss;
}
 
if ($sell_price > $cost_price)
    echo Profit($cost_price,$sell_price)." Profit ";
 
else if($sell_price < $cost_price)
    echo Loss($cost_price,$sell_price)." Loss ";
    
else
    echo "No profit nor Loss";
 
?>
