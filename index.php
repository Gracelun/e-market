<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<META HTTP-EQUIV="Expires" CONTENT="-1">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/e-market/library/bootstrap-4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="library/css/main.css">
	<title></title>
</head>
<body>
	<!-- HEADER TOP -->
	<?php
	include 'include/header.php';
	?>
	<!-- HEADER END -->
	
	<div class="container" id = "carousel">
		<div class="row">
			<div class="col-8">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="img/carousel1.png">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/carousel2.png" >
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/carousel3.png">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="col-4" id = "carousel_ads2">
				<img src="img/ad.png" height="">
				<img src="img/ad.png">
			</div>
		</div>
		<div class="row" id="classification">
			<div class="w-100"></div>
			<div class="col item_class left" onclick="location.href='merchandise/shoppingproduct.php'"">
				<i class="fas fa-female"></i>
				<p>女生衣著</p>
			</div>
			<div class="col item_class">
				<i class="fas fa-paint-brush"></i>
				<p>美妝保健</p>
			</div>
			<div class="col item_class">
				<p>嬰幼童與母親</p>
			</div>
			<div class="col item_class">
				<i class="fas fa-couch"></i>
				<p>居家生活</p>
			</div>
			<div class="col item_class">
				
				<p>女生配件</p>
			</div>
			<div class="col item_class">
				<i class="fas fa-utensils"></i>
				<p>美食</p>
			</div>
			<div class="col item_class">
				<i class="fas fa-ticket-alt"></i>
				<p>票券</p>
			</div>
			<div class="col item_class">
				<i class="fas fa-paw"></i>
				<p>寵物</p>
			</div>
			<div class="w-100"></div>
			<div class="col item_class lower left">
				<p>男生衣著</p>
			</div>
			<div class="col item_class lower">
				<i class="fas fa-mobile-alt"></i>
				<p>手機平板與周邊</p>
			</div>
			<div class="col item_class lower">
				<i class="fas fa-laptop"></i>
				<p>3C相關</p>
			</div>
			<div class="col item_class lower">
				<i class="fas fa-film"></i>
				<p>家電影音</p>
			</div>
			<div class="col item_class lower">
				
				<p>男生包包與配件</p>
			</div>
			<div class="col item_class lower">
				
				<p>男鞋</p>
			</div>
			<div class="col item_class lower">
				<i class="fas fa-volleyball-ball"></i>
				<p>戶外與運動用品</p>
			</div>
			<div class="col item_class lower">
				<i class="fas fa-car"></i>
				<p>汽機車零件百貨</p>
			</div>
		</div>
	</div>
	<?php
	include 'include/footer.php';
	?>
	<!-- script 多半放置code最底行(執行效能問題) -->
	<script src="/e-market/library/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="/e-market/library/imsky-holder/holder.min.js"></script>
	<script src="/e-market/library/bootstrap-4.1.0/js/bootstrap.min.js"></script>
</body>
</html>