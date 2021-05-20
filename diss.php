<html>
<head>
<title>nazar</title>
<style>
</style>
</head>
<body>
	<center>
		<b><p>thanks for your comment</p></b>
		<img src="pic.jpg">
	</center>
	<?php
		$name=$_POST["name"];
		$email=$_POST["email"];
		$comment=$_POST["comment"];
		$file=fopen("diss.txt","w");
		fwrite($file,$name.PHP_EOL.PHP_EOL.$email.PHP_EOL.PHP_EOL.$comment);
		fclose($file);
	?>
</body>
</html>