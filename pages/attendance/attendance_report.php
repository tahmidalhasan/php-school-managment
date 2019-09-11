 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
   <section class="content-header">
        <h1>
            <i class="fa fa-calendar-check-o"></i> Attendance <small> </small>        </h1>
    </section>
    <section class="content">
        <div class="row">   
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> Select Criteria</h3>
                    </div>
                    <form id='form1' action="https://demo.smart-school.in/admin/stuattendence/classattendencereport"  method="post" accept-charset="utf-8">
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
                                                                                                        <option value="6" >Class 6</option>
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
                                        <label for="exampleInputEmail1">Month</label>
                                        <select  id="month" name="month" class="form-control" >
                                            <option value="">Select</option>
                                                                                            <option value="January" >January</option>
                                                                                                        <option value="February" >February</option>
                                                                                                        <option value="March" >March</option>
                                                                                                        <option value="April" >April</option>
                                                                                                        <option value="May" >May</option>
                                                                                                        <option value="June" >June</option>
                                                                                                        <option value="July" >July</option>
                                                                                                        <option value="August" >August</option>
                                                                                                        <option value="September" >September</option>
                                                                                                        <option value="October" >October</option>
                                                                                                        <option value="November" >November</option>
                                                                                                        <option value="December" >December</option>
                                                                                                </select>
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
				
				<div class="box box-info" id="attendencelist">
                        <div class="box-header with-border">
                            <div class="row">


                                <div class="col-md-4 col-sm-4">
                                    <h3 class="box-title"><i class="fa fa-users"></i> Student Attendance Report</h3>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="pull-right">
                                                                                    &nbsp;&nbsp;
                                            <b>
                                                Present: <b class="text text-success">P</b>                                            </b>
                                                                                        &nbsp;&nbsp;
                                            <b>
                                                Late With Excuse: <b class="text text-warning">E</b>                                            </b>
                                                                                        &nbsp;&nbsp;
                                            <b>
                                                Late: <b class="text text-warning">L</b>                                            </b>
                                                                                        &nbsp;&nbsp;
                                            <b>
                                                Absent: <b class="text text-danger">A</b>                                            </b>
                                                                                        &nbsp;&nbsp;
                                            <b>
                                                Holiday: H                                            </b>
                                                                                </div>
                                </div>
                            </div></div>
                        <div class="box-body table-responsive">


                                                            <div class="mailbox-controls">
                                    <div class="pull-right">
                                    </div>
                                </div>
								<div class="download_label">Student Attendance Report</div>
                                <table class="table table-striped table-bordered table-hover example xyz dataTable no-footer" id="DataTables_Table_0">
                                    <thead>
                                        <tr>
                                            <th>
                                                Student / Date                                            </th>
                                                                                                <th class="tdcls text text-center">
                                                        01<br>Thu                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        02<br>Fri                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        03<br>Sat                                                    </th>
                                                                                                        <th class="tdcls text text-center bg-danger">
                                                        04<br>Sun                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        05<br>Mon                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        06<br>Tue                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        07<br>Wed                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        08<br>Thu                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        09<br>Fri                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        10<br>Sat                                                    </th>
                                                                                                        <th class="tdcls text text-center bg-danger">
                                                        11<br>Sun                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        12<br>Mon                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        13<br>Tue                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        14<br>Wed                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        15<br>Thu                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        16<br>Fri                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        17<br>Sat                                                    </th>
                                                                                                        <th class="tdcls text text-center bg-danger">
                                                        18<br>Sun                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        19<br>Mon                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        20<br>Tue                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        21<br>Wed                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        22<br>Thu                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        23<br>Fri                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        24<br>Sat                                                    </th>
                                                                                                        <th class="tdcls text text-center bg-danger">
                                                        25<br>Sun                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        26<br>Mon                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        27<br>Tue                                                    </th>
                                                                                                        <th class="tdcls text text-center">
                                                        28<br>Wed                                                    </th>
                                                                                            </tr>
                                    </thead>
                                    <tbody>
                                                                                    <tr>
                                                <td colspan="32" class="text-danger text-center">No Record Found</td>
                                            </tr>
                                                                                </tbody>
                                </table>
                                                        </div>
                    </div>
				
              </section>



</div>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 