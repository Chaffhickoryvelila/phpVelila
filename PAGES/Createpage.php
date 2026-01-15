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

    <div> 

    <h1>Create User</h1>
    <form action="FUNCTIONS/Createuser.php" method="POST">
        <label for="">Name</label>
        <input type="text" name = "user_name">
        <label for="">Age</label>
        <input type="number" name = "user_age">
        <label for="">Address</label>
        <input type="text" name = "user_address">

        <button>Submit</button>

    </form>
    </div>
</body>
</html>