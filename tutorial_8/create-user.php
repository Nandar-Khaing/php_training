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
if (isset($_POST['create-btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $message = '';
    // insert a single publisher

    $sql = 'INSERT INTO users(name,email,phone,address)
   VALUES(:name,:email,:phone,:address)';
    $statement = $connection->prepare($sql);
    if ($statement->execute(
        [':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
            ':address' => $address]
    )) {
        $message = 'data inserted successfully';

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
              <a class="nav-link active" href="create-user.php">CREATE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="edit-user.php">UPDATE</a>
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
                <div class="card-title text-primary">User Creation</div>
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
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
              </div>
              <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email">
              </div>
              <div class="mb-3">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter Phone">
              </div>
              <div class="mb-3">
                <label for="address">Address</label>
                <textarea  class="form-control" name="address" placeholder="Enter Address"></textarea>
              </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" name="create-btn">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="bstrap/bootstrap.min.js"></script>
</body>
</html>