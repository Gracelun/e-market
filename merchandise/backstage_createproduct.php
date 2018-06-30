<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/e-market/library/bootstrap-4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../library/css/main.css">
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
				<form action = "action_insert.php" method = "POST" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabelone">新增商品</h5>
					</div>
					<div class="modal-body">

						<div class="form-group">
							<span>商品名稱</span>
							<input type="text" name="name" class="form-control" value="123">
						</div>
						<div class="form-group">
							<span>商品價錢</span>
							<input type="password" name="price" class="form-control" value="10000">
						</div>
						<div class="form-group">
							<span>商品描述</span>
							<textarea class="form-control" name="introduction">QQ</textarea>
						</div>
						<div class="form-group">
							<label>商品圖片</label>
							<input type="file" class="form-control-file" name = "photo">
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" name="create">Submit</button>
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
	<script src="/e-market/library/tinymce/js/tinymce/tinymce.min.js"></script>
  	<script>tinymce.init({ selector:'textarea' });</script>
</body>
</html>