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