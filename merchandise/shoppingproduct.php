<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="/e-market/library/bootstrap-4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../library/css/main.css">
</head>
<body>
	<!-- HEADER TOP -->
	<?php
	include '../include/header.php';
	?>
	<!-- HEADER END -->

	<!-- SIDE MENU TOP -->
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<form id="classification_selector">
					<a href=""><h4><b>分類</b><i class="fas fa-angle-down"></i></h4></a>
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

					<hr>

					<a href=""><h4><b>出貨地點</b><i class="fas fa-angle-down"></i></h4></a>
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

					<hr>
					<a href=""><h4><b>運送方式</b><i class="fas fa-angle-down"></i></h4></a>
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
					<button class="btn my-2 my-sm-0" type="submit">搜尋</button>
				</form>
			</div>
			<!-- SIDE MENU END -->

			<div class="col-sm-10">
				<!-- UPPER MENU TOP -->
				<nav class="page_selector">
					<a class="item active" href="#">綜合排名</a>
					<a class="item" href="#">最新</a>
					<a class="item" href="#">最熱銷</a>
					<a class="item" href="#">價格</a>
				</nav>
				<!-- UPPER MENU END -->


				<div class="row">
					<div class="col-sm-3 product">
						<a href="product.php">
							<div class="card" ">
								<img class="card-img-top" src="../img/luna.jpg" alt="Card image cap">
								<div class="card-body">
									<p class="card-text">夏季特價 洗臉機</p>
								</div>
							</div>
						</a>
					</div>

					<div class="col-sm-3 product">
						<a href="product.php">
							<div class="card" ">
								<img class="card-img-top" src="../img/luna.jpg" alt="Card image cap">
								<div class="card-body">
									<p class="card-text">出來騙錢的 洗臉機</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-sm-3 product">
						<a href="product.php">
							<div class="card" ">
								<img class="card-img-top" src="../img/luna.jpg" alt="Card image cap">
								<div class="card-body">
									<p class="card-text">誇大不實的洗臉機</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-sm-3 product">
						<a href="product.php">
							<div class="card" ">
								<img class="card-img-top" src="../img/luna.jpg" alt="Card image cap">
								<div class="card-body">
									<p class="card-text">華而不實的洗碗機</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-sm-3 product">
						<a href="product.php">
							<div class="card" ">
								<img class="card-img-top" src="../img/luna.jpg" alt="Card image cap">
								<div class="card-body">
									<p class="card-text">華而不實的洗碗機</p>
								</div>
							</div>
						</a>
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