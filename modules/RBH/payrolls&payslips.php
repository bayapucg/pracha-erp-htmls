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
							<h4 class="text-blue mb-30">My Payslip</h4>
						</div>
						
					</div>
					<form>
						<div class="row">
							<div class="col-md-6 col-sm-12">
							<form>
								<div class="form-group">
									<label>Select Month</label>
									<input class="form-control month-picker" placeholder="Select Month" type="text">
								</div>
								
							</form>
						</div>
						</div>
						<div class="row">
								<div class="col-md-6 col-sm-12>
								<div class="form-group">
							<label>Reason for Request</label>
							<input type="text" class="form-control">
							
						</div>	
						<div class="form-group col-md-12">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit" class="btn btn-primary mt-5" name="signup" value="Sign up">Request</button>
                              
                            </div>
                        </div>						
							</div>
							</div>												
					
					</form>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue">Payslip Requests</h4>
							
						</div>
					
					</div>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Date</th>
								<th scope="col">Month</th>
								<th scope="col">Status</th>								
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">Today</th>
								<td>June</td>
								<td>Pending</td>
							</tr>
							<tr>
								<th scope="row">10-07-2019</th>
								<td>May</td>
								<td>In Review</td>
							</tr>
							<tr>
								<th scope="row">20-06-2019</th>
								<td>April</td>
								<td>Accepted</td>
							</tr>
						</tbody>
					</table>
					
				</div>
				
						
	<?php include('footer.php'); ?>
	</div>
	</div>
	<?php include('script.php'); ?>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
	
</body>
</html>