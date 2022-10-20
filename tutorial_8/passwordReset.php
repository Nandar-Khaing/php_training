<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Reset Form</title>
  <link rel="stylesheet" href="../bstrap/bootstrap.min.css">
  <style>
    .wrap{
      width: 100%;
      max-width: 800px;
      margin: 100px auto 0;
      background-color: rgba(255,255,33,0.3);
      padding: 20px;
      border-radius: 7px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="wrap">
      <h1 class="h3">Reset Password</h1>
      <div class="m-3">
        <input type="password" name="password" placeholder="Password" class="form-control">
      </div>
      <div class="m-3">
        <input type="password" name="comfirmPassword" placeholder="Confirm Password" class="form-control">
      </div>
      <div class="m-3">
        <input type="submit" value="ResetPassword" class="btn btn-danger border-danger">
      </div>
    </div>
  </div>
</body>
</html>