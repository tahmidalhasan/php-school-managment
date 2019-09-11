 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  <section class="content">       
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-search"></i> Select Criteria</h3>
            </div>
            <form  class="assign_teacher_form" action="https://demo.smart-school.in/admin/teacher/getSubjectTeachers" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                                                        <input type='hidden' name='ci_csrf_token' value=''/>                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Class</label>
                                <select autofocus="" id="class_id" name="class_id" class="form-control" >
                                    <option value="">Select</option>
                                                                            <option value="2">Class 2</option>
                                                                                <option value="3">Class 3</option>
                                                                                <option value="4">Class 4</option>
                                                                                <option value="5">Class 5</option>
                                                                                <option value="6">Class 6</option>
                                                                                <option value="7">Class 7</option>
                                                                            <option value="32">Sangeetha Sec</option>
                                                                                <option value="33">Class 13</option>
                                                                                <option value="34">12</option>
                                                                                <option value="35">9</option>
                                                                                <option value="36">C Language</option>
                                                                                <option value="37">12th art</option>
                                                                        </select>
                                <span class="class_id_error text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Section</label>
                                <select  id="section_id" name="section_id" class="form-control" >
                                    <option value="">Select</option>
                                </select>
                                <span class="section_id_error text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="search_filter" name="search" value="search_filter" class="btn btn-primary btn-sm checkbox-toggle pull-right"><i class="fa fa-search"></i> Search</button>                 
                </div>
            </form>
        </div>
        <div class="box box-info" id="box_display" style="">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-users"> </i> Assign Subject</h3>

                
            </div>
            <form action="https://demo.smart-school.in/admin/teacher/assignteacher" method="POST" id="formSubjectTeacher">
                <input type="hidden" name="ci_csrf_token" value="">                <br>
                <input type="hidden" value="2" id="post_class_id" name="class_id">
                <input type="hidden" value="1" id="post_section_id" name="section_id">
                <div class="form-horizontal" id="TextBoxContainer" role="form">
				<div class="form-group app">
				<input type="hidden" name="i[]" value="0">
				<input type="hidden" name="row_id_0" value="12">
				<div class="col-md-12"><div class="form-group row">
				<label for="inputValue" class="col-md-1 control-label">Subject</label>
				<div class="col-md-4"><select id="subject_id_0" name="subject_id_0" class="form-control">
				<option value="">Select</option><option value="1" selected="">Mathematics (Theory)</option>
				<option value="2">Science (Theory)</option><option value="3">Social Studies (Theory)</option>
				<option value="5">English (Theory)</option><option value="6">Language - French (Theory)</option>
				<option value="7">Drawing (Practical)</option><option value="8">masooma (Theory)</option>
				<option value="9">hindi (Theory)</option><option value="10">Computer Application (Theory)</option>
				<option value="11">Sangi Suj (Theory)</option><option value="13">math (Theory)</option>
				</select>
				</div>
				<label for="inputKey" class="col-md-1 control-label">Teacher</label>
				<div class="col-md-4">
					<select id="teacher_id_0" name="teacher_id_0" no="0" class="form-control">
						<option value="">Select</option><option value="1">Peter Nest</option>
						<option value="2">Jason Sharlton</option><option value="3">William Abbot</option>
						<option value="4">Mira Scott</option><option value="5">Patrick Schultz</option>
						<option value="6">Megan Fraser</option><option value="7">VALEX FABIANO VALENCIO</option>
						<option value="8">peter</option><option value="9">demo teacher</option>
						<option value="10" selected="">Javier martinez mendieta</option>
						<option value="11">Radhik</option><option value="12">Brandon</option>
						<option value="13">ankesh</option>
					</select>
				</div>
				<div class="col-md-2">
				
				</div>
				</div>
				</div>
				</div>
				
				
				
				
				
				
				</div>
               

			   <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-sm btn pull-right save_button" style="">Save</button>
                </div>
            </form>
        </div>     
    </section>



</div>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 