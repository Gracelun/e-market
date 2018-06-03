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
		.liner{
			border-bottom: 1px solid #ccc;
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
				<div>分類</div>
				<form>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
						<label class="form-check-label" for="defaultCheck1">
							女生配件
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
						<label class="form-check-label" for="defaultCheck2">
							男生包包與配件
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
						<label class="form-check-label" for="defaultCheck3">
							代買代購
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
						<label class="form-check-label" for="defaultCheck4">
							其他類別
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
						<label class="form-check-label" for="defaultCheck5">
							娛樂、收藏
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
						<label class="form-check-label" for="defaultCheck6">
							居家生活
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
						<label class="form-check-label" for="defaultCheck7">
							嬰幼童與母親
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck8">
						<label class="form-check-label" for="defaultCheck8">
							女生衣著
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck9">
						<label class="form-check-label" for="defaultCheck9">
							女生包包/精品
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
						<label class="form-check-label" for="defaultCheck10">
							美妝保健
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck11">
						<label class="form-check-label" for="defaultCheck11">
							女鞋
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck12">
						<label class="form-check-label" for="defaultCheck12">
							男生衣著
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck13">
						<label class="form-check-label" for="defaultCheck13">
							家電影音
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck14">
						<label class="form-check-label" for="defaultCheck14">
							遊戲王
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck15">
						<label class="form-check-label" for="defaultCheck15">
							戶外與運動用品
						</label>
					</div>
					<div class = "liner"></div>
					<div>出貨地點</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck15">
						<label class="form-check-label" for="defaultCheck15">
							台灣
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck15">
						<label class="form-check-label" for="defaultCheck15">
							海外
						</label>
					</div>
					<div class = "liner"></div>
					<div>運送方式</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck15">
						<label class="form-check-label" for="defaultCheck15">
							全家
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck15">
						<label class="form-check-label" for="defaultCheck15">
							7-11
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck15">
						<label class="form-check-label" for="defaultCheck15">
							黑貓宅急便
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck15">
						<label class="form-check-label" for="defaultCheck15">
							郵政
						</label>
					</div>
					<button type="submit">Submit</button>
				</div>

			</form>
			<div class="col-sm-10">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<a class="nav-item nav-link active" href="#">綜合排名 <span class="sr-only">(current)</span></a>
							<a class="nav-item nav-link" href="#">最新</a>
							<a class="nav-item nav-link" href="#">最熱銷</a>
							<a class="nav-item nav-link disabled" href="#">價格</a>

						</div>
					</div>
				</nav>
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<a href="product.php">
								<div class="card" ">
									<img class="card-img-top" src="../img/luna.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</a>
						</div>
						
						<div class="col-sm-3">
							<a href="product.php">
								<div class="card" ">
									<img class="card-img-top" src="../img/luna.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-3">
							<a href="product.php">
								<div class="card" ">
									<img class="card-img-top" src="../img/luna.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-3">
							<a href="product.php">
								<div class="card" ">
									<img class="card-img-top" src="../img/luna.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<a href="product.php">
								<div class="card" ">
									<img class="card-img-top" src="../img/luna.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-3">
							<a href="product.php">
								<div class="card" ">
									<img class="card-img-top" src="../img/luna.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-3">
							<a href="product.php">
								<div class="card" ">
									<img class="card-img-top" src="../img/luna.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-3">
							<a href="product.php">
								<div class="card" ">
									<img class="card-img-top" src="../img/luna.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</a>
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