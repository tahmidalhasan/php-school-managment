 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  <section class="content-header">
        <h1>
            <i class="fa fa-calendar-check-o"></i> Attendance </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">  
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> Select Criteria</h3>
                    </div>
                    <form id='form1' action=""  method="post" accept-charset="utf-8">
                        <div class="box-body">
                            <input type='hidden' name='ci_csrf_token' value=''/>                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Class</label>
                                        <select autofocus="" id="class_id" name="class_id" class="form-control" >
                                            <option value="">Select</option>
                                                                                            <option value="2" >Class 2</option>
                                                                                                        <option value="3" >Class 3</option>
                                                                                                        <option value="4" >Class 4</option>
                                                                                                        <option value="5" >Class 5</option>
                                                                                                                   <option value="28" >K1</option>
                                                                                                        <option value="29" >K2 Sparkle Tots</option>
                                                                                                        <option value="30" >Class Sangi</option>
                                                                                                        <option value="31" >Sangi Class</option>
                                                                                                        <option value="32" >Sangeetha Sec</option>
                                                                                                        <option value="33" >Class 13</option>
                                                                                                        <option value="34" >12</option>
                                                                                                        <option value="35" >9</option>
                                                                                                        <option value="36" >C Language</option>
                                                                                                        <option value="37" >12th art</option>
                                                                                                </select>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Section</label>
                                        <select  id="section_id" name="section_id" class="form-control" >
                                            <option value="">Select</option>
                                        </select>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">
                                            Attendance                                            Date                                        </label>
                                        <input id="datepicker1" name="date" placeholder="" type="text" class="form-control"  value="07/04/2018" readonly="readonly"/>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" name="search" value="search" class="btn btn-primary btn-sm pull-right checkbox-toggle"><i class="fa fa-search"></i> Search</button>
                        </div>
                    </form>
                </div>
				
				<div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-users"></i> Attendance List </h3>
                            <div class="box-tools pull-right">
                            </div>
                        </div>
                        <div class="box-body">
                                                            <div class="alert alert-info">
                                    No Attendance Prepared                                </div>
                                                        </div>
                    </div>

            </section>



</div>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 