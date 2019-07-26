<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?>
	<style>
.checked {
color: orange;
}
</style>
</head>
<body>
	<?php include('header.php'); ?>
	<?php include('sidebar.php'); ?>
			<div class="main-container">
			<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
						<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
						
						<div class="min-height-200px">
               <div class="row clearfix">
                  <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                     <div class="pd-20 bg-white border-radius-4 box-shadow">
                        <h4 class="weight-500 mb-20 text-primary">Feedback</h4>
                        <div class="tab">
                           <ul class="nav nav-tabs customtab" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#feedback" role="tab" aria-selected="true">Feedback</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#feedbacklist" role="tab" aria-selected="false">Feedback List</a>
                              </li>
                           </ul>
                           <div class="tab-content">
                              <div class="tab-pane fade show active" id="feedback" role="tabpanel">
                                 <div class="pd-20">
                                    <div class="clearfix mb-20">
                                       <div class="pull-left">
                                          <h5 class="text-blue">Add Designation</h5>
                                       </div>
                                    </div>
                   <form>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>One good thing about Pracha</label>
									<input type="text" class="form-control" placeholder="Good Thing">
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>One bad thing about Pracha</label>
									<input type="text" class="form-control" placeholder="Bad Thing" >
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
									<h4>Rate Pracha</h4>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>

							</div>
							
							  <div class="form-group col-md-12">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit" class="btn btn-primary mt-5" name="Submit" value="Submit">Submit</button>
                              
                            </div>
                        </div>
						</div>

						
					</form>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="feedbacklist" role="tabpanel">
                                 <div class="pd-20">
                                    <!-- data table  Start -->
                                    <div class="clearfix mb-20">
                                       <div class="pull-left">
                                          <h5 class="text-blue">Designation List</h5>
                                       </div>
                                    </div>
                                   <div class="row clearfix progress-box">
                     
                        <div class="col-lg col-md-6 col-sm-12 mb-30">
						<a href="feedbackview.php">
                           <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                              <div class="project-info clearfix">
                                 <div class="project-info-left">
                                    <div class="icon box-shadow bg-blue text-white">
                                       <i class="fa fa-briefcase"></i>
                                    </div>
                                 </div>
                                 <div class="project-info-right">
                                    <p class="weight-400 font-18">East Region</p>
                                 </div>
                              </div>
                              <div class="project-info-progress">
                                 <div class="row clearfix">
                                    <div class="col-sm-6 text-muted weight-500">Rating</div>
                                    <div class="col-sm-6 text-right weight-500 font-14 text-muted">40</div>
                                 </div>
                                 <div class="progress" style="height: 10px;">
                                    <div class="progress-bar bg-blue progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </div>
                           </div>
						     </a>
                        </div>
                   

                        <div class="col-lg col-md-6 col-sm-12 mb-30">
						<a href="feedbackview.php">
                           <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                              <div class="project-info clearfix">
                                 <div class="project-info-left">
                                    <div class="icon box-shadow bg-light-green text-white">
                                       <i class="fa fa-handshake-o"></i>
                                    </div>
                                 </div>
                                 <div class="project-info-right">
                                    <p class="weight-400 font-18">West Region</p>
                                 </div>
                              </div>
                              <div class="project-info-progress">
                                 <div class="row clearfix">
                                    <div class="col-sm-6 text-muted weight-500">Rating</div>
                                    <div class="col-sm-6 text-right weight-500 font-14 text-muted">50</div>
                                 </div>
                                 <div class="progress" style="height: 10px;">
                                    <div class="progress-bar bg-light-green progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </div>
                           </div>
						 </a>
                        </div>
                 
                    
                        <div class="col-lg col-md-6 col-sm-12 mb-30">
						 <a href="feedbackview.php">
                           <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                              <div class="project-info clearfix">
                                 <div class="project-info-left">
                                    <div class="icon box-shadow bg-light-orange text-white">
                                       <i class="fa fa-list-alt"></i>
                                    </div>
                                 </div>
                                 <div class="project-info-right">
                                    <p class="weight-400 font-18">North Region</p>
                                 </div>
                              </div>
                              <div class="project-info-progress">
                                 <div class="row clearfix">
                                    <div class="col-sm-6 text-muted weight-500">Rating</div>
                                    <div class="col-sm-6 text-right weight-500 font-14 text-muted">80</div>
                                 </div>
                                 <div class="progress" style="height: 10px;">
                                    <div class="progress-bar bg-light-orange progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </div>
                           </div>
						    </a> 
                        </div>
                    
					
                        <div class="col-lg col-md-6 col-sm-12 mb-30">
						 <a href="feedbackview.php">
                           <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                              <div class="project-info clearfix">
                                 <div class="project-info-left">
                                    <div class="icon box-shadow bg-light-purple text-white">
                                       <i class="fa fa-podcast"></i>
                                    </div>
                                 </div>
                                 <div class="project-info-right">
                                    <p class="weight-400 font-18">South Region</p>
                                 </div>
                              </div>
                              <div class="project-info-progress">
                                 <div class="row clearfix">
                                    <div class="col-sm-6 text-muted weight-500">Rating</div>
                                    <div class="col-sm-6 text-right weight-500 font-14 text-muted">75</div>
                                 </div>
                                   <div class="progress" style="height: 10px;">
                                    <div class="progress-bar bg-light-purple progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </div>
                           </div>
						    </a>
                        </div>
						<div class="col-lg col-md-6 col-sm-12 mb-30">
							 <a href="feedbackview.php">
							   <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
								  <div class="project-info clearfix">
									 <div class="project-info-left">
										<div class="icon box-shadow bg-light-purple text-white">
										   <i class="fa fa-podcast"></i>
										</div>
									 </div>
									 <div class="project-info-right">
										<p class="weight-400 font-18">Central Region</p>
									 </div>
								  </div>
								  <div class="project-info-progress">
									 <div class="row clearfix">
										<div class="col-sm-6 text-muted weight-500">Rating</div>
										<div class="col-sm-6 text-right weight-500 font-14 text-muted">60</div>
									 </div>
									   <div class="progress" style="height: 10px;">
										<div class="progress-bar bg-light-purple progress-bar-striped progress-bar-animated" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
									 </div>
								  </div>
							   </div>
								</a>
							</div>
                    </div>
                    
                      
                  </div>
                                    <!-- data table  End -->
                                 </div>
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