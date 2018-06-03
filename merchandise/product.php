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
			border-bottom: 1px dotted #ccc;
		}
		.order_footer{
			background-color: #FFFFFF;
			padding: 30px 10px;
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
		
		#textone{
			margin-left:750px;
			
		}
		#line{
			background-color: #A6A5A1;
		}
		
		.liner{
			border-bottom: 2px solid #ccc;
		}
		#star{
			height: 20px;
			width: 20px;
		}
		#oder{
			padding: 20px;
		}
		.headerbar{
			margin-top: 20px;
			background-color: #FFFFFF;
			padding: 20px;
			border-bottom: 1px dotted #ccc;
		}
		.barborderleft{
			border-left: 2px solid #ccc;
			
		}
		.bar{
			margin-top: 20px;
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

	<div class="container">
		<div class="row">
			<div class="col-4">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="../img/luna.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="../img/luna.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="../img/luna.jpg" alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="col-8">
				<div class="row" id = "oder" style="background-color: white">
					<div class="col-12 order_header">
						現貨+實拍 韓版幾何菱形櫻桃珍珠大耳釘女日韓時尚百搭耳環耳飾品
					</div>
					<div class="col-12 order_header">
						賣場折扣碼
					</div>
					<div class="col-12 order_header">
						<img src="../img/star.png" alt="star" id ="star"><img src="../img/star.png" alt="star" id ="star"><img src="../img/star.png" alt="star" id ="star"><img src="../img/star.png" alt="star" id ="star"><img src="../img/star.png" alt="star" id ="star">
						<a>4.9/5 (38評價) | 月銷售57</a>
					</div>
					<div class="col-12 order_header">
						<a>較長備貨(出貨天數7天)</a>
					</div>
					<div class="col-12 order_header">
						<a>規格：</a>
						<button type="button" class="btn btn-outline-danger">紅珍珠</button>
						<button type="button" class="btn btn-outline-danger">白珍珠</button>
					</div>
					<div class="col-12 order_header">
						<a>數量：</a>
					</div>
					
					<div class="col-12 align-self-end order_header">
						<button type="button" class="btn btn-danger float-right">直接購買</button>

						<button type="button" class="btn btn-outline-danger float-right">加入購物車</button>
					</div>
				</div>
				<div class="row order_footer">
					<div class="col-3">
						<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
							15天鑑賞期
						</button>
					</div>
					<div class="col-3">
						<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
							退貨無負擔
						</button>
					</div>
					<div class="col-3">
						<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
							假一賠二
						</button>
					</div>
					<div class="col-3">
					</div>
				</div>
			</div>
		</div>
		<!-- 上 -->
		<div class="row headerbar">
			<div class="col-3">
				<img src="../img/luna.jpg" alt="" class="rounded-circle" width="60" height="60">
				<span>gra_e</span>
				<button type="button" class="btn btn-outline-primary btn-sm">查看賣場</button>
				<button type="button" class="btn btn-outline-primary btn-sm">關注</button>
			</div>
			<div class="col-3 barborderleft">
				<div><span>2015</span></div>
				<div>商品</div>
			</div>
			<div class="col-3 barborderleft">
				<div><span>2015</span></div>
				<div>商品評價</div>
			</div>
			<div class="col-3 barborderleft">
				<div><span>2015</span></div>
				<div>加入時間</div>
			</div>
		</div>
		<div class="row ">
			<nav class="col-12 navbar navbar-expand-lg navbar-light bg-light bar">
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-item nav-link active" href="#">商品詳情 <span class="sr-only">(current)</span></a>
						<a class="nav-item nav-link" href="#">商品評價</a>
						<a class="nav-item nav-link" href="#">商品留言</a>
					</div>
				</div>
			</nav>
		</div>

		<div class="row ">
			<div class="col-12 headerbar" style="margin-top: 0">
				<div>材質:合金</div>
				<div>風格:韓版韓式/韓國風</div>
				<div>貨號:02-10-R100</div>
				<div>品牌:泰妃</div>
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