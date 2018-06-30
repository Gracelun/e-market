<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="/e-market/library/bootstrap-4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../library/css/main.css">
	<!-- HEADER TOP -->
</head>
<body>
	<!-- HEADER TOP -->
	<?php
	include '../include/header.php';
	include '../library/fun_checkLogin.php';
	include '../library/lib_store.php';
	$member_id = $_SESSION['userID'];
	$store = new store($member_id);
	$info = $store->getSellerInfo();
	$shopName = $info['name'];
	$shopPhoto = '../upload/user/'.$member_id.'/'.$info['photo'];
	$shopIntroduction = $info['introduction'];
	$shopStatement = $info['statement'];
	$shopReminder = $info['reminder'];

	$product = $store->getSellerProduct();
	?>
	<!-- HEADER END -->
	<div class="container" id = "frame">
		<div class="row">
			<div class="col-sm-2">
				<div id="list-exampleone" class="list-group">
					<button type="button" class="btn btn-info"><a href="backstage_createproduct.php">新增商品</a></button>
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
					<div class="row">
						<?php
						foreach ($product as $key => $value) {
							?>
							<div class="col-sm-3">
								<a href="product.php/?pid=<?=$value['merchandise_id']?>">
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
	<script src="/e-market/library/tinymce/js/tinymce/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>
</body>
</html>