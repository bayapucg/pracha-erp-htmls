<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?>
	<style>
.checked {
  color: orange;
}
</style>
</head>
<body>
	<?php include('header.php'); ?>
	<?php include('sidebar.php'); ?>
			<div class="main-container">
			<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
						<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
						<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue mb-30">Feedback</h4>
						</div>
						
					</div>
					<form>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>One good thing about Pracha</label>
									<input type="text" class="form-control" placeholder="Good Thing">
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>One bad thing about Pracha</label>
									<input type="text" class="form-control" placeholder="Bad Thing" >
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
									<h4>Rate Pracha</h4>
								<a href="#"><span class="fa fa-star checked"></span></a>
								<a href="#"><span class="fa fa-star checked"></span></a>
								<a href="#"><span class="fa fa-star checked"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
								
							</div>
							
							  <div class="form-group col-md-12">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit" class="btn btn-primary mt-5" name="Submit" value="Submit">Submit</button>
                              
                            </div>
                        </div>
						</div>

						
					</form>
				</div>
	<?php include('footer.php'); ?>
	</div>
	</div>
	<?php include('script.php'); ?>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
	
</body>
</html>