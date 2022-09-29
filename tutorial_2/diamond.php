<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond Pattern Star</title>
    <style>
        .wrap{
        width: 100%;
        max-width: 400px;
        margin: 30px auto 0;
        }
        p{
            width: 148px;
            margin: 0 auto;
        }
        h1{
            margin-bottom: 30px;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="wrap">
    <h1>Diamond Pattern Star</h1>
    <p>
<?php
$n = 6;
for($i=1;$i<=$n;$i++){
    for($j=$i;$j<=$n;$j++){
        echo "&nbsp&nbsp&nbsp";
    }
    for($j=1;$j<=$i;$j++){
        echo "* ";
    }
    for($j=2;$j<=$i;$j++){
        echo "* ";
    }
    echo "<br>";
}
for($i=1;$i<$n;$i++){
    for($j=1;$j<=$i+1;$j++){
        echo "&nbsp&nbsp&nbsp";
    }
    for($j=$i;$j<=$n-2;$j++){
        echo "* ";
    }
    for($j=$i;$j<=$n-1;$j++){
        echo "* ";
    }
    echo "<br>";
}
?>
</p>
</div>
</body>
</html>
