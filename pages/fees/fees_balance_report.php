 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
   <section class="content">
	<div class="row">
		<div class="col-md-12">
			    <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> Select Criteria</h3>
                    </div>
                    <div class="box-body">
                      <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <form role="form" action="https://demo.smart-school.in/student/search" method="post" class="">
                                        <input type="hidden" name="ci_csrf_token" value="">                                        <div class="col-sm-6">
                                            <div class="form-group"> 
                                                <label>Class</label>
                                                <select autofocus="" id="class_id" name="class_id" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="2">Class 2</option>
                                                    <option value="3">Class 3</option>
                                                                                                       
													 <option value="37">12th art</option>
                                                     <option value="38">GA</option>
                                                </select>
                                                <span class="text-danger"></span>
                                            </div>  
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Section</label>
                                                <select id="section_id" name="section_id" class="form-control"><option value="">Select</option><option value="1" selected="">A</option><option value="2">B</option></select>
                                                <span class="text-danger"></span>
                                            </div>   
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <button type="submit" name="search" value="search_filter" class="btn btn-primary btn-sm pull-right checkbox-toggle"><i class="fa fa-search"></i> Search</button>
                                            </div>
                                        </div>
                                </form></div>  
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
				<div class="row">
                        <div class="col-xs-12">
                            <div class="box box-info" id="transfee">
                                <div class="box-header ptbnull">
                                    <h3 class="box-title titlefix"><i class="fa fa-users"></i> Student Fees Report</h3>
                                </div>                              
                                <div class="box-body table-responsive">
                                    <div class="download_label">Student Fees Report</div>    
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
									
									<table class="table table-striped table-bordered table-hover example dataTable no-footer" id="DataTables_Table_0" role="grid">
                                        <thead>
                                            <tr role="row"><th class="text text-left sorting_disabled" rowspan="1" colspan="1" style="width: 156px;">Student Name</th><th class="text text-left sorting_disabled" rowspan="1" colspan="1" style="width: 98px;">Admission Number</th><th class="text text-left sorting_disabled" rowspan="1" colspan="1" style="width: 63px;">Roll Number</th><th class="text text-left sorting_disabled" rowspan="1" colspan="1" style="width: 75px;">Father Name</th><th class="text text-right sorting_disabled" rowspan="1" colspan="1" style="width: 80px;">Total Fees <span>(Lps)</span></th><th class="text text-right sorting_disabled" rowspan="1" colspan="1" style="width: 73px;">Discount <span>(Lps)</span></th><th class="text text-right sorting_disabled" rowspan="1" colspan="1" style="width: 78px;">Paid Fees <span>(Lps)</span></th><th class="text-right sorting_disabled" rowspan="1" colspan="1" style="width: 70px;">Balance <span>(Lps)</span></th></tr>
                                        </thead>  
                                        <tbody>   

                                            
                                                    
                                                                                            

                                        <tr role="row" class="odd">
                                                        <td>StudentFname StudentLname   </td>
                                                        <td>1221   </td>
                                                        <td>112233</td>
                                                        <td>FatherName   </td>

                                                        <td class="text text-right">
                                                                                                                            <span class="text text-red righttext">xxx</span>
                                                                                                                        </td>
                                                        <td class="text text-right">

                                                                                                                            <span class="text text-red righttext">xxx</span>
                                                                                                                        </td>
                                                        <td class="text text-right">

                                                                                                                            <span class="text text-red righttext">xxx</span>
                                                                                                                        </td>
                                                        <td class="text-right">

                                                                                                                            <span class="text text-red righttext">xxx</span>
                                                                                                                        </td>
                                                    </tr><tr class="box box-solid total-bg even" role="row">
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td class="text text-right">
                                                Grand Total                                            </td>
                                            <td class="text text-right">
                                                Lps0.00                                            </td>
                                            <td class="text text-right">
                                                Lps0.00                                            </td>
                                            <td class="text text-right">
                                                Lps0.00                                            </td> 

                                            <td class="text text-right">
                                                Lps0.00                                            </td>
                                        </tr></tbody> 
                                    </table></div>
                                </div>                            
                            </div>                       
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

 
 