<?php

require_once __DIR__ . "/classi/custemer.php";
require_once "classi/guinzagli.php";
require_once "classi/giochi.php";
require_once "classi/payment.php";

$metodoPagamento = key_exists("metodo", $_GET) ? (int) $_GET["metodo"] : null;


$customer1 = new Customer("Luca", "Matteotti", 20, "lucamatteotti01@gmail.com", "registrato");

$customer1->paymentCard->add(new CreditCard(CreditCard::$MASTER_CARD, "576347674634763746", "784", "12/22"));

$products = [
    new Guinzagli("3m","DIVO", "Divo", 34.50),
    new Guinzagli("5m","Julius-K9","Julius-K9", 40),
    new Giochi( "Gomma", "Osso", "Ossarello",5),
    new Giochi( "Cotone", "Corda", "Funello",10),
    ];

$customer1->cart->add($products[1], $products[3]);

$customer1->cart->getTotal();

var_dump($customer1->paymentCard, $products, $customer1->cart, $customer1->cart->getTotal())
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <?php
    $customer1->printCard();
    ?>
</body>

</html>