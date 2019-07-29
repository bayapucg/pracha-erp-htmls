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
		<div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!-- Custom Tabs -->
                        <form id="example-basic" class="employee-add-wizard">
						 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Requesting Recruitment </legend>
						
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Employee Name</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Employee Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mobile Number</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Mobile Number">
                                        </div>
                                    </div>
								
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Department</label>
                                            <select class="form-control" name="">
                                                <option value="" selected disabled>Select</option>
                                                <option value="">IT</option>
                                                <option value="">HR</option>
                                                <option value="">SALES</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Designation">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Current CTC</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Reporting Authority">
                                        </div>
                                    </div>
                                   <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Salary Expectation</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Salary ">
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <label>Experience</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter experience">
                                        </div>
                                    </div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>Notice Period</label>
											<input class="form-control " placeholder="Enter Notice Period" type="text">
										</div>
								    </div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>Interview Date</label>
											<input class="form-control " placeholder="Enter Interview Date" type="text">
										</div>
								    </div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>Interviewer Feedback</label>
											<input class="form-control " placeholder="Enter feedback">
										</div>
								    </div>
										  <div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>Upload CVV</label>
													<input class="form-control "  type="file">
												</div>
                                          </div> 
										  <div class="col-md-12 col-sm-12">
												<div class="form-group">
													<button class="btn btn-primary btn-xs">Send</button>
												</div>
                                          </div>
                                </div>
                            </section>
							</fieldset>
							 
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
	

	
</body>
</html>