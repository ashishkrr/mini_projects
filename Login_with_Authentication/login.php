<?php
include("process.php")
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

	<div class="box">
		<h2>Login</h2>
		<form method="POST" action="">
			<div class = "inputBox">
				<input type="text" name="Uid" required="">
				<label>UserName</label>
			</div>
			<div class="inputBox">
				<input type="password" name="pwd" required="">
				<label>PassWord</label>
			</div>
			<input type="submit" name="submit" value="submit">
		</form>
		
	</div>
<!-- Error Message -->
<span id = "msg"><?php echo $error; ?></span>
</body>
</html>
