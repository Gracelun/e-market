<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/e-market/library/bootstrap-4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../library/css/main.css">
	
</style>
</head>
<body>
	<!-- HEADER TOP -->
	<?php
	include '../include/header.php';
	include '../library/fun_checkLogin.php';
	include '../library/lib_store.php';
	$member_id = $_SESSION['userID'];
	$store = new store($member_id);
	$product = $store->getSellerProduct();
	?>
	<!-- HEADER END -->
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12" id="seller_info">
						<img class="center-cropped" src="<?=$store->photo?>"></img>
						<div id="seller_detail">
							<h2 id="seller_name"><a><?=$store->name?></a></h2>
							<div id="seller_link col-md-6">
								<button type="button" class="btn btn-outline-light">+關注</button>
								<button type="button" class="btn btn-outline-light">聊聊</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2 seller_related_info">
				<p>商品：<span>2016</span></p>
				<p>關注中：<span>2016</span></p>
				<p>粉絲：<span>2016</span></p>
			</div>
			<div class="col-md-3 seller_related_info">
				<p>評價：<span>4.9/5(9197個評價)</span></p>
			</div>
		</div>
		<div class="row">
			<nav class="page_selector bar">
				<div class="col-md-2 item active">
					<a href="https://www.w3schools.com/html/html_links.asp">所有商品</a>
				</div>
				<div class="col-md-2 item">
					<a href="https://www.w3schools.com/html/html_links.asp">耳環</a>
				</div>
				<div class="col-md-2 item">
					<a href="https://www.w3schools.com/html/html_links.asp">項鍊</a>
				</div>
				<div class="col-md-2 item">
					<a href="https://www.w3schools.com/html/html_links.asp">洗臉機</a>
				</div>
			</nav>
		</div>

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
				<div class="row" id="seller_txt_info">
					<div id="accordion">
						<div class="card">
							<div class="card-header" id="headingOne">

								<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									賣家簡介

								</div>

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="card-body">
										<?=$store->introduction?>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingTwo">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											賣家聲明
										</button>
									</h5>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
									<div class="card-body">
										<?=$store->statement?>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingThree">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											賣家貼心提醒
										</button>
									</h5>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
									<div class="card-body">
										<?=$shopReminder?>
									</div>
								</div>
							</div>
						</div>	
					</div>

				</div>
			</div>

			<!--  -->
			<div class="row">
				<?php
				foreach ($product as $key => $value) {
					?>
					<div class="col-sm-3">
						<a href="product.php">
							<div class="card" ">
								<img class="card-img-top" src="<?=$value['photo_path']?>" alt="Card image cap">
								<div class="card-body">
									<p class="card-text"><?=$value['name']?></p>
								</div>
							</div>
						</a>
					</div>
					<?php
				}
				?>
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