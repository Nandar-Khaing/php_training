<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrap">
    <h1 class=mb-3>Chess Layout</h1>
		<table border="1">
			<?php for($i=1;$i<=8;$i++){ ?>
			<tr>
					<?php for($j=1;$j<=8;$j++){ ?>
					<?php if(($i+$j)%2==0){ ?>
						<td class="black-box"></td>
					<?php }
					else{ ?>
					<td class="white-box"></td>
					<?php } ?>
					<?php } ?>
				<tr>
			<?php } ?>
		</table> 
   </div>
</body>
</html>