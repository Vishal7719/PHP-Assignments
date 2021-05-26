<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>069-Vishal Chaudhari-Operators-06/04/2021</title>
</head>

<body>
    <?php
    // program to calculate bill
    $product1Qty = 1;
    $product2Qty = 7;
    $product3Qty = 9;
    $product4Qty = 10;
    define('PRODUCT1PRICE', 250);
    define('PRODUCT2PRICE', 400);
    define('PRODUCT3PRICE', 50);
    define('PRODUCT4PRICE', 230);
    $totalQty = $product1Qty + $product2Qty + $product3Qty + $product4Qty;
    $p1Price = $product1Qty * PRODUCT1PRICE;
    $p2Price = $product2Qty * PRODUCT2PRICE;
    $p3Price = $product3Qty * PRODUCT3PRICE;
    $p4Price = $product4Qty * PRODUCT4PRICE;

    $totalPrice = $p1Price + $p2Price + $p3Price + $p4Price;
    echo "QUANTITY :-<br>";
    echo "<br>Product 1 :- " . $product1Qty;
    echo "<br>Product 2 :- " . $product2Qty;
    echo "<br>Product 3 :- " . $product3Qty;
    echo "<br>Product 4 :- " . $product4Qty;
    echo "<br><br>";
    echo "PRICE :- ";
    echo "<br>Product 1 :- " . $p1Price;
    echo "<br>Product 2 :- " . $p2Price;
    echo "<br>Product 3 :- " . $p3Price;
    echo "<br>Product 4 :- " . $p4Price;
    echo "<br><br>";
    echo "<br>TOTAL QUANTITY :- " . ($product1Qty + $product2Qty + $product3Qty + $product4Qty);
    echo "<br>TOTAL PRICE :- " . ($p1Price + $p2Price + $p3Price + $p4Price);
    ?>

</body>

</html>