<?php    


function retrieveAllusers(){
include "connection.php";

$sql = "SELECT * FROM user";
$stmnt = $conn -> prepare($sql);
$stmnt->execute();

return $stmnt->fetchAll(PDO::FETCH_ASSOC);


}

function loginAuth($usernames, $passwords)
{

include "connection.php";

$sql = "SELECT * FROM user WHERE username = :username AND password = :password ";
$stmnt = $conn->prepare ($sql);
$stmnt->execute([

"username" => $usernames,
"password" => $passwords

]);

$count = $stmnt -> rowCount();

return $count;
}

?>