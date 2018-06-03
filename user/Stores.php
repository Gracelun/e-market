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
		#sellerbg{
			background-color: #E97778;
			height: 160px;
			width: 450px;
			border-radius:10px
		}
		#button_attention{

			margin-left: 120px;
		}
		#seller{
			margin-top: 20px;
			margin-left: 20px;
		}
		.seller_button{
			width: 150px;
		}
		#shop_name{
			font-size: 30px;
			color: #FFFFFF;
			margin-left: 10px;
		}
		.inf{
			padding: 6px;
		}
		.bar_line{
			font-size: 20px;
			color: #FFFFFF;
			border-top: 1px solid #ccc; 
		}
		#bg{
			background:#FFFFFF;
			margin-bottom: 20px;
			padding-top: 30px;
			/*padding-bottom: 50px;*/
		}
		#top_bar{
			padding-bottom: 30px;
		}
		#oder{
			padding: 20px;
		}
		#bottom_bar{
			padding: 30px;
		}



	</style>
</head>
<body>
	<!-- HEADER TOP -->
	<?php
	include '../include/header.php';
	?>
	<!-- HEADER END -->
	<div id = bg>
		<div class="row" id ="top_bar">
			<div class="col-sm-1">
			</div>
			<div class="col-sm-4">
				<div id ="sellerbg">
					<div class="row">
						<div class="col-sm-12">
							<img src="../img/luna.jpg" alt="" class="rounded-circle" width="90" height="90" id = "seller">
							<a id ="shop_name">Grace's shop</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div id ="button_attention">
								<button type="button" class="btn btn-outline-light seller_button">+關注</button>
								<button type="button" class="btn btn-outline-light seller_button">聊聊</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-2 inf">
				<div>商品:2016</div>
				<div>關注中:903</div>
			</div>
			<div class="col-sm-2 inf">
				<div>粉絲:903</div>
			</div>
			<div class="col-sm-2 inf">
				<div>評價:4.9/5(9197個評價)</div>
			</div>
			<div class="col-sm-1">
			</div>
		</div>
		<div class="row">

			<div class="col-sm-1 bar_line">
			</div>
			<div class="col-sm-2 bar_line">
				<a href="../index.php">回首頁</a>
			</div>
			<div class="col-sm-2 bar_line">
				<a href="https://www.w3schools.com/html/html_links.asp">所有商品</a>
			</div>
			<div class="col-sm-2 bar_line">
				<a href="https://www.w3schools.com/html/html_links.asp">耳環</a>
			</div>
			<div class="col-sm-2 bar_line">
				<a href="https://www.w3schools.com/html/html_links.asp">項鍊</a>
			</div>
			<div class="col-sm-2 bar_line">
				<a href="https://www.w3schools.com/html/html_links.asp">洗臉機</a>
			</div>
			<div class="col-sm-1 bar_line">
			</div>	
		</div>
	</div>
	<!--  -->

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
					<div id="accordion">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										賣家簡介
									</button>
								</h5>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
					</div>	
				</div>
				
			</div>
		</div>
	</div>

	<!--  -->
	<div class="container" id = "bottom_bar">
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