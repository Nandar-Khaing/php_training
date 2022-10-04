<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../bstrap/bootstrap.min.css">
</head>
<body class="text-center">
  <div class="container mt-5">
    <h3 class="mb-3">Mg Mg</h3>
    <ul class="list-group w-50 m-auto">
     <li class="list-group-item">
        <b>Email:</b> mgmg@gmail.com
      </li>
      <li class="list-group-item">
        <b>Phone:</b> 09-454433335
      </li>
      </ul>
  </div>

    <a href="logout.php">Log out</a>

</html>
