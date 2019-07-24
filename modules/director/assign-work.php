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
                     <h4 class="text-blue mb-30">Assign Work</h4>
                  </div>
               </div>
               <form>
                  <div class="row">
                     <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                           <label>Subject of the Work</label>
                           <input type="text" class="form-control" placeholder="Subject of the work">
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                           <label>Start Date and time</label>
                           <input class="form-control datetimepicker" placeholder="Choose Date and time" type="text">
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                           <label>End Date and time</label>
                           <input class="form-control datetimepicker" placeholder="Choose Date and time" type="text">
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                           <label>Select Department</label>
                           <select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
                              <option value="AK">Select Department</option>
                              <option value="AK">IT</option>
                              <option value="AK">Sales</option>
                              <option value="AK">HR</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                           <label>Select Employee</label>
                           <select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
                              <option value="AK">Select Employee</option>
                              <option value="AK">Reddamma</option>
                              <option value="AK">Rita</option>
                              <option value="AK">Chakkani</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                           <label>Upload File</label>
                           <input type="file" class="form-control-file form-control height-auto">
                        </div>
                     </div>
                     <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                           <label>Comment</label>
                           <textarea class="form-control" rows="5" id="comment"></textarea>	
                        </div>
                     </div>
                     <div class="form-group col-md-12">
                        <div class="col-lg-9 col-lg-offset-3">
                           <button type="submit" class="btn btn-primary" name="assign" value="Assign">Assign</button>
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
   </body>
</html>