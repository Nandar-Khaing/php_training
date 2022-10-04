<?php
//Age calulating Function
function getAge($dob)
{
    $bday = new DateTime($dob);
    $today = new DateTime(date('m.d.y'));
    if ($bday > $today) {
        return 'You are not born yet';
    }
    $diff = $today->diff($bday);
    return 'Your Current Age is : ' . $diff->y . ' Years, ' . $diff->m . ' months, ' . $diff->d . ' days';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculating Age</title>
  <link rel="stylesheet" href="../bstrap/bootstrap.min.css">
  <style>
    .wrap{
      width: 100%;
      max-width: 500px;
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <div class="wrap">
    <h1 class="mt-3 text-primary">Calculate Age From DOB</h1>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
      <label for="dob" class="mb-3 text-primary">Date of Birth</label>
        <input type="date" name="dob" class="form-control mb-3" value="<?php echo (isset($_GET['dob'])) ? $_GET['dob'] : '' ?>">
        <input type="submit" value="Calculate Age" class="btn btn-primary mb-3">
    </form>

    <?php
if (isset($_GET['dob']) and $_GET['dob'] != '') {
    echo "<h5 class='text-primary'>" . getAge($_GET['dob']) . "</h5>"; // function call
}
?>
  </div>
</body>
</html>