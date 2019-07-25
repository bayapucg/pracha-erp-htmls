<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?>
</head>
<body>
	<?php include('header.php'); ?>
	<?php include('sidebar.php'); ?>
			<div class="main-container">
			<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
						<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
						<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue mb-30">Payroll</h4>
						</div>
						
					</div>
					<form>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Select Region</label>
									<select class="selectpicker form-control" data-style="btn-outline-primary">
										<optgroup label="Select Region" data-max-options="2">
											<option>East Region</option>
											<option>West Region</option>
											<option>North Region</option>
											<option>South Region</option>
											<option>Central</option>
										</optgroup>
									</select>
								</div>
							</div>
						<div class="form-group col-md-6" style="margin-top:30px">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit" class="btn btn-primary" name="view" value="View">View</button>
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