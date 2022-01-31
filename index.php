<?php

 require_once __DIR__ . '/classes/User.php';
 require_once __DIR__ . '/classes/Product.php';
 require_once __DIR__ . '/classes/CreditCard.php';
 require_once __DIR__ . '/classes/PrimeUser.php';


$new_user = new User('Mace','Windu');
$new_primeUser = new User('Obi-one','Kenoby');

$new_product = new Product('Single blade Lightsaber"Amethyst"',28000);
$new_product_ = new Product('Single blade Lightsaber"JADE"',32000);

$new_creditCard = new CreditCard('5333271098172363', 932, 24, 01);
$new_creditCard_ = new CreditCard('522210279271823', 239, 25, 10);

$new_user->setCreditCard($new_creditCard);
$new_user->gotItem($new_product);
$new_primeUser->setCreditCard($new_creditCard_);
$new_primeUser->gotItem($new_product_);
// var_dump($new_user);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE FORCE shop</title>
</head>
<body>
    <h2> Sales Report</h2>
    <p> <?php echo"<strong>Mister</strong>: {$new_user->getName()} {$new_user->getSur()}" ?> </p>
    <p><strong>Purchased:</strong> <?php echo $new_product->getKind() ?> </p>
    <p><strong>Paid with: </strong> <?php echo "{$new_user->getCreditCard()->getCardNumber()} Credit Card." ?> </p>
    <p><strong>Priced: </strong> <?php echo "{$new_product->getPrice()} Republic's credits."?> </p>
    <p><strong>Jedi Discounted: </strong> <?php echo "{$new_user->getDiscountedP()} Republic's credits."?> </p>

    <h2> Sales Report</h2>
    <p> <?php echo"Mister: {$new_primeUser->getName()} {$new_primeUser->getSur()}" ?> </p>
    <p><strong>Purchased: </strong> <?php echo $new_product_->getKind() ?> </p>
    <p><strong>Paid with:</strong>  <?php echo "{$new_primeUser->getCreditCard()->getCardNumber()} Credit Card." ?> </p>
    <p><strong>Priced: </strong> <?php echo "{$new_product_->getPrice()} Republic's credits."?> </p>
    <p><strong>Jedi Discounted: </strong> <?php echo "{$new_primeUser->getDiscountedP()} Republic's credits."?> </p>
</body>
</html>