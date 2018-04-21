<?php require_once('header.php'); ?>
<style>
	body{
		background: #123;
	}
	#md{
		margin-top: 140px;
	}
	.hu{
		font-family: cursive;
		font-size: 25px;
		position: center;
	}
	.hm{
		font-family: cursive;
		font-size: 25px;
		position: center;
	}
</style>

<section class="container" id="md">
	<div class="row" style="display: none;">
		<div class="hua col-sm-6">
			<div class="modal-dialog" style="width: 80%; ">
				<div class="modal-content">
					<div class="modal-body" align="center">
						<img src="img/HUniversal.svg" alt="20" width="180" height="130">
					</div>
					<div class="modal-footer">
						<a href="#" type="button" class="hu btn btn-primary btn-block">H. Universal</a>
					</div>
				</div>
			</div>

		</div>
		<div class="hma col-sm-6">
			<div class="modal-dialog" style="width: 80%;">
				<div class="modal-content">
					<div class="modal-body" align="center">
						<img src="img/HMexico.svg" alt="20" width="180" height="130">
					</div>
					<div class="modal-footer">
						<a href="HMexico/historym.php" type="button" class="hm btn btn-primary btn-block">H. Mexico</a>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="row" style="display: block;">
		<div class="col-sm-2"></div>
		<div class="hua col-sm-4" align="center">
			<img src="img/HUniversal.svg" alt="20" width="180" height="130">
			<a href="HUniversal/historyu.php" type="button" class="hu btn btn-primary btn-block">H. Universal</a>
		</div>
		<div class="hma col-sm-4" align="center">
			<img src="img/HMexico.svg" alt="20" width="180" height="130">
			<a href="HMexico/historym.php" type="button" class="hm btn btn-primary btn-block">H. Mexico</a>
		</div>
		<div class="col-sm-2"></div>
	</div>
	<br><br>
	<div class="row">
		<div class="col-sm-12" align="center">
			<div class="alert">
				<h3 style="color: #fff;"><strong>Bienvenid@ a la Historia</strong></h3>
			</div>
		</div>
	</div>
</section>
<?php require_once('footer.php'); ?>
