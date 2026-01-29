<?php
include "../CONFIG/includes.php";

$list = retrieveAllusers();

// echo json_encode($list);
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

    <h1>This is Retrieve Page</h1>

    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>username</th>
            <th>Action</th>

        </tr>

        <?php
        foreach ($list as $item) {

        ?>

            <tr>
                <td> <?= $item["Name"] ?> </td>
                <td> <?= $item["Age"] ?> </td>
                <td> <?= $item["Address"] ?> </td>
                <td> <?= $item["username"] ?> </td>
                <td> <button>View</button> </td>
            </tr>


        <?php
        }
        ?>

    </table>

</body>

</html>