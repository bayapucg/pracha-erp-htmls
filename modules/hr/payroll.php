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
						<legend class="scheduler-border">view Payroll </legend>
						
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Month</label>
                                           <select class="form-control">
												<option>January</option>
												<option>February</option>
												<option>March</option>
											</select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
									 <label>&nbsp;</label>
                                      <div class="form-group">
													<a href="payroll-view.php" class="btn btn-primary btn-xs">Genarate Payroll</a>
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
				<br>
				<br>
				<br>
				<br>
				<br>
	<?php include('footer.php'); ?>
	</div>
	</div>
	<?php include('script.php'); ?>
	

	
</body>
</html>