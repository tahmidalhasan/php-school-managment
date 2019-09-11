 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  
 <section class="content-header">
        <h1>
            <i class="fa fa-map-o"></i> Examinations <small></small> </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> Select Criteria</h3>
                        <div class="box-tools pull-right">
                            <a href="https://demo.smart-school.in/admin/mark/create" class="btn btn-primary btn-sm"  data-toggle="tooltip" title="Add" >
                                <i class="fa fa-plus"></i> Add                            </a>
                        </div>
                    </div>
                    <form action="https://demo.smart-school.in/admin/mark"  method="post" accept-charset="utf-8" id="schedule-form">
                        <div class="box-body">
                            <div class="row">
                                <input type="hidden" name="save_exam" value="search" >                               
                                <input type='hidden' name='ci_csrf_token' value=''/>                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Exam Name</label>

                                        <select autofocus="" id="exam_id" name="exam_id" class="form-control" >
                                            <option value="">Select</option>
                                                                                            <option value="1" >Unit Test - April</option>
                                                                                                        <option value="2" >Unit Test - May</option>
                                                                                                        <option value="3" >Unit Test - June</option>
                                                                                                        <option value="5" >Unit Test - August</option>
                                                                                                        <option value="18" >Casa 1</option>
                                                                                                        <option value="19" >testeo</option>
                                                                                                        <option value="20" >RCA T</option>
                                                                                                        <option value="21" >Test smart ng</option>
                                                                                                        <option value="22" >January Final</option>
                                                                                                        <option value="23" >Pogo Test</option>
                                                                                                </select>
                                        <span class="text-danger"></span>
                                    </div>
                                </div><!-- /.col -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Class</label>
                                        <select  id="class_id" name="class_id" class="form-control" >
                                            <option value="">Select</option>
                                                                                            <option value="2" >Class 2</option>

                                                                                                <option value="3" >Class 3</option>

                                                                                  
                                                                                                <option value="35" >9</option>

                                                                                                <option value="36" >C Language</option>

                                                                                                <option value="37" >12th art</option>

                                                                                        </select>
                                        <span class="text-danger"></span>
                                    </div>
                                </div><!-- /.col -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Section</label>
                                        <select  id="section_id" name="section_id" class="form-control" >
                                            <option value="">Select</option>
                                        </select>
                                        <span class="text-danger"></span>
                                    </div>
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.box-body -->
                    </form>
                </div>
                    </section>

</div>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 