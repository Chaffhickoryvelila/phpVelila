<?php
include "../CONFIG/includes.php";

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    $getUser = getUser($user_id);
} else {
    echo "<script> window.location.href ='Retrievepage.php' </script>";
} 

if (isset($_GET['user_id'])) {
    $user = getUser($_GET['user_id'])[0];
    $type = "user";
}
else if (isset($_GET['prod_id'])) {
    $product = getProduct($_GET['prod_id']);
    $type = "product";
}
else {
    header("Location: Retrievepage.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<?php
include "resources/header.php";
?>

<body>
    <?php
    include "RESOURCES/Navigation.php";
    ?>

    <!--Contents -->

    <h1>Name: <?= $getUser[0]['Name'] ?></h1>
    <h1>Age: <?= $getUser[0]['Age'] ?></h1>
    <h1>Address: <?= $getUser[0]['Address'] ?></h1>
    <h1>Username: <?= $getUser[0]['username'] ?></h1>

    <a href= "">Edit</a>

<?php if ($type === "product") { ?>
    <h1>Product Name: <?= $product['prod_name'] ?></h1>
    <h1>Quantity: <?= $product['prod_quantity'] ?></h1>
    <h1>Type: <?= $product['prod_type'] ?></h1>
    <h1>Price: <?= $product['prod_price'] ?></h1>
    <h1>Date Added: <?= $product['prod_date_added'] ?></h1>

    <a href="">Edit Product</a>
<?php } ?>

</body>
</html>
