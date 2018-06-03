<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<META HTTP-EQUIV="Expires" CONTENT="-1">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="/e-market/library/bootstrap-4.1.0/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="../library/css/header.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<title></title>
		<style type="text/css">
			body{
				background-color: #F1F0F0;
			}
			.top{
				padding: 20px;
				background-color: #FFFFFF;

			}
			.seller{
				padding: 20px;
				background-color: #FFFFFF;
				margin-top: 20px;
				top: 30px;
				border-bottom: 1px solid #ccc;
			}	
			.context{
				padding: 20px;
				background-color: #FFFFFF;
				
			}
			.bottom{
				padding: 30px;
				background-color: #FFFFFF;
				border-top: 1px solid #ccc;
			}
			.btn-default{
				color: #444444;
				border-radius: 0;
				background-color: #E2E2E2;
				border-color: #8E8E8E;
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
			<div class="row top">
				<div class="col-6">
					<input type="checkbox" aria-label="Checkbox for following text input">
					商品
				</div>
				<div class="col-1">
					單價
				</div>
				<div class="col-3">
					數量
				</div>
				<div class="col-1">
					總計
				</div>
				<div class="col-1">
					操作
				</div>
			</div>

			
			<div class="row seller">
				<div class="col-8">
					<input type="checkbox" aria-label="Checkbox for following text input" >

					<img src="../img/luna.jpg" alt="" class="rounded-circle" width="35" height="35">
					<a>gra_e</a>

				</div>
			</div>
			
			<div class="row context" >
				<div class="col-6">
					<input type="checkbox" aria-label="Checkbox for following text input">
					<img src="../img/luna.jpg" alt="" class="border-0" width="100" height="100">
					FOREO LUNA PLAY超聲波潔面儀
				</div>
				<div class="col-1">
					$2000
				</div>
				<div class="col-3">
					<div class="input-group number-spinner" style="display: inline-block;width: auto;">
						<span class="input-group-btn" style="float: left;width: auto;">
							<button class="btn btn-default" data-dir="dwn" style="height: 34;"><i class="fas fa-minus"></i></button>
						</span>
						<input name="buy_num" id="buy_num" type="text" class="form-control text-center" value="1" style="float: left;width: auto;width:4em;">
						<span class="input-group-btn" style="float: left;width: auto;">
							<button class="btn btn-default" data-dir="up"><i class="fas fa-plus"></i></button>
						</span>
					</div>

				</div>
				<div class="col-1">
					總計
				</div>
				<div class="col-1">
					刪除
				</div>
			</div>
			

			<div class="row bottom">
				<i class="fas fa-truck">   grace's shop的訂單滿$1,000，7-11、全家、萊爾富、中華郵政、賣家宅配免運費</i>
			</div>
			

		</div>



































		<?php
		include '../include/footer.php';
		?>
		<!-- script 多半放置code最底行(執行效能問題) -->
		
		<script src="/e-market/library/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="/e-market/library/imsky-holder/holder.min.js"></script>
		<script src="/e-market/library/bootstrap-4.1.0/js/bootstrap.min.js"></script>
		<script src="/e-market/library/js/quantity.js"></script>
	</body>
	</html>