<?php


function retrieveAllusers()
{
    include "connection.php";

    $sql = "SELECT * FROM user";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute();

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}

function retrieveAllproducts()
{
    include "connection.php";

    $sql = "SELECT * FROM products";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute();

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}


function loginAuth($usernames, $passwords)
{

    include "connection.php";

    $sql = "SELECT * FROM user WHERE username = :username AND password = :password ";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([

        "username" => $usernames,
        "password" => $passwords

    ]);

    $count = $stmnt->rowCount();

    return $count;
}

function getUser($user_id)
{
    include "connection.php";

    $sql =  "SELECT * FROM user WHERE user_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([

        "id" => $user_id
    ]);

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);  //return of all object or an array of objects

}
function getProduct($prod_id)
{
    include "connection.php";

    $sql = "SELECT * FROM products WHERE prod_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "id" => $prod_id
    ]);

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}
function updateUser($user_id)
{
    include "connection.php";

    $sql =  "SELECT * FROM user WHERE user_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([

        "id" => $user_id
    ]);

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);  //return of all object or an array of objects

}