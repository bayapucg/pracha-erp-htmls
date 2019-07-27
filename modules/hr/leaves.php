<!DOCTYPE html>
<html>
  
      <?php include('head.php'); ?>

   <body>
      <?php include('header.php'); ?>
      <?php include('sidebar.php'); ?>
      <div class="main-container">
         <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
            <div class="min-height-200px">
               <div class="row clearfix">
                  <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                     <div class="pd-20 bg-white border-radius-4 box-shadow">
					 		 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Leave Manaegement</legend>
                        <h4 class="weight-500 mb-20 text-primary"></h4>
							<div class="tab">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item">
										<a class="nav-link active text-blue" data-toggle="tab" href="#home" role="tab" aria-selected="true">Apply for leave </a>
									</li>
									<li class="nav-item">
										<a class="nav-link  text-blue" data-toggle="tab" href="#work" role="tab" aria-selected="true">Work from Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Late / Early permission</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#emp-lv" role="tab" aria-selected="false"> Remaing Leaves </a>
									</li>
								
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="home" role="tabpanel">
										<div class="pd-20">
											
                                       <div class="row">
                                      
                                          <div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>Leave Start Date</label>
													<input class="form-control datetimepicker" placeholder="Choose Leave Date From" type="text">
												</div>
                                          </div>
                                          <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
													<label>Leave End Date</label>
													<input class="form-control datetimepicker" placeholder="Choose Leave Date To" type="text">
												</div>
                                          </div>
										  <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
                                                <label>Work Sharing Partner</label>
                                                <input type="text" class="form-control" placeholder="Enter Work Sharing Partner">
                                             </div>
                                          </div>
                                          <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
                                               <label class="">Type Of Leave</label>
										<div >
											<select class="custom-select col-12">
												<option selected="">Choose...</option>
												<option value="1">Casual Leave</option>
												<option value="2">Sick Leave</option>
									
											</select>
										</div>
                                             </div>
                                          </div>
										      <div class="col-md-12 col-sm-12">
                                             <div class="form-group">
                                                <label>Leave Reason</label>
                                                <textarea type="text" class="form-control"  rows="4"> Reason For Leave</textarea>
                                             </div>
                                          </div>
										  <br>
										  <br>
                                     <div class="form-group col-md-12">
                                             <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary" name="assign" value="Assign">Apply For Leave</button>
                                             </div>
                                          </div>
                                       </div>
                                    
										</div>
									</div>
									<div class="tab-pane fade show " id="work" role="tabpanel">
										<div class="pd-20">
											<form>
                                       <div class="row">
                                           <div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>Work from home Start Date</label>
													<input class="form-control datetimepicker" placeholder=" Date From" type="text">
												</div>
                                          </div>
                                          <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
													<label>Work from home Leave End Date</label>
													<input class="form-control datetimepicker" placeholder=" Date To" type="text">
												</div>
                                          </div>
										  
										      <div class="col-md-12 col-sm-12">
                                             <div class="form-group">
                                                <label> Reason</label>
                                                <textarea type="text" class="form-control"  rows="4"> Reason For Work From Home</textarea>
                                             </div>
                                          </div>
										  <br>
										  <br>
                                     <div class="form-group col-md-12">
                                             <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary" name="assign" value="Assign">Apply For Leave</button>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
										</div>
									</div>
									<div class="tab-pane fade show " id="work" role="tabpanel">
										<div class="pd-20">
											<form>
                                       <div class="row">
                                          <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
                                                <label>Leave Reason</label>
                                                <input type="text" class="form-control" placeholder="Reason For Leave">
                                             </div>
                                          </div>
                                          <div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>Leave Start Date</label>
													<input class="form-control datetimepicker" placeholder="Choose Leave Date From" type="text">
												</div>
                                          </div>
                                          <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
													<label>Leave End Date</label>
													<input class="form-control datetimepicker" placeholder="Choose Leave Date To" type="text">
												</div>
                                          </div>
										  <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
                                                <label>Work Sharing Partner</label>
                                                <input type="text" class="form-control" placeholder="Enter Work Sharing Partner">
                                             </div>
                                          </div>
                                          <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
                                               <label class="">Type Of Leave</label>
										<div >
											<select class="custom-select col-12">
												<option selected="">Choose...</option>
												<option value="1">Casual Leave</option>
												<option value="2">Sick Leave</option>
									
											</select>
										</div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
										</div>
									</div>
									<div class="tab-pane fade" id="profile" role="tabpanel">
										<div class="pd-20">
											<form>
                                       <div class="row">
                                       
										
                                          <div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>From Time</label>
														<input class="form-control time-picker-default" placeholder="time" type="text">
												</div>
                                          </div>
                                          <div class="col-md-6 col-sm-12">
                                             <div class="form-group">
													<label>To Time</label>
														<input class="form-control time-picker-default" placeholder="time" type="text">
												</div>
                                          </div>
										    <div class="col-md-12 col-sm-12">
                                             <div class="form-group">
                                                <label>Reason For Permission</label>
                                                <input type="text" class="form-control" placeholder="Reason For Late">
                                             </div>
                                          </div>
                                         
                                     <div class="form-group col-md-12">
                                             <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary" name="assign" value="Assign">Submit</button>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
										</div>
									</div>
									<div class="tab-pane fade" id="emp-lv" role="tabpanel">
										<div class="pt-10">
											<div class="row table-responsive">
						<table class="table table-striped ">
							<thead>
								<tr>
									
									<th>Sick </th>
									<th>Casual </th>
									<th>Paid </th>
								</tr>
							</thead>
							<tbody>
								<tr>
									
									<td>8(12)</td>
									<td>6(6)</td>
									<td>10(11)</td>
								
									
								</tr>
								<tr>
									
									<td>8(12)</td>
									<td>6(6)</td>
									<td>10(11)</td>
								
									
								</tr>
								</tbody>
								</table>
										</div>
										</div>
									</div>
								</div>
							</div>
							 </fieldset>
                           </div>
                        </div>
                     </div>
                  </div>
               
            
         </div>
      </div>
      <?php include('script.php'); ?>
      
   </body>
</html>