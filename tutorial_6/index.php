
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bstrap/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="h3 m-3">storage Image file from input Directory </h1>
        <form action="fileUpload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
            <input class="form-control" type="file" name="image">
            </div>
            <div class="mb-3">
            <label for="folder-name" class="form-label">Folder Name</label>
            <input class="form-control" type="text" name="folder-name">
            </div>
            <div class="text-center">
            <input type="submit" value="Upload" class="btn btn-primary mb-3">
            </div>
        </form>
    </div>
</html>
