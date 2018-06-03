<?php
session_start();
?>
<div  id = "framone">
	<div class="row" id="nav1">
		<nav class="navbar navbar-expand-lg navbar-light container" id = "header_one">
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="../shoppingcar/Product_shelves.php">賣家中心 <span class="sr-only">(current)</span></a>
					</li>
					<!-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Dropdown
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li> -->
				</ul>
				<?php
				if(isset($_SESSION['isLogin'])){
					?>	
					<span class="navbar-text">
						<a href="#">會員中心</a>
					</span>
					|
					<span class="navbar-text">
						<!-- <a href="/e-market/login/logout.php">登出</a> -->
						<div class="dropdown show">
							<a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="/e-market/img/luna.jpg" alt="" class="rounded-circle" width="25" height="25">gra_e
							</a>

							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">我的帳戶</a>
								<a class="dropdown-item" href="#">購買清單</a>
								<a class="dropdown-item" href="/e-market/login/logout.php">登出</a>
							</div>
						</div>
					</span>

					
					<?php
				}else{
					?>
					<span class="navbar-text">
						<a data-toggle="modal" data-target="#exampleModal2" href="javascript:void(0)">註冊</a>
					</span>
					|

					<span class="navbar-text">
						<a data-toggle="modal" data-target="#exampleModal" href="javascript:void(0)">
							登入
						</a>
						<!-- <a href="/e-market/login/login.php"></a> -->
					</span>
					<?php
				}
				?>
			</div>
		</nav>
	</div>

	<!-- <div class="w-100"></div> -->
	<!-- 	<div class="col" id="nav2"> -->
	<!-- <div class="container" id="nav2"> -->
	<div id="nav2">
		<div class="container" >
			<div class = "row">
				<div class="col-2">
					<a href="/e-market/index.php" id ="ShoppingGo">
						<img src="/e-market/img/shoppingcart.png" alt="index" class="rounded-bottom" height="60" width="60" >
						ShoppingGo
					</a>
				</div>
				<div class="col-10">
					<form class="form-inline">
						<input class="form-control mr-sm-2 col-10" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action = "/e-market/login/actionlogin.php" method = "POST">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">登入</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="form-group">
						<span>Account</span>
						<input type="text" name="account" class="form-control">
					</div>
					<div class="form-group">
						<span>Password</span>
						<input type="password" name="password" class="form-control">
					</div>
					<div><a href="http://www.w3big.com/">忘記密碼?</a></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" name="login">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Modal -->
<!-- Modal2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action = "/e-market/member/action_insert.php" method = "POST">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel2">註冊</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<span>Email</span>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<span>Password</span>
						<input type="text" name="password" class="form-control">
					</div>
					<div class="form-group">
						<span>Password</span>
						<input type="text" name="password" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" name="login">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Modal2 -->

<!-- <header>
	<a href="/e-market/index.php">首頁</a>
	<?php
		// if(isset($_SESSION['isLogin'])){
		// 	echo '<a href="/e-market/member/index.php">會員中心</a>';
		// 	echo '<a href="/e-market/login/logout.php">登出</a>';
		// }else{
		// 	echo '<a href="/e-market/login/login.php">登入</a>';
		// 	echo '<a href="/e-market/member/member_signup.php">會員註冊</a>';
		// }
	?>
</header> -->