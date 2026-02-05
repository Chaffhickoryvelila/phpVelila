<?php
include "../CONFIG/includes.php";

if (isset($_GET['prod_id'])) {
    $product = getProduct($_GET['prod_id']);
    $type = "product";
} else {
    echo "<script> window.location.href ='Retrievepage.php' </script>";
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


        <button>Submit</button>
        <h1>Product Name: <?= $product[0]['prod_name'] ?></h1>
        <h1>Quantity: <?= $product[0]['prod_quantity'] ?></h1>
        <h1>Type: <?= $product[0]['prod_type'] ?></h1>
        <h1>Price: <?= $product[0]['prod_price'] ?></h1>
        <h1>Date Added: <?= $product[0]['prod_date_added'] ?></h1>

        <a href="">Edit Product</a>


</body>

</html>