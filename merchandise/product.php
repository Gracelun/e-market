<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/e-market/library/bootstrap-4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/e-market/library/css/main.css">
	<style type="text/css">
</style>
</head>
<body>
	<!-- HEADER TOP -->
	<?php
	include '../include/header.php';
	include '../library/lib_merchandise.php';
	$pid = $_GET['pid'];
	$merchandise = new merchandise($pid);
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
							<img class="d-block w-100" src="<?=$merchandise->photo_path?>" alt="First slide">
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
				<div class="row" id="oder" style="background-color: white">
					<div class="col-12 order_header">
						<?=$merchandise->name?>
					</div>
					<div class="col-12 order_header">
						賣場折扣碼
					</div>
					<div class="col-12 order_header">
						<img src="../../img/star.png" alt="star" id ="star">
						<img src="../../img/star.png" alt="star" id ="star">
						<img src="../../img/star.png" alt="star" id ="star">
						<img src="../../img/star.png" alt="star" id ="star">
						<img src="../../img/star.png" alt="star" id ="star">
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
						<div style="text-align: right;">
							<form>
								<button type="button" class="btn btn-danger">刪除商品</button>
							</form>
							<form>
								<button type="button" class="btn btn-danger">修改商品</button>
							</form>
							<button type="button" class="btn btn-danger">直接購買</button>
							<button type="button" class="btn btn-outline-danger">加入購物車</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 上 -->
		<div class="row block" id="user_info">
			<div class="col-3">
				<img src="../img/luna.jpg" alt="" class="rounded-circle user_picture" width="60" height="60">
				<span class="user_name">gra_e</span>
				<button type="button" class="btn btn-outline-primary btn-sm">查看賣場</button>
				<button type="button" class="btn btn-outline-primary btn-sm">關注</button>
			</div>
			<div class="col-3 barborderleft">
				<div><span class="score">2015</span></div>
				<div>商品</div>
			</div>
			<div class="col-3 barborderleft">
				<div><span class="score">2015</span></div>
				<div>商品評價</div>
			</div>
			<div class="col-3 barborderleft">
				<div><span class="score"><?=$merchandise->created_at?></span></div>
				<div>加入時間</div>
			</div>
		</div>
		<div class="row">
			<nav class="page_selector bar">
				<a class="item active" href="#">商品詳情</a>
				<a class="item" href="#">商品評價</a>
				<a class="item" href="#">最熱銷</a>
				<a class="item" href="#">價格</a>
			</nav>
			<div class="col-12 block">
				<?=$merchandise->introduction?>
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