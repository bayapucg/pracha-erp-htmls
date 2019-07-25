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
				 <div class="min-height-200px">
               <div class="row clearfix">
                  <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                     <div class="pd-20 bg-white border-radius-4 box-shadow">
                        <h5 class="weight-500 mb-20 text-primary">Department</h5>
                        <div class="tab">
                           <ul class="nav nav-tabs customtab" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#add-department" role="tab" aria-selected="true">Add Designation</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#departmentlist" role="tab" aria-selected="false">Department List</a>
                              </li>
                           </ul>
                           <div class="tab-content">
                              <div class="tab-pane fade show active" id="add-department" role="tabpanel">
                                 <div class="pd-20">
                                    <div class="clearfix mb-20">
                                       <div class="pull-left">
                                          <h4 class="text-blue">Add Designation</h4>
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
							<div class="col-md-6 col-sm-12 mb-20">
								<div class="form-group">
									<label>Designation</label>
									<input type="text" class="form-control" placeholder="Enter Designation">
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
                              </div>
                              <div class="tab-pane fade" id="departmentlist" role="tabpanel">
                                 <div class="pd-20">
                                    <!-- basic table  Start -->
                                    <div class="clearfix mb-20">
                                       <div class="pull-left">
                                          <h4 class="text-blue">Designation List</h4>
                                       </div>
                                    </div>
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th scope="col">#</th>
                                             <th scope="col">Department</th>
                                             <th scope="col">Designation</th>
                                             <th scope="col">Level</th>
                                             <th scope="col">Roles & Responsibilities</th>
                                             <th scope="col">Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <th scope="row">1</th>
                                             <td>IT</td>
                                             <td>Developer</td>
                                             <td>4</td>
                                             <td>File</td>
                                             <td>
                                                <div class="dropdown">
                                                   <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                   <i class="fa fa-ellipsis-h"></i>
                                                   </a>
                                                   <div class="dropdown-menu dropdown-menu-right">
                                                      <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
                                                      <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i>Edit</a>
                                                      <a class="dropdown-item" href="#"><i class="fa fa-trash"></i>Delete</a>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <th scope="row">2</th>
                                            <td>IT</td>
                                             <td>Developer</td>
                                             <td>4</td>
                                             <td>File</td>
                                             <td>
                                                <div class="dropdown">
                                                   <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                   <i class="fa fa-ellipsis-h"></i>
                                                   </a>
                                                   <div class="dropdown-menu dropdown-menu-right">
                                                      <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
                                                      <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i>Edit</a>
                                                      <a class="dropdown-item" href="#"><i class="fa fa-trash"></i>Delete</a>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <th scope="row">3</th>
                                             <td>IT</td>
                                             <td>Developer</td>
                                             <td>4</td>
                                             <td>File</td>
                                             <td>
                                                <div class="dropdown">
                                                   <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                   <i class="fa fa-ellipsis-h"></i>
                                                   </a>
                                                   <div class="dropdown-menu dropdown-menu-right">
                                                      <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
                                                      <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i>Edit</a>
                                                      <a class="dropdown-item" href="#"><i class="fa fa-trash"></i>Delete</a>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <!-- basic table  End -->
                                 </div>
                              </div>
                           </div>
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
	
</body>
</html>