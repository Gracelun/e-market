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
		.content{
			background-color: #FFFFFF;
			padding: 20px;
		}
		#line{
			padding: 1px;
			background-color: #F1F0F0;
		}
		#header_bar{
			margin-bottom: 10px;
		}
		#signin{
			margin-top: 12px;
		}
		.inf{
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
	<div class="container" id = "frame">
		<div class="row">
			<div class="col-sm-2">
				<div class="btn-group-vertical">
					<div class="btn-group" role="group">
						<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							我的帳戶
						</button>
						<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
							<a class="dropdown-item" href="#">個人檔案</a>
							<a class="dropdown-item" href="#">更改密碼</a>
						</div>
					</div>
					<button type="button" class="btn btn-secondary">購物清單</button>
				</div>
			</div>
			<div class="col-sm-10 content">
				<div class="row" id ="header_bar">
					<div class="col-sm-12">我的檔案</div>
					<div class="col-sm-12">管理您的檔案以保護您的帳戶</div>
				</div>
				<div id ="line"></div>
				<div class="row inf">
					<div class="col-sm-6">
						<form>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword3" class="col-sm-2 col-form-label">手機號碼</label>
								<div class="col-sm-10">
									<input type="number" class="form-control" id="inputPassword3" placeholder="Phone">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword3" class="col-sm-2 col-form-label">賣場名稱</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="inputPassword3" placeholder="name">
								</div>
							</div>
							<fieldset class="form-group">
								<div class="row">
									<legend class="col-form-label col-sm-2 pt-0">性別</legend>
									<div class="col-sm-10">
										<div class="custom-control custom-radio custom-control-inline">
											<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
											<label class="custom-control-label" for="customRadioInline1">男</label>
										</div>
										<div class="custom-control custom-radio custom-control-inline">
											<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
											<label class="custom-control-label" for="customRadioInline2">女</label>
										</div>
									</div>
								</div>
							</fieldset>
							<label for="validationDefault01">生日</label>
							<input type="date" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
							<div class="form-group row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-primary" id ="signin">Sign in</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-sm-6">

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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="/e-market/library/bootstrap-4.1.0/js/bootstrap.min.js"></script>
</body>
</html>