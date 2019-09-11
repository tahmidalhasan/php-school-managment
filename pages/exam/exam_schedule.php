 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
    <section class="content-header">
        <h1>
            <i class="fa fa-map-o"></i> Examinations <small></small>   </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <!-- Large modal -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> Select Criteria</h3>
                        <div class="box-tools pull-right">
                            <a href="https://demo.smart-school.in/admin/examschedule/create" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</a>
                        </div>
                    </div>
                    <form action="https://demo.smart-school.in/admin/examschedule/index"  method="post" accept-charset="utf-8">
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
                                                                                                <option value="5" >Class 5</option>
                                                                                                <option value="6" >Class 6</option>
                                                                                                <option value="7" >Class 7</option>
                                                                                                           <option value="33" >Class 13</option>
                                                                                                <option value="34" >12</option>
                                                                                                <option value="35" >9</option>
                                                                                                <option value="36" >C Language</option>
                                                                                                <option value="37" >12th art</option>
                                                                                        </select>
                                        <span class="text-danger"></span>
                                    </div>

                                </div><!-- /.col -->
                                <div class="col-md-6">
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
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-search"></i> Search</button>
                        </div>
                    </form>
                </div>
				
				<div class="box box-info">
                        <div class="box-header ptbnull">
                            <h3 class="box-title titlefix"><i class="fa fa-list"></i> Exam List </h3>
                            <div class="box-tools pull-right">
                            </div>
                        </div>
                        <div class="box-body table-responsive">
						<div class="download_label">Exam List</div>
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
							
							<table class="table table-striped table-bordered table-hover example dataTable no-footer" cellspacing="0" width="100%" "="" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 100%;">
                                <thead>
								
                                    <tr role="row"><th style="width: 31px;" class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Exam: activate to sort column ascending" style="width: 103px;">Exam</th><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 71px;">Action</th></tr>
                                </thead>    
                                <tbody>
                                    
                                            
                                            

                                <tr role="row" class="odd">
                                                <td class="sorting_1">1.</td>
                                                <td>Unit Test - April</td>
                                                <td class="pull-right">
                                                    <a class="btn btn-primary btn-sm schedule_modal"data-toggle="modal" data-target="#modal-default" data-toggle="tooltip" title="" data-examname="Unit Test - April" data-examid="1" data-original-title="View Detail" data-sectionid="1" data-classid="2" data-classname="Class 2" data-sectionname="A">
                                                        <i class="fa fa-calendar-times-o"></i> View                                                    </a>

                                                </td>

                                            </tr>
											</tbody>
											</table>
											
										</div>
                        </div><!---./end box-body--->
                    </div>
		
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                   <div class="box-header ptbnull">
                            <h3 class="box-title titlefix"><i class="fa fa-list"></i> Exam List </h3>
                            <div class="box-tools pull-right">
                            </div>
                        </div>
                        <div class="box-body table-responsive">
						<div class="download_label">Exam List</div>
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
							
							<table class="table table-striped table-bordered table-hover example dataTable no-footer" cellspacing="0" width="100%" "="" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 100%;">
                                <thead>
									<tr role="row">
										<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Subject: activate to sort column descending" style="width: 0px;">Subject</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 0px;">Date</th>
										<th class="text text-center sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Start Time: activate to sort column ascending" style="width: 0px;">Start Time</th>
										<th class="text text-center sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="End Time: activate to sort column ascending" style="width: 0px;">End Time</th>
										<th class="text text-center sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Room: activate to sort column ascending" style="width: 0px;">Room</th>
										<th class="text text-center sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Full Marks: activate to sort column ascending" style="width: 0px;">Full Marks</th>
										<th class="text text-center sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Passing Marks: activate to sort column ascending" style="width: 0px;">Passing Marks</th>
									</tr>
								</thead>   
                               <tbody><tr role="row" class="odd"><td class="sorting_1">Science (Th.)</td><td class="">19/09/2017</td> <td style="width:200px;" class="text text-center">12:00 AM</td> <td style="width:200px;" class="text text-center">07:30 PM</td> <td class="text text-center">1</td> <td class="text text-center">100</td><td class="text text-center">33</td></tr><tr role="row" class="even"><td class="sorting_1">Science (Th.)</td><td class="">27/09/2017</td> <td style="width:200px;" class="text text-center">12:00 AM</td> <td style="width:200px;" class="text text-center">07:30 PM</td> <td class="text text-center">1</td> <td class="text text-center">100</td><td class="text text-center">33</td></tr></tbody>
							</table>
											
						</div>
                     </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
             
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

					
                
    </section>


</div>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 