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
		<form>
			<div>
				<span>帳號</span>
				<input type="text" name="account">
			</div>
			<div>
				<span>密碼</span>
				<input type="password" name="password">
			</div>
			<input type="submit" name="login">
		</form>
	</div>
	<?php
		include '../include/footer.php';
	?>
</body>
</html>