 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
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
                                        <input type="hidden" name="ci_csrf_token" value="">
										<div class="col-sm-6">
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
                                </form>
							</div>  
                                
                            </div>
                           
                        </div>
                    </div>
                </div>
				
				<div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-list"></i> Promote Students In Next Session</h3>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="box-body">
                        <form action="#" method="post" accept-charset="utf-8" class="promote_form">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Promote In Session </label>
                                        <select id="session_id" name="session_id" class="form-control">
                                            <option value="">Select</option>
                                            <option value="11">2017-18</option>
                                            <option value="14">2019-20</option>
											<option value="15">2020-21</option>
											<option value="16">2021-22</option>
											<option value="18">2022-23</option>
											<option value="20">2024-25</option>
										</select>
                                       
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Class</label>
                                        <select id="class_promote_id" name="class_promote_id" class="form-control">
                                            <option value="">Select</option>
											<option value="2">Class 2</option>
											<option value="3">Class 3</option>
											<option value="6">Class 6</option>
											<option value="7">Class 7</option>
											 <option value="36">C Language</option>
											<option value="37">12th art</option>
										</select>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Section</label>
                                        <select id="section_promote_id" name="section_promote_id" class="form-control">
                                            <option value="">Select</option>
                                        </select>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">    
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th>Admission Number</th>
                                            <th>Student Name</th>
                                            <th>Father Name</th>
                                            <th>Date Of Birth</th>
                                            <th class="">Current Result</th>
                                            <th class="">Next Session Status</th>
                                        </tr>
											<input type="hidden" value="24">
                                            <input type="hidden" name="student_list[]" value="24">
                                            <tr>
                                                <td>5542271004</td>
                                                <td>Suhaib Qambi</td>
                                                <td>Abdikqadir</td>
                                                <td>01/01/2002</td>
                                                <td>
                                                    <div class="radio-inline">
                                                        <label><input type="radio" name="result_24" checked="checked" value="pass">Pass</label>
                                                    </div>
                                                    <div class="radio-inline">
                                                        <label><input type="radio" name="result_24" value="fail">Fail</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio-inline">
                                                        <label>
                                                            <input type="radio" name="next_working_24" checked="checked" value="countinue">Continue</label>
                                                    </div>
                                                    <div class="radio-inline">
                                                        <label>
                                                            <input type="radio" name="next_working_24" value="leave">
                                                            Leave                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                                                                        <input type="hidden" value="38">
                                            <input type="hidden" name="student_list[]" value="38">
                                            <tr>
                                                <td>12345</td>
                                                <td>educlap abc</td>
                                                <td>Olivier Thomas</td>
                                                <td>10/05/2015</td>
                                                <td>
                                                    <div class="radio-inline">
                                                        <label>
                                                            <input type="radio" name="result_38" checked="checked" value="pass">
                                                            Pass                                                        </label>
                                                    </div>
                                                    <div class="radio-inline">
                                                        <label>
                                                            <input type="radio" name="result_38" value="fail">
                                                            Fail                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio-inline">
                                                        <label>
                                                            <input type="radio" name="next_working_38" checked="checked" value="countinue">
                                                            Continue                                                        </label>
                                                    </div>
                                                    <div class="radio-inline">
                                                        <label>
                                                            <input type="radio" name="next_working_38" value="leave">
                                                            Leave                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>    
                    </form></div>
                    
                    <div class="box-footer clearfix">
                        
                            <a class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#pramoteStudentModal">Promote</a>
                                                </div>
                </div>
			
			</div>
		</div>
		
		
		
		
		
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 