<?php
include "../CONFIG/includes.php";

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    $getUser = getUser($user_id);
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

    <!--Contents -->

    <h1>Name: <?= $getUser[0]['Name'] ?></h1>
    <h1>Age: <?= $getUser[0]['Age'] ?></h1>
    <h1>Address: <?= $getUser[0]['Address'] ?></h1>
    <h1>Username: <?= $getUser[0]['username'] ?></h1>

    <a href= "">Edit</a>

</body>

</html>