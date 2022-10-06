<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="./bstrap/bootstrap.min.css">
  <style>
    body{
      padding : 50px;
    }
  </style>
</head>
<body>
  <?php

require 'connect.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM users where id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id]);
$user = $statement->fetch(PDO::FETCH_OBJ);

if (isset($_POST['update-btn'])) {
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $country = $_POST['country'];

        $message = '';
        // insert a single publisher

        $sql = 'UPDATE users SET name=:name,email=:email,phone=:phone,country=:country
   WHERE id=:id';

        $statement = $connection->prepare($sql);
        if ($statement->execute(
            [':name' => $name,
                ':email' => $email,
                ':phone' => $phone,
                ':country' => $country,
                ':id' => $id]
        )) {
            header("Location: index.php");

        }
    }

}

?>
<div class="container">
  <nav class="navbar navbar-expand-lg bg-light mb-3">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create-user.php">CREATE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="edit-user.php">UPDATE</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-md-6">
              <div class="card-title text-primary">User Update</div>
            </div>
            <div class="col-md-6">
              <a href="index.php" class="btn btn-primary float-end"><< Back</a>
            </div>
          </div>
        </div>
        <form action="" method="post">
          <div class="card-body">
            <?php if (isset($message)): ?>
            <div class="bg-success form-control">
            <?php echo $message ?>
            </div>
            <?php endif?>
            <div class="mb-3">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"  value="<?=$user->name;?>">
            </div>
            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"  value="<?=$user->email;?>">
            </div>
            <div class="mb-3">
              <label for="phone">Phone</label>
              <input type="text" class="form-control" name="phone" value="<?=$user->phone;?>">
            </div>
            <div class="mb-3">
              <label for="country">Country</label>
              <textarea  class="form-control" name="country"><?=$user->country;?></textarea>
            </div>
          </div>
          <div class="card-footer">
              <button class="btn btn-primary" name="update-btn">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="bstrap/bootstrap.min.js"></script>
</body>
</html>