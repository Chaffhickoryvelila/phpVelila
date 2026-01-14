<?php
$list = ['Serenity', 'Chaff', 'Jeni', 'Kelay', 'Yuri', 'Johnrave', 'Macy'];
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

    <ul>
        <?php
        foreach ($list as $item) {

        ?>

            <li> <?= $item ?> </li>


        <?php
        }
        ?>
    </ul>

    <table>
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>

        <?php
        foreach ($list as $item) {

        ?>

            <tr>
                <td> <?= $item ?> </td>
                <td> <button>View</button> </td>
            </tr>


        <?php
        }
        ?>

    </table>

</body>

</html>