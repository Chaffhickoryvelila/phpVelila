<?php
$name = $_GET['name'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="../CSS/Dashboard.css">
     
</head>

<body>
     <!-- 🔹 HEADER / NAVBAR -->
  <header class="operator">
    <h1 class="h1s">
      <span style="font-weight:bold;color: red;">C</span>H<span style="font-weight:bold;color: red;">A</span>FF
      HIC<span style="font-weight:bold;color: red;">K</span>ORY
      <span style="font-weight:bold;color: red;">V</span>EL<span style="font-weight:bold;color: red;">I</span>LA
    </h1>

    <div class="nav-text">
      <span><a href="#">Home</a></span>
      <span><a href="#about">About</a></span>
      <span><a href="#projects">Projects</a></span>
      <span><a href="#contacts">Contacts</a></span>
    </div>
  </header>

    <h1> Welcome <?= $name ?> Have a nice day! </h1>
    

</body>

</html>