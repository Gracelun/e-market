<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="/e-market/library/bootstrap-4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../library/css/header.css">
	<style type="text/css">
		body{
			background-color: #F1F0F0;
		}
		.order_frame{
			margin-bottom: 20px;
		}
		.product{
			padding: 20px 10px;
			background-color: #FFFFFF;
			padding-bottom: 20px;
		}
		.order_header{
			background-color: #FFFFFF;
			padding: 20px 0;
			border-bottom: 1px solid #ccc;
		}
		.order_footer{
			background-color: #FFFFFF;
			padding: 20px 0;
		}
		#framsix{
			background-color: #FFFFFF;
			margin-top: 50px;
			height: 150px;
		}
		#cost{
			font-size: 30px;
			color: #F0433A;
			font-weight:bold;
			margin-top: 10px;
		}
		#costname{
			font-size: 15px;
			color: #333A42;
		}
		#textone{
			margin-left:750px;
			
		}
		#line{
			background-color: #A6A5A1;
		}
		.oder_cost{
			margin-left:550px;
			margin-top: 50px;
			color: #A6A5A1;
		}

	</style>
</head>
<body>
	<!-- HEADER TOP -->
	<?php
	include '../include/header.php';
	?>
	<!-- HEADER END -->
	<div class="container" id = "frame">
		<div class="row">
			<div class="col-sm-2">
				<div id="list-example" class="list-group">
					<a class="list-group-item list-group-item-action" href="#list-item-1">我的帳戶</a>
					<a class="list-group-item list-group-item-action" href="#list-item-2">購買清單</a>
					<a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
					<a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
				</div>
			</div>
			<div class="col-sm-10">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<a class="nav-item nav-link active" href="#">待付款 <span class="sr-only">(current)</span></a>
							<a class="nav-item nav-link" href="#">待出貨</a>
							<a class="nav-item nav-link" href="#">待收貨</a>
							<a class="nav-item nav-link disabled" href="#">完成</a>
							<a class="nav-item nav-link disabled" href="#">取消</a>
						</div>
					</div>
				</nav>
				<div class="col-sm order_frame">
					<div class="row order_header">
						<div class="col-2">
							<img src="../img/luna.jpg" alt="" class="rounded-circle" width="35" height="35">
							<a>gra_e</a>
						</div>
						<div class="col-7">
							<button type="button" class="btn btn-outline-primary btn-sm" onclick="location.href='Stores.php'">查看賣場</button>
						</div>
						<div class="col-3">
							<a>TAIWAN,取件成功 | 完成</a>
						</div>
					</div>
					<div class="row product">
						<div class="col-4">
							<img src="../img/luna.jpg" alt="luna" width="155" height="155">
						</div>
						<div class="col-8">
							<div class="row">
								<div class="row">
									<a>澳洲代購 x 1</a>
									<div class = "oder_cost">
										<a>$100</a>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="row product">
						<div class="col-4">
							<img src="../img/luna.jpg" alt="luna" width="155" height="155">
						</div>
						<div class="col-8">
							<div class="row">
								<div class="row">
									<a>澳洲代購 x 1</a>
									<div class = "oder_cost">
										<a>$80</a>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="row order_footer">
						<div class="col-12">
							<p class="text-right" id = "cost"><a id = "costname">訂單金額：</a>$ 180</p>
						</div>
						<div class="row">
							<div class="col-12">
								<button type="button" class="btn btn-secondary btn-lg" id = "textone">查看訂單詳情</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm order_frame">
					<div class="row order_header">
						<div class="col-2">
							<img src="../img/luna.jpg" alt="" class="rounded-circle" width="35" height="35">
							<a>gra_e</a>
						</div>
						<div class="col-7">
							<button type="button" class="btn btn-outline-primary btn-sm" onclick="location.href='Stores.php'">查看賣場</button>
						</div>
						<div class="col-3">
							<a>TAIWAN,取件成功 | 完成</a>
						</div>
					</div>
					<div class="row product">
						<div class="col-4">
							<img src="../img/luna.jpg" alt="luna" width="155" height="155">
						</div>
						<div class="col-8">
							<div class="row">
								<div class="row">
									<a>澳洲代購 x 1</a>
									<div class = "oder_cost">
										<a>$100</a>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="row product">
						<div class="col-4">
							<img src="../img/luna.jpg" alt="luna" width="155" height="155">
						</div>
						<div class="col-8">
							<div class="row">
								<div class="row">
									<a>澳洲代購 x 1</a>
									<div class = "oder_cost">
										<a>$80</a>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="row order_footer">
						<div class="col-12">
							<p class="text-right" id = "cost"><a id = "costname">訂單金額：</a>$ 180</p>
						</div>
						<div class="row">
							<div class="col-12">
								<button type="button" class="btn btn-secondary btn-lg" id = "textone">查看訂單詳情</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



























	<?php
	include '../include/footer.php';
	?>
	<!-- script 多半放置code最底行(執行效能問題) -->
	<script src="/e-market/library/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="/e-market/library/imsky-holder/holder.min.js"></script>
	<script src="/e-market/library/bootstrap-4.1.0/js/bootstrap.min.js"></script>
</body>
</html>