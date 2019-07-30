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
							<h4 class="text-blue mb-30">Feedback</h4>
						</div>
						
					</div>
					<form>
						<div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!-- Custom Tabs -->
                        <form id="example-basic" class="employee-add-wizard">
                            <fieldset class="scheduler-border">
						<legend class="scheduler-border">Feedback Information</legend>
                            <section>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>One Good Thing About The Company</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter One Good Thing">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                                <label>One Bad Thing About The Company</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter One Bad Thing">	
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>One Suggestion For The Company</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter One Suggestion">
                                        </div>
                                    </div>
									<div class="col-md-6 col-sm-12">
										<h4>Rate The Company</h4>
					                        <div class="review-block-rate">
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
								  <span class="fa fa-star text-white" aria-hidden="true"></span>
								</button>
											 </div>
									</div>
                            </section>
                            </fieldset>
                           
							<br>
							
							<div>
                            <div>
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
                              
                            </div>
                        </div>
                        </form>
                        <!-- nav-tabs-custom -->
                    </div>
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
	<script>
    $("#example-basic").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        autoFocus: true
    });
</script>
	
</body>
</html>