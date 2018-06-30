<?php
session_start();
?>
<div id="framone">
	<nav class="navbar navbar-expand-md navbar-light" id="nav1">
		<div class="collapse navbar-collapse container" id="navbarText">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<?php
					if(isset($_SESSION['isLogin'])){
						?>	
						<a class="nav-link" href="/e-market/user/Stores.php">賣家中心</a>
						<?php
					}else{
						?>
						<a data-toggle="modal" data-target="#exampleModal" href="javascript:void(0)">賣家中心</a></span>
						<?php
					}
					?>
				</li>
			</ul>
			<?php
			if(isset($_SESSION['isLogin'])){
				?>	
				<span class="navbar-text">
					<a href="#">會員中心</a>
				</span>
				|
				<span class="navbar-text">
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
				<span style="margin: 0 10px;">|</span>
				<span class="navbar-text">
					<a data-toggle="modal" data-target="#exampleModal" href="javascript:void(0)">
						登入
					</a>
				</span>
				<?php
			}
			?>
		</div>
	</nav>
	<div id="nav2">
		<div class="container" >
			<div class="row">
				<div class="col-2">
					<a href="/e-market/index.php" id ="ShoppingGo">
						<img src="/e-market/img/logo.png" alt="index" class="rounded-bottom" height="80" >
					</a>
				</div>
				<div class="col-10">
					<form class="form-inline" id="searchBar">
						<input class="form-control mr-sm-2 col-10" type="search" placeholder="關鍵字" aria-label="Search">
						<button class="btn my-2 my-sm-0" type="submit">搜尋</button>
					</form>
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

