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
							<h4 class="text-blue mb-30">Apply For Time-Off</h4>
						</div>
						
					</div>
					<form>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Start Date and time</label>
									<input class="form-control datetimepicker" placeholder="Choose Date and time" type="text">
								</div>

							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>End Date and time</label>
									<input class="form-control datetimepicker" placeholder="Choose Date and time" type="text">
								</div>
							</div>
						
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
							<label>Work Sharing Partner</label>
									<select class="selectpicker form-control" data-style="btn-outline-primary">
										<optgroup label="Select Type" data-max-options="2">
											<option>Select Employee</option>
											<option>Anu</option>
											<option>Arya</option>
											<option>Work from home - 2</option>
											<option>Earned Leave - 4</option>
											<option>Compensation Off - NA</option>
											<option>Maternity Leave - 30</option>
										</optgroup>
										
									</select>
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
							<label>Comment</label>
							<textarea class="form-control" rows="5" id="comment"></textarea>						
							</div>
							</div>
							
							  <div class="form-group col-md-12">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit" class="btn btn-primary" name="Apply" value="Apply">Apply</button>
                              
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