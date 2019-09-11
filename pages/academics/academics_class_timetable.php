 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  <section class="content-header">
        <h1>
            <i class="fa fa-mortar-board"></i> Academics <small></small></h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">       
            <div class="col-md-12">            
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            <i class="fa fa-search"></i> Select Criteria</h3>
                        <div class="box-tools pull-right">
                            <a href="https://demo.smart-school.in/admin/timetable/create" class="btn btn-primary btn-sm"  data-toggle="tooltip" title="Add Timetable" >
                                <i class="fa fa-plus"></i> Add                            </a>
                        </div>
                    </div>
                    <form action="https://demo.smart-school.in/admin/timetable/index"  method="post" accept-charset="utf-8">
                        <div class="box-body">
                            <input type='hidden' name='ci_csrf_token' value=''/>                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Class</label>
                                        <select autofocus="" id="class_id" name="class_id" class="form-control" >
                                            <option value="">Select</option>
                                                                                            <option value="2" >Class 2</option>
                                                                                                <option value="3" >Class 3</option>
                                                                                                <option value="4" >Class 4</option>
                                                                                              <option value="34" >12</option>
                                                                                                <option value="35" >9</option>
                                                                                                <option value="36" >C Language</option>
                                                                                                <option value="37" >12th art</option>
                                                                                        </select>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Section</label>
                                        <select  id="section_id" name="section_id" class="form-control" >
                                            <option value="">Select</option>
                                        </select>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-search"></i> Search</button>
                        </div>
                    </form>
                </div>
				
				<div class="box box-info" id="timetable">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-users"></i> Class Timetable</h3>
                        </div>
                        <div class="box-body">
                            <div class="row print">
                                <div class="col-md-12">
                                    <div class="col-md-offset-4 col-md-4">
                                        <center><b>Class: </b> <span class="cls"></span></center> 
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
								<div class="download_label">Class Timetable</div>
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
									
									<table class="table table-bordered example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                                    Subject                                                : activate to sort column descending" style="width: 75px;">
                                                    Subject                                                </th><th class="text text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                        Monday                                                    : activate to sort column ascending" style="width: 165px;">
                                                        Monday                                                    </th><th class="text text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                        Tuesday                                                    : activate to sort column ascending" style="width: 119px;">
                                                        Tuesday                                                    </th><th class="text text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                        Wednesday                                                    : activate to sort column ascending" style="width: 77px;">
                                                        Wednesday                                                    </th><th class="text text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                        Thursday                                                    : activate to sort column ascending" style="width: 69px;">
                                                        Thursday                                                    </th><th class="text text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                        Friday                                                    : activate to sort column ascending" style="width: 69px;">
                                                        Friday                                                    </th><th class="text text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                        Saturday                                                    : activate to sort column ascending" style="width: 69px;">
                                                        Saturday                                                    </th><th class="text text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                        Sunday                                                    : activate to sort column ascending" style="width: 103px;">
                                                        Sunday                                                    </th></tr>
                                        </thead>
                                        <tbody>
                                                                                            
                                                                                                
                                                                                                
                                                                                        <tr role="row" class="odd">
                                                    <th class="sorting_1">English</th>
                                                                                                                <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                    <strong class="text-green">12:05 AM</strong>
                                                                        <b class="text text-center">-</b>
                                                                        <strong class="text-green">02:05 AM</strong><br>
                                                                        <strong class="text-green">Room Number: hard and pain</strong>
																</div>
                                                            </td>
                                                               <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                                                                                            <b class="text text-center">Not <br>Scheduled</b><br>
                                                                        <strong class="text-green"></strong>
                                                                </div>
                                                            </td>
                                                                                                                        <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                                                                                            <b class="text text-center">Not <br>Scheduled</b><br>
                                                                        <strong class="text-green"></strong>
                                                                                                                                        </div>
                                                            </td>
                                                                                                                        <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                                                                                            <b class="text text-center">Not <br>Scheduled</b><br>
                                                                        <strong class="text-green"></strong>
                                                                                                                                        </div>
                                                            </td>
                                                                                                                        <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                                                                                            <b class="text text-center">Not <br>Scheduled</b><br>
                                                                        <strong class="text-green"></strong>
                                                                                                                                        </div>
                                                            </td>
                                                                                                                        <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                                                                                            <b class="text text-center">Not <br>Scheduled</b><br>
                                                                        <strong class="text-green"></strong>
                                                                                                                                        </div>
                                                            </td>
                                                                                                                        <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                                                                                            <b class="text text-center">Not <br>Scheduled</b><br>
                                                                        <strong class="text-green"></strong>
                                                                                                                                        </div>
                                                            </td>
                                                                                                            </tr><tr role="row" class="even">
                                                    <th class="sorting_1">hindi</th>
                                                                                                                <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                    <strong class="text-red">N/A</strong>
                                                                </div>
                                                            </td>
                                                                                                                        <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                    <strong class="text-red">N/A</strong>
                                                                </div>
                                                            </td>
                                                                                                                        <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                    <strong class="text-red">N/A</strong>
                                                                </div>
                                                            </td>
                                                                                                                        <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                    <strong class="text-red">N/A</strong>
                                                                </div>
                                                            </td>
                                                                                                                        <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                    <strong class="text-red">N/A</strong>
                                                                </div>
                                                            </td>
                                                                                                                        <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                    <strong class="text-red">N/A</strong>
                                                                </div>
                                                            </td>
                                                                                                                        <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                    <strong class="text-red">N/A</strong>
                                                                </div>
                                                            </td>
                                                                                                            </tr><tr role="row" class="odd">
                                                    <th class="sorting_1">Mathematics</th>
                                                                                                                <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                                                                                            <strong class="text-green">12:59 PM</strong>
                                                                        <b class="text text-center">-</b>
                                                                        <strong class="text-green">03:00 AM</strong><br>
                                                                        <strong class="text-green">Room Number: 32</strong>
                                                                                                                                        </div>
                                                            </td>
                                                                                                                        <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                                                                                            <strong class="text-green">07:00 AM</strong>
                                                                        <b class="text text-center">-</b>
                                                                        <strong class="text-green">01:00 AM</strong><br>
                                                                        <strong class="text-green">Room Number: 2</strong>
                                                                                                                                        </div>
                                                            </td>
                                                                                                                        <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                                                                                            <b class="text text-center">Not <br>Scheduled</b><br>
                                                                        <strong class="text-green"></strong>
                                                                                                                                        </div>
                                                            </td>
                                                                                                                        <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                                                                                            <b class="text text-center">Not <br>Scheduled</b><br>
                                                                        <strong class="text-green"></strong>
                                                                                                                                        </div>
                                                            </td>
                                                                                                                        <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                                                                                            <b class="text text-center">Not <br>Scheduled</b><br>
                                                                        <strong class="text-green"></strong>
                                                                                                                                        </div>
                                                            </td>
                                                                                                                        <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                                                                                            <b class="text text-center">Not <br>Scheduled</b><br>
                                                                        <strong class="text-green"></strong>
                                                                                                                                        </div>
                                                            </td>
                                                                                                                        <td class="text text-center">
                                                                <div class="attachment-block clearfix">
                                                                                                                                            <strong class="text-green">12:00 AM</strong>
                                                                        <b class="text text-center">-</b>
                                                                        <strong class="text-green">01:00 AM</strong><br>
                                                                        <strong class="text-green">Room Number: title</strong>
                                                                                                                                        </div>
                                                            </td>
                                                                                                            </tr></tbody>
                                    </table>
									
                                </div>
                             </div>
                    </div>
                    </section>



</div>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 