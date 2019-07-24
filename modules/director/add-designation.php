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
							<h4 class="text-blue mb-30">Add Designation</h4>
						</div>
						
					</div>
					<form>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Select Department</label>
									<select class="selectpicker form-control" data-style="btn-outline-primary">
										<optgroup label="Select Department" data-max-options="2">
											<option>Select Department</option>
											<option>IT</option>
											<option>Sales</option>
											<option>HR</option>
										</optgroup>
									</select>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Assign Level</label>
									<select class="selectpicker form-control" data-style="btn-outline-primary">
										<optgroup label="Select Level" data-max-options="2">
											<option>Select Level</option>
											<option>Level 1</option>
											<option>Level 2</option>
											<option>Level 3</option>
											<option>Level 3.1</option>
											<option>Level 4</option>
											<option>Level 5</option>
										</optgroup>
									</select>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 mb-20">
								<div class="form-group">
									<label>Add Roles and Responsibilities</label>
									<input type="text" class="form-control" placeholder="Enter Roles & Responsibilities
									">
								</div>
							</div>
						<div class="form-group col-md-12">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Add</button>
                              
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