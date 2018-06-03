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
		#body_inf{
			background-color: #FFFFFF;
			padding: 20px;
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
				<div id="list-exampleone" class="list-group">
				<button type="button" class="btn btn-info"><a data-toggle="modal" data-target="#exampleModalone" href="javascript:void(0)">新增商品</a></button>
					
				</div>
			</div>
			<div class="col-sm-10">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<a class="nav-item nav-link active" href="#">全部商品<span class="sr-only">(current)</span></a>
							<a class="nav-item nav-link" href="#">已售完</a>
							
						</div>
					</div>
				</nav>
				<div id ="body_inf">
					
				</div>
			</div>



			<!-- Modal -->
			<div class="modal fade" id="exampleModalone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelone" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<form action = "/e-market/login/actionlogin.php" method = "POST">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabelone">新增商品</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">

								<div class="form-group">
									<span>商品名稱</span>
									<input type="text" name="account" class="form-control">
								</div>
								<div class="form-group">
									<span>商品描述</span>
									<input type="text" name="account" class="form-control">
								</div>
								<div class="form-group">
									<span>商品價錢</span>
									<input type="password" name="password" class="form-control">
								</div>
								<div class="form-group">
									<label for="exampleFormControlFile1">商品圖片</label>
									<input type="file" class="form-control-file" id="exampleFormControlFile1">
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
			<!-- Modal -->























			<?php
			include '../include/footer.php';
			?>
			<!-- script 多半放置code最底行(執行效能問題) -->
			<script src="/e-market/library/js/jquery-3.3.1.min.js"></script>
			<script type="text/javascript" src="/e-market/library/imsky-holder/holder.min.js"></script>
			<script src="/e-market/library/bootstrap-4.1.0/js/bootstrap.min.js"></script>
		</body>
		</html>