<?php
session_start();
?>
<header>
	<a href="/e-market/index.php">首頁</a>
	<?php
		if(isset($_SESSION['isLogin'])){
			echo '<a href="/e-market/member/index.php">會員中心</a>';
			echo '<a href="/e-market/login/logout.php">登出</a>';
		}else{
			echo '<a href="/e-market/login/login.php">登入</a>';
			echo '<a href="/e-market/member/member_signup.php">會員註冊</a>';
		}
	?>
</header>