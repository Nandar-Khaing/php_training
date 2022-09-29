<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email=== 'mgmg@gmail.com' and $password === 'mg123'){
        session_start();
        $_SESSION['user'] = ['username' => 'Mg Mg'];
       header('location: profile.php');
    }else{
        header('location: index.php?error=1');
    }

?>