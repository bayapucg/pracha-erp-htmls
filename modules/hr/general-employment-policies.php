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
							<h4 class="text-blue mb-30">Part-1: General Employment Policies and Practices</h4>
						</div>
						
					</div>
					
						<div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!-- Custom Tabs -->
                        <form id="example-basic" class="employee-add-wizard">
							 <fieldset class="scheduler-border">
						<legend class="scheduler-border">General Employment Policies and Practices</legend>
								<section>
                                <div class="row">
								<div class="col-md-12">
                                    <div class="html-editor pd-20 bg-white border-radius-4 box-shadow mb-30">
										<textarea class="textarea_editor form-control border-radius-0" placeholder="Enter text ..."></textarea>
									</div>
									</div>
                                </div>
                            </section>
							</fieldset> 
                            <div>
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Add</button>
                            </div>
                        </form>
                        <!-- nav-tabs-custom -->
                    </div>
                </div>
            </div>
        </div>

						
					
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