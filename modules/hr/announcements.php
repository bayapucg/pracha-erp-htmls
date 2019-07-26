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
							<h4 class="text-blue mb-30">Announcements</h4>
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
                            
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Announcements Type</label>
                                            <select class="form-control" name="">
                                                <option value="" selected disabled>Select</option>
                                                <option value="">Public Announcements</option>
                                                <option value="">Private Announcements</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                                <label>Comments</label>
                                                <textarea class="form-control" rows="5" id="comment"></textarea>	
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Upload Files</label>
                                            <input type="file" class="form-control" name="">
                                        </div>
                                    </div>
                            </section>
                            
                           
							<br>
							
							<div>
                            <div>
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Announce</button>
                              
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