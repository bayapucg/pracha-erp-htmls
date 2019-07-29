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
							<h4 class="text-blue mb-30">Add Employee</h4>
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
						<legend class="scheduler-border">Basic Information</legend>
						
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Last Name">
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
                                            <label>Alt Mobile Number</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Id</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Your Email">
                                        </div>
                                    </div> 
									<div class="col-md-6">
                                        <div class="form-group">
                                            <label>Alt Email Id</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Your Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Contact Adress</label>
                                                <textarea class="form-control" rows="4" id="comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Permanent Address</label>
                                            <textarea class="form-control" rows="4" id="comment"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </section>
							</fieldset>
							 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Employement Details</legend>
								<section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Designation">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Employment Type</label>
                                            <select class="form-control" name="">
                                                <option value="" selected disabled>Select</option>
                                                <option value="">Full-time</option>
                                                <option value="">Part-time</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Basic Salary </label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Salary Details">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Working Email Id</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Work Email Id">
                                        </div>
                                    </div>
                                  
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Working Days / Timings</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Total Working days/timings">
                                        </div>
                                    </div>
                                </div>
                            </section>
							</fieldset> 
							<fieldset class="scheduler-border">
						<legend class="scheduler-border">Documents</legend>
								<section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Adhar Card</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Adhar card No">
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <label>Upload</label>
                                            <input type="file" class="form-control" name="" placeholder="Enter Adhar card No">
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pan Card</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Pan Card no">
                                        </div>
                                    </div>	
									<div class="col-md-6">
                                        <div class="form-group">
                                            <label>Upload</label>
                                            <input type="file" class="form-control" name="">
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <label>Passport</label>
                                            <input type="text" class="form-control" name="" placeholder="Passport no">
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <label>upload</label>
                                            <input type="file" class="form-control" name="">
                                        </div>
                                    </div>
									<div class="col-md-4">
                                        <div class="form-group">
                                            <label>Address Proof </label>
                                            <select class="form-control">
												<option>Select</option>
												<option>Adhar</option>
												<option>Votar</option>
												<option>Electricity Bill</option>
												
											</select>
                                        </div>
                                    </div>
									<div class="col-md-4">
                                        <div class="form-group">
                                            <label>Id proof Number</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Id proof Number ">
                                        </div>
                                    </div>
									<div class="col-md-4">
                                        <div class="form-group">
                                            <label>Upload</label>
                                            <input type="file" class="form-control" name="" >
                                        </div>
                                    </div>
									
                                </div>
                            </section>
							</fieldset>
							
						
                            <div>
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Create Employee</button>
                              
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