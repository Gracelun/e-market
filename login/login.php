<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<?php
		include '../include/header.php';
	?>
	<div>
		<span>Sign in</span>
		<form action = "actionlogin.php" method = "POST">
			<div>
				<span>Account</span>
				<input type="text" name="account">
			</div>
			<div>
				<span>Password</span>
				<input type="password" name="password">
			</div>
			<div>
				<input type="submit" name="login">
			</div>
		</form>
	</div>
	
	<?php
		include '../include/footer.php';
	?>
</body>
</html>