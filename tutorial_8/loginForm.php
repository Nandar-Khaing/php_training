<?php
error_reporting(E_ALL);
ini_set("display_errors",'1');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../bstrap/bootstrap.min.css">
  <style>
    .wrap{
      width: 100%;
      max-width: 400px;
      margin: 30px auto 0;
    }
  </style>
</head>
<body class="text-center">
  <div class="wrap">
        <?php
if (isset($_GET['error'])) {
    echo '<p class="p-3">Login Fail</p>';
}
?>
        <h1 class="h3 text-primary m-3">Password Recorvery</h1>
        <form action="" method="post">
            <input type="email" name="email" class="mb-3 form-control" placeholder="Email">
            <br>
            <input type="password" name="password" class="mb-3 form-control" placeholder="Password">
            <br>
            <input type="submit" class="btn btn-primary" value="LogIn" name="login">
            <?php
            if($_POST['login']){
            $email = $_POST['email'];
            $password = $_POST['password'];
            if ($email === 'nandar21599@gmail.com'){
              if($password === 'nandar') {
                session_start();
                $_SESSION['user'] = ['username' => 'Nandar'];
                header('location: index.php');
              }else{
                echo header('location: loginForm.php?passError=1');
                
              }
            }else{
                echo "Email Wrong";
              }
              
              
              
            } 
            if($_GET['passError']): ?>
              <br>
              <input type="submit" class="btn btn-primary m-3" value="Forget Password" name="forget-btn">
              <?php $_GET['passError']= 0;
            endif
            ?>
            <?php if($_POST['forget-btn']){
                   //Create instance of PHPMailer
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
   
    //Load Composer's autoloader
    require 'vendor/autoload.php';
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;    
        $mail->SMTPDebug = true;                               //Enable SMTP authentication
        $mail->Username   = 'nandar21599@gmail.com';                     //SMTP username
        $mail->Password   = 'royunzzcmymgcjex';                               //SMTP password
        $mail->SMTPSecure = 'tls';    //Enable implicit TLS encryption
        $mail->Port       = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('nandar2159@gmail.com', 'Mailer');
        $mail->addAddress('joe@gmail.com', 'Joe User');     //Add a recipient
        $mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');
    
       
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
            }
   ?>
        </form>
    </div>
</body>
</html>