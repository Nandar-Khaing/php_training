<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="bstrap/bootstrap.min.css">
  <style>
   body{
    padding: 50px;
   }
  </style>
</head>
<body>

  <?php
  require 'connect.php';
  $sql = 'SELECT * FROM users';
  $statement = $connection->prepare($sql);
  $statement->execute();
  $users = $statement->fetchAll(PDO::FETCH_OBJ);
  ?>
  <div class="container">
  <nav class="navbar navbar-expand-lg bg-light mb-3">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create-user.php">CREATE</a>
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
              <div class="card-title text-primary">Users List</div>
              </div>
              <div class="col-md-6">
                <a href="create-user.php" class="float-end btn btn-primary">+ Create User</a>
              </div>
            
          </div>
          <div class="card-body">
            <table class="table border">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($users as $user): ?>
              <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->name ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->phone ?></td>
                <td><?= $user->address ?></td>
                <td>
                <a href="edit-user.php?id=<?= $user->id; ?>" class="btn btn-primary me-1">Edit</a>||
                <a href="delete-user.php?id=<?= $user->id; ?>" class="btn btn-success ms-1">Delete</a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="bstrap/bootstrap.min.js"></script>
</body>
</html>