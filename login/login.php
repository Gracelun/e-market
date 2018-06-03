<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<?php
	include '../include/header.php';
	?>
	<div class="modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Modal body text goes here.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!-- <div>
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
	</div> -->
	
	<?php
	include '../include/footer.php';
	?>
</body>
</html>