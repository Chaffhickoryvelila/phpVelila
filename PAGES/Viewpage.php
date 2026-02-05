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
    <form action="" method="POST">
        <label for="user_name">Name</label>
        <input name="user_name" type="text" value="<?= $getUser[0]['Name'] ?>">
        <label for="user_name">Age</label>
        <input name="user_name" type="number" value="<?= $getUser[0]['Age'] ?>">
        <label for="user_name">Address</label>
        <input name="user_name" type="text" value="<?= $getUser[0]['Address'] ?>">
        <label for="user_name">Username</label>
        <input name="user_name" type="text" value="<?= $getUser[0]['username'] ?>">
         <label for="user_name">Password</label>
          <input name="user_name" type="text" value="<?= $getUser[0]['password'] ?>">

        <button>Edit</button>
    </form>

</body>

</html>