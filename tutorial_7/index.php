<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creating QR Code Using PHPQR Library</title>
  <link rel="stylesheet" href="../bstrap/bootstrap.min.css">
  <style>
    .wrap{
      width: 100%;
      max-width: 600px;
      margin: 30px auto 0;
    }
    textarea{
      height: 100px;
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="wrap container text-center">
    <h1 class="h3 text-primary m-3">Generating QRCode Using Phpqr Library</h1>
    <?php
if ($_POST['generate']) {
    include 'phpqrcode/qrlib.php';
    $tempDir = "QR\\";
    $inputText = $_POST['qrText'];
    $codeContents = $inputText;
    $fileName = 'Nandar_' . md5($codeContents) . '.png';
    $pngAbsoluteFilePath = $tempDir . $fileName;
    $urlRelativeFilePath = $tempDir . $fileName;
    QRcode::png($codeContents, $pngAbsoluteFilePath);
    echo '<h5 class="text-primary">File generated!</h5>';
    echo '<hr />';
    echo '<img src="' . $urlRelativeFilePath . '" alt="Qrcode"';
}
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <hr>
      <div class="m-3">
      <textarea name="qrText" class="form-control text-primary" placeholder="Write input text to create QR Code" id="floatingTextarea2"></textarea>
      </div>
      <div class="m-3">
        <input type="submit" name="generate" value="Generate QRCode" class="btn btn-primary">
      </div>
    </form>
  </div>
</body>
</html>