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
						 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Work Assignment</legend>
						
						
					
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
                                            <label>Project Title</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Project Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
											<label>Work Start Time</label>
											<input class="form-control datetimepicker" placeholder="Task Begin Time" type="text">
										</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
											<label>Work End Time</label>
											<input class="form-control datetimepicker" placeholder="Task Submit Time " type="text">
										</div>
                                    </div>
                                <div class="col-md-6 col-sm-12">
									<div class="form-group">
											<label>Select Department</label>
										<select class="selectpicker form-control" data-style="btn-outline-secondary" multiple data-max-options="5">
												<optgroup label="IT">
													<option>Designing</option>
													<option>Development</option>
													<option>Digital Marketing</option>
												</optgroup>
												<optgroup label="HR">
													<option>HR1</option>
													<option>HR2</option>
													<option>HR3</option>
												</optgroup>
												<optgroup label="Marketing">
													<option>Business Head</option>
													<option>Business Executives</option>
													<option>Telecallers</option>
												</optgroup>
										</select>
									</div>
								</div>
                                <div class="col-md-6 col-sm-12">
									<div class="form-group">
											<label>Select Employee</label>
										<select class="selectpicker form-control" data-style="btn-outline-secondary" multiple data-max-options="5">
												<optgroup label="Select Employee">
													<option>xxxxx</option>
													<option>xxxxx</option>
													<option>xxxxx</option>
													<option>xxxxx</option>
													<option>xxxxx</option>
												</optgroup>
												
										</select>
									</div>
								</div>
									 <div class="col-md-6">
										<div class="form-group">
											<label>Upload File</label>
												<input type="file" class="form-control-file form-control height-auto">
										</div>
										</div>
										  <div class="col-md-12 col-sm-12">
                                             <div class="form-group">
                                                <label>Comments</label>
                                                <textarea class="form-control" rows="6" id="comment"></textarea>	
                                             </div>
                                          </div>	
										 <div class="form-group col-md-12">
                                             <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Assign Work</button>
                                             </div>
                                          </div>
										</div>
								</section>
                        </form>
                        <!-- nav-tabs-custom -->
                    </div>
                </div>
            </div>
        </div>

						</fieldset>
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