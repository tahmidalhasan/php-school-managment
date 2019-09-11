 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
   <section class="content-header">
        <h1>
            <i class="fa fa-bullhorn"></i> Notifications <small></small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- left column -->
                <form id="form1" action="https://demo.smart-school.in/admin/notification/add"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-commenting-o"></i> Compose New Message</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">  
                                                                <input type='hidden' name='ci_csrf_token' value=''/>                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input autofocus="" id="title" name="title" placeholder="" type="text" class="form-control"  value="" />
                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="form-group"><label>Message</label>
                                        <textarea id="compose-textarea" name="message" class="form-control" style="height: 300px">
                                                                                    </textarea>
                                        <span class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="">
                                            
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Notice Date</label>
                                            <input id="date" name="date"  placeholder="" type="text" class="form-control date"  value="" />
                                            <span class="text-danger"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Publish On</label>
                                            <input id="publish_date" name="publish_date"  placeholder="" type="text" class="form-control date"  value="" />
                                            <span class="text-danger"></span>
                                        </div>
                                        <div class="form-horizontal">
                                            <label for="exampleInputEmail1">Message To</label>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="visible[]" value="student"  /> <b>Student</b> </label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="visible[]"  value="parent"  /> <b>Parent</b></label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="visible[]" value="teacher"  /> <b>Teacher</b> </label>
                                            </div>
                                        </div>
                                        <span class="text-danger"></span>

                                    </div>
                                </div>  
                            </div>                         
                            <div class="box-footer">
                                <div class="pull-right">

                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                                </div>
                            </div>                          
                        </div>                      
                    </div>
                </form>              
            </div>
        </div><!--./wrapper-->
        <div class="row">            
            <div class="col-md-12">
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section>


</div>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 