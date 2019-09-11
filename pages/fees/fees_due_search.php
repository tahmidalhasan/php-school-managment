 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
	 <section class="content-header">
        <h1>
            <i class="fa fa-money"></i> Fees Collection</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> Select Criteria</h3>
                    </div>
                    <form action="https://demo.smart-school.in/studentfee/feesearch"  method="post" accept-charset="utf-8">
                        <div class="box-body">
                            <input type='hidden' name='ci_csrf_token' value=''/>                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Fees Group</label>
                                        <select autofocus="" id="feegroup_id" name="feegroup_id" class="form-control" >
                                            <option value="">Select</option>
                                                                                            <optgroup label="Class 6 General">
                                                                                                                <option value="1-1">admission-fees</option>
                                                                                                                        <option value="1-2">apr-month-fees</option>
                                                                                                                        <option value="1-3">may-month-fees</option>
                                                                                                                        <option value="1-4">jun-month-fees</option>
                                                                                                                        <option value="1-6">aug-month-fees</option>
                                                                                                                   <option value="1-18">caution-money-fees</option>
                                                                                                                        <option value="1-74">2-installment-fees</option>
                                                                                                                        <option value="1-84">trans-bus-fees</option>
                                                                                                                        <option value="1-86">jan-month-fees</option>
                                                                                                                        <option value="1-89">sep-tution-fees</option>
                                                                                                            </optgroup>
                                                                                                <optgroup label="Route Brooklyn West">
                                                                                                                <option value="2-16">trans-bus-fees</option>
                                                                                                            </optgroup>
                                                                                                <optgroup label="Class 10 General">
                                                                                                                <option value="5-26">jan-month-fees</option>
                                                                                                                        <option value="5-82">admission-fees</option>
                                                                                                        </optgroup>
                                                                                                <optgroup label="Class 4 General">
                                                                                                                <option value="18-71">jun-month-fees</option>
                                                                                                            </optgroup>
                                                                                                <optgroup label="Class 12 General">
                                                                                                                <option value="19-73">1-installment-fees</option>
                                                                                                            </optgroup>
                                                                                                <optgroup label="september month fees">
                                                                                                                <option value="20-75">sep-tution-fees</option>
                                                                                                                        <option value="20-76">Buss-fees</option>
                                                                                                            </optgroup>
                                                                                                <optgroup label="Monthly">
                                                                                                                <option value="21-93">T01</option>
                                                                                                            </optgroup>
                                                                                                <optgroup label="Class 8 General">
                                                                                                                <option value="23-99">1-installment-fees</option>
                                                                                                            </optgroup>
                                                                                                <optgroup label="Class 9 General">
                                                                                                                <option value="24-100">aug-month-fees</option>
                                                                                                            </optgroup>
                                                                                        </select>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Class</label>
                                        <select  id="class_id" name="class_id" class="form-control" >
                                            <option value="">Select</option>
                                                                                            <option value="2" >Class 2</option>
                                                                                                <option value="3" >Class 3</option>
                                                                                                <option value="4" >Class 4</option>
                                                                                                <option value="5" >Class 5</option>
                                                                                                <option value="6" >Class 6</option>
                                                                                                <option value="7" >Class 7</option>
                                                                                                <option value="8" >Class 8</option>
                                                                                                <option value="9" >Class 9</option>
                                                                                                <option value="10" >Class 10</option>
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
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-search"></i> Search</button>
                        </div>
                    </form>
                </div>
				
				<div class="box box-info" id="duefee">
                        <div class="box-header ptbnull">
                            <h3 class="box-title titlefix"><i class="fa fa-users"></i> Students List</h3>
                        </div>
                        <div class="box-body table-responsive">
                            <div class="row print">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <b>Class: </b> <span class="cls"></span>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Fees Category: </b><span class="fcat"></span>
                                    </div><div class="col-md-4">
                                        <b>Fees Type: </b> <span class="ftype"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="download_label">Students List</div>
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
							
							<table class="table table-striped table-bordered table-hover example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Admission Number: activate to sort column descending" style="width: 117px;">Admission Number</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Roll Number: activate to sort column ascending" style="width: 79px;">Roll Number</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Student Name : activate to sort column ascending" style="width: 95px;">Student Name </th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date Of Birth: activate to sort column ascending" style="width: 83px;">Date Of Birth</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Due Date: activate to sort column ascending" style="width: 67px;">Due Date</th><th class="text text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount ($): activate to sort column ascending" style="width: 73px;">Amount <span>($)</span></th><th class="text text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Deposit ($): activate to sort column ascending" style="width: 72px;">Deposit <span>($)</span></th><th class="text text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action : activate to sort column ascending" style="width: 67px;">Action </th></tr>
                                </thead>    
                                <tbody> 
                                                                                
                                                                            <tr role="row" class="odd">

                                                <td class="sorting_1">94646100</td>
                                                <td>1</td>
                                                <td>vinay kumar</td>
                                                <td>13/02/2009</td><td>10/04/2017</td>

                                                <td class="text text-right">400.00</td>
                                                <td class="text text-right">200.00</td>
                                                <td class="text text-right"><a href="fees_add.php" class="btn btn-info btn-xs"> $ Add Fees</a></td>
                                            </tr>
										</tbody>
                            </table>
							
							
								<div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
									<a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">
									<i class="fa fa-angle-left"></i></a>
									<span><a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a></span>
									<a class="paginate_button next disabled" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" id="DataTables_Table_0_next"><i class="fa fa-angle-right"></i></a>
								</div>
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

 
 