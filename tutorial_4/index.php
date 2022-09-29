
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
        if(isset($_GET['error'])){
            echo '<p class="p-3">Login Fail';
        }
        ?>
        <form action="login.php" method="post">
            <input type="email" name="email" class="mb-3 form-control" placeholder="Email">
            <br>
            <input type="password" name="password" class="mb-3 form-control" placeholder="Password">
            <br>
            <input type="submit" class="btn btn-primary" value="LogIn">
        </form>
    </div>
</body>
</html>