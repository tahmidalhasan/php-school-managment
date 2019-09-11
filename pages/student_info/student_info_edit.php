 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<section class="content-header">
			<h1><i class="fa fa-user-plus"></i> Student Information <small></small></h1>
	</section>
		
		<?php
					if(isset($_GET['edit_id'])){
						
						$edit_id=$_GET['edit_id'];
					
					// student informatoin insert start
			
				if(isset($_POST['update'])){
						// Function for filtering input values.
						function test_input($data)
						{
						$data = trim($data);//Removes whitespaces from both sides
						$data = addslashes($data);// Add backslashes to the predefined characters in a string
						$data = htmlspecialchars($data);//The htmlspecialchars() function converts some predefined characters to HTML entities.
						$data =filter_var($data,FILTER_SANITIZE_STRING);
						return $data;
						}
						
						
						$admission_number	=	test_input($_POST['admission_number']);
						$roll_number		=	test_input($_POST['roll_number']);
						$class				=	test_input($_POST['class']);
						$section			=	test_input($_POST['section']);
						$first_name			=	test_input($_POST['first_name']);
						$last_name			=	test_input($_POST['last_name']);
						$gender				=	test_input($_POST['gender']);
						
						$dob				=	test_input($_POST['dob']);
						$category			=	test_input($_POST['category']);
						$religion			=	test_input($_POST['religion']);
						$cast				=	test_input($_POST['cast']);
						$mobile_no			=	test_input($_POST['mobile_no']);
						$email				=	test_input($_POST['email']);
						$admission_date		=	test_input($_POST['admission_date']);
						$rte				=	test_input($_POST['rte']);
						
						
						$father_name		=	test_input($_POST['father_name']);
						$father_phone		=	test_input($_POST['father_phone']);
						$father_occup		=	test_input($_POST['father_occup']);
						$mother_name		=	test_input($_POST['mother_name']);
						$mother_phone		=	test_input($_POST['mother_phone']);
						$mother_occup		=	test_input($_POST['mother_occup']);
						
						$guardian_is		=	test_input($_POST['guardian_is']);
						$guardian_name		=	test_input($_POST['guardian_name']);
						$guardian_relation	=	test_input($_POST['guardian_relation']);
						$guardian_email		=	test_input($_POST['guardian_email']);
						$guardian_phone		=	test_input($_POST['guardian_phone']);
						$guardian_occup		=	test_input($_POST['guardian_occup']);
						$guardian_address	=	test_input($_POST['guardian_address']);
						
						// image file input start
						
						$image_name		=$_FILES['image']['name'];
						$image_size		=$_FILES['image']['size'];
						$temp_image		=$_FILES['image']['tmp_name'];
						$div			=explode('.',$image_name);
						$f_ext			=strtolower(end($div));
						$uni_file		=substr(md5(time()),0,10).'.'.$f_ext;
						$uploaded_file	="upload/".$uni_file;
			
						// image file input end
						if($image_name==""){
						
						

					$q="UPDATE students_info
						
						SET
						
						admission_number='$admission_number',
						roll_number='$roll_number',
						class='$class',
						section='$section',
						first_name='$first_name',
						last_name='$last_name',
						gender='$gender',
						
						dob='$dob',
						category='$category',
						religion='$religion',
						cast='$cast',
						mobile_no='$mobile_no',
						email='$email',
						admission_date='$admission_date',
						rte='$rte',
						
						father_name='$father_name',
						father_phone='$father_phone',
						father_occup='$father_occup',
						mother_name='$mother_name',
						mother_phone='$mother_phone',
						mother_occup='$mother_occup',
						
						guardian_is='$guardian_is',
						guardian_name='$guardian_name',
						guardian_relation='$guardian_relation',
						guardian_email='$guardian_email',
						guardian_phone='$guardian_phone',
						guardian_occup='$guardian_occup',
						guardian_address='$guardian_address'
						
						
						WHERE id=$edit_id";

						
						$obj=new shop();	
						$update=$obj->selectDataUpdate($q);
						
						if($update){
							//echo"<script>alert('This Succesfull  Without Image.');</script>";
							echo"<script>window.location='student_details_search.php';</script>";
							
						}else{
							echo"<script>alert('This Data Update Unsuccesfull.');</script>";
						}
						
						}//end condition insert withuot image
						else{
							
							move_uploaded_file($temp_image,$uploaded_file);
							$obj=new shop();
							
							$q="UPDATE students_info
						
						SET
						
						admission_number='$admission_number',
						roll_number='$roll_number',
						class='$class',
						section='$section',
						first_name='$first_name',
						last_name='$last_name',
						gender='$gender',
						
						dob='$dob',
						category='$category',
						religion='$religion',
						cast='$cast',
						mobile_no='$mobile_no',
						email='$email',
						admission_date='$admission_date',
						rte='$rte',
						
						image='$uni_file',
						
						father_name='$father_name',
						father_phone='$father_phone',
						father_occup='$father_occup',
						mother_name='$mother_name',
						mother_phone='$mother_phone',
						mother_occup='$mother_occup',
						
						guardian_is='$guardian_is',
						guardian_name='$guardian_name',
						guardian_relation='$guardian_relation',
						guardian_email='$guardian_email',
						guardian_phone='$guardian_phone',
						guardian_occup='$guardian_occup',
						guardian_address='$guardian_address'
						
						
						WHERE id=$edit_id";

						$update=$obj->selectDataUpdate($q);
						
						if($update){
							
							//echo"<script>alert('This Succesfull  With Image.');</script>";
							echo"<script>window.location='student_details_search.php';</script>";
							
						}else{
							echo"<script>alert('This Data Update Unsuccesfull.');</script>";
						}
						}
					}
					
					// student informatoin insert end
					
					
					
					// information fatch start
					$q1="SELECT * FROM students_info WHERE id=$edit_id";
					
					$read=$obj->selectDataFetch($q1);
					
					if($edit_result=$read->fetch_array()){
							  
				
				
			?>
					
		
		
    <!-- Main content -->

  
	 <section class="content">
        <div class="row">
            <div class="col-md-12">
			
                <div class="box box-primary">
                    <div class="pull-right box-tools importbtnrtl" style="position: absolute;right: 14px;top: 13px;">
                        <a href="">
                            <button name="" type="" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Import Student</button>
                        </a>
                    </div>
					
					

                    <form id="form1" action=""  id="" name="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <div class="box-body">

                            <div class="tshadow mb25 bozero">    

                                <h4 class="pagetitleh2">Student Admission </h4>


                                <div class="around10">
                                      
                                    <input type='hidden' name='ci_csrf_token' value=''/>  
									<input type="hidden" name="sibling_name" value="" id="sibling_name_next">
                                    <input type="hidden" name="sibling_id" value="" id="sibling_id">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Admission Number</label>
                                                <input autofocus="" id="" name="admission_number" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['admission_number']?>" required />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Roll Number</label>
                                                <input id="roll_no" name="roll_number" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['roll_number']?>" required />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Class</label>
                                                <select  id="class" name="class" class="form-control" required>
												
                                                    <option value="">Select</option>
                                                    <option value="<?php echo$edit_result['class']?>" selected><?php echo$edit_result['class']?></option>
													<?php
													  $q="SELECT * FROM academic_classes";
											
														$read=$obj->selectDataFetch($q);
														if($read){
														
														while($result=$read->fetch_array()){
												  ?>
                                                         <option value="<?php echo$result['classes']?>">Class <?php echo$result['classes']?></option>
														 
														 <?php
														}
														}
														 ?>
															
												</select>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Section</label>
                                                <select  id="section" name="section" class="form-control" required>
                                                    
                                                    <option value=""   >Select</option>
													<option value="<?php echo$edit_result['section']?>"  selected ><?php echo$edit_result['section']?></option>
													<?php
														  $q="SELECT * FROM academic_sections";
												
															$read=$obj->selectDataFetch($q);
															if($read){
															
															while($result=$read->fetch_array()){
													  ?>
														
														<option value="<?php echo$result['section']?>"><?php echo$result['section']?></option>
														<?php
															}
															}
														?>
                                                </select>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">First Name</label>
                                                <input id="first_name" name="first_name" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['first_name']?>" required/>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Last Name</label>
                                                <input id="last_name" name="last_name" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['last_name']?>" required/>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for=""> Gender</label>
                                                <select class="form-control" name="gender">
                                                    <option value="<?php echo$edit_result['gender']?>" select><?php echo$edit_result['gender']?></option>
													<option value="Male" >Male</option>
													<option value="Female" >Female</option>
												</select>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Date Of Birth</label>
                                                 <input type="text" name="dob"class="form-control pull-right" id="datepicker" value="<?php echo$edit_result['dob']?>" required/>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Category</label>

                                                <select  id="" name="category" class="form-control" required>
												
                                                    <option value="">Select</option>
													
													<option value="<?php echo$edit_result['category']?>" selected><?php echo$edit_result['category']?></option>
														<?php
															  $q="SELECT * FROM student_cat";
													
																$read=$obj->selectDataFetch($q);
																if($read){
																
																while($result=$read->fetch_array()){
														  ?>
													
													<option value="2" ><?php echo $result['category']?></option>
													
													<?php
													
																}
																}
													?>
													
                                                </select>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Religion</label>
                                                <input id="religion" name="religion" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['religion']?>" required/>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Cast</label>
                                                <input id="cast" name="cast" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['cast']?>" required/>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Mobile Number</label>
                                                <input id="mobile_no" name="mobile_no" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['mobile_no']?>" required/>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input id="email" name="email" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['email']?>" required/>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Admission Date</label>
                                                <input id="admission_date" name="admission_date" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['admission_date']?>" readonly="readonly" required/>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>  

										
                                        <div class="col-md-3">
                                           <div class="form-group">
												<label for="exampleInputFile">Select Image</label>
												<input class="filestyle form-control" type="file" name="image" id="file" size="20" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);"><div class="bootstrap-filestyle" style="display: inline-block;" tabindex="0"><input type="text" class="input-large" disabled=""> <label for="file" class="btn btn-default chosebtn"> <i class="icon-folder-open"></i> <span>Choose File</span></label></div>

											</div>
                                        </div> 

										<div class="col-md-2">
                                          <img src="upload/<?php echo$edit_result['image']?>" alt="" width="60px" height="60px"/>
										  
                                        </div> 




										
                                        <div class="col-md-3 col-xs-12">
                                            <label>RTE</label>
                                            <div class="radio" style="margin-top: 2px;">
											<?php
											if($edit_result['rte']=="No"){
												?>
												 <label><input class="radio-inline" type="radio" name="rte" value="Yes" >Yes</label>
                                                <label><input class="radio-inline" checked="checked" type="radio" name="rte" value="No">No</label>
												<?php
											}else{
											?>
                                              <label><input class="radio-inline" checked="checked" type="radio" name="rte" value="Yes">Yes</label>
                                                <label><input class="radio-inline"  type="radio" name="rte" value="No">No</label>  
											   <?php
											}
											   ?>
                                            </div>
                                            <span class="text-danger"></span>
                                        </div>
                                        <div class="col-md-3" style="display:none;">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Fees Discount</label>
                                                <input id="fees_discount" name="fees_discount" placeholder="" type="text" class="form-control"  value="0"  />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>

                                       
                                    </div>

                                </div>
                            </div>
                            <div class="tshadow mb25 bozero">  
                                <h4 class="pagetitleh2">Parent Guardian Detail</h4>
                                <div class="around10">  
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Father Name</label>
                                                <input id="father_name" name="father_name" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['father_name']?>" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Father Phone</label>
                                                <input id="father_phone" name="father_phone" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['father_phone']?>" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Father Occupation</label>
                                                <input id="father_occup" name="father_occup" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['father_occup']?>" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Mother Name</label>
                                                <input id="mother_name" name="mother_name" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['mother_name']?>" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Mother Phone</label>
                                                <input id="mother_phone" name="mother_phone" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['mother_phone']?>" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Mother Occupation</label>
                                                <input id="mother_occup" name="mother_occup" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['mother_occup']?>" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>If Guardian Is&nbsp;&nbsp;&nbsp;</label>
											<?php
											if($edit_result['guardian_is']=="Father"){
												?>
                                            <label class="radio-inline">
                                                <input type="radio" name="guardian_is"    value="Father" checked="checked"> Father                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="guardian_is"    value="Mother" check> Mother                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="guardian_is"    value="Other"> Other  </label>
												
												<?php
											}else if($edit_result['guardian_is']=="Mother"){
												?>
												
												<label class="radio-inline">
                                                <input type="radio" name="guardian_is"    value="Father" "> Father                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="guardian_is"    value="Mother" checked="checked"> Mother                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="guardian_is"    value="Other"> Other  </label>
												
												
												<?php
											}else{
												?>
												
												<label class="radio-inline">
                                                <input type="radio" name="guardian_is"    value="Father"> Father                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="guardian_is"    value="Mother" check> Mother                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="guardian_is"    value="Other"checked="checked" > Other  </label>
												
												
												<?php
											}
												?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Guardian Name</label>
                                                        <input id="guardian_name" name="guardian_name" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['guardian_name']?>" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Guardian Relation</label>
                                                        <input id="guardian_relation" name="guardian_relation" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['guardian_relation']?>" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Guardian Phone</label>
                                                        <input id="guardian_phone" name="guardian_phone" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['guardian_phone']?>" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Guardian Occupation</label>
                                                        <input id="guardian_occup" name="guardian_occup" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['guardian_occup']?>" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Guardian Email</label>
                                                <input id="guardian_email" name="guardian_email" placeholder="" type="text" class="form-control"  value="<?php echo$edit_result['guardian_email']?>" />
                                                <span class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Guardian Address</label>
                                                <textarea id="guardian_address" name="guardian_address" placeholder="" class="form-control" rows="2"><?php echo$edit_result['guardian_address']?></textarea>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>        

                            <div class="box-group" id="accordion">                              
                                <div class="panel box box-success">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">
                                                <i class="fa fa-fw fa-plus-square"></i>Add More Details                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="box-body">
                                            <div class="tshadow mb25 bozero"> 
                                                <h4 class="pagetitleh2">Student Address Details</h4>

                                                <div class="row around10">

                                                    <div class="col-md-6">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="autofill_current_address" onclick="return auto_fill_guardian_address();">
                                                                If Guardian Address is Current Address                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Current Address</label>
                                                            <textarea id="current_address" name="current_address" placeholder=""  class="form-control" ></textarea>
                                                            <span class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="autofill_address"onclick="return auto_fill_address();">
                                                                If Permanent Address is Current Address                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Permanent Address</label>
                                                            <textarea id="permanent_address" name="permanent_address" placeholder="" class="form-control"></textarea>
                                                            <span class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tshadow mb25 bozero">    
                                                <h4 class="pagetitleh2">
                                                    Transport Details                                                </h4>

                                                <div class="row around10">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Route List</label>
                                                            <select class="form-control" id="vehroute_id" name="vehroute_id">

                                                                <option value="">Select</option>
                                                                                                                                    <optgroup label=" Uppal">
                                                                        
                                                                                <option value="18"  data-fee="0.00">
                                                                                    444                                                                                </option>
                                                                                
                                                                                <option value="17"  data-fee="0.00">
                                                                                    333                                                                                </option>
                                                                                
                                                                                <option value="16"  data-fee="0.00">
                                                                                    1011                                                                                </option>
                                                                                
                                                                                <option value="15"  data-fee="0.00">
                                                                                    1010                                                                                </option>
                                                                                                                                                    </optgroup>
                                                                                                                                        <optgroup label=" MAHE">
                                                                        
                                                                                <option value="14"  data-fee="50.00">
                                                                                    1011                                                                                </option>
                                                                                                                                                    </optgroup>
                                                                                                                                        <optgroup label=" R-17">
                                                                        
                                                                                <option value="12"  data-fee="300.00">
                                                                                    1011                                                                                </option>
                                                                                
                                                                                <option value="11"  data-fee="300.00">
                                                                                    1010                                                                                </option>
                                                                                                                                                    </optgroup>
                                                                                                                                        <optgroup label=" Agrasen Chowk">
                                                                        
                                                                                <option value="6"  data-fee="120.00">
                                                                                    1011                                                                                </option>
                                                                                                                                                    </optgroup>
                                                                                                                                        <optgroup label=" CMD Chowk">
                                                                        
                                                                                <option value="5"  data-fee="100.00">
                                                                                    1011                                                                                </option>
                                                                                                                                                    </optgroup>
                                                                                                                                        <optgroup label=" Brooklyn South">
                                                                        
                                                                                <option value="2"  data-fee="80.00">
                                                                                    1010                                                                                </option>
                                                                                                                                                    </optgroup>
                                                                                                                                        <optgroup label=" Brooklyn East">
                                                                        
                                                                                <option value="1"  data-fee="80.00">
                                                                                    1010                                                                                </option>
                                                                                                                                                    </optgroup>
                                                                                                                                </select>
                                                            <span class="text-danger"></span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> 
                                            <div class="tshadow mb25 bozero">    
                                                <h4 class="pagetitleh2">Miscellaneous Details                                                </h4>

                                                <div class="row around10">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Bank Account Number</label>
                                                            <input id="bank_account_no" name="bank_account_no" placeholder="" type="text" class="form-control"  value="" />
                                                            <span class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Bank Name</label>
                                                            <input id="bank_name" name="bank_name" placeholder="" type="text" class="form-control"  value="" />
                                                            <span class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">IFSC Code</label>
                                                            <input id="ifsc_code" name="ifsc_code" placeholder="" type="text" class="form-control"  value="" />
                                                            <span class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row around10">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">
                                                                National Identification Number                                                            </label>
                                                            <input id="adhar_no" name="adhar_no" placeholder="" type="text" class="form-control"  value="" />
                                                            <span class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">
                                                                Local Identification Number                                                            </label>
                                                            <input id="samagra_id" name="samagra_id" placeholder="" type="text" class="form-control"  value="" />
                                                            <span class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Previous School Details</label>
                                                            <textarea class="form-control" rows="3" placeholder="" name="previous_school"></textarea>
                                                            <span class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   
                                            <div id='upload_documents_hide_show'>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="tshadow bozero">
                                                            <h4 class="pagetitleh2">Upload Documents</h4>

                                                            <div class="row around10">   
                                                                <div class="col-md-6">
                                                                    <table class="table">
                                                                        <tbody><tr>
                                                                                <th style="width: 10px">#</th>
                                                                                <th>Title</th>
                                                                                <th></th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1.</td>
                                                                                <td><input type="text" name='first_title' class="form-control" placeholder=""></td>
                                                                                <td>
                                                                                    <input class="filestyle form-control" type='file' name='first_doc' id="doc1" >
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>2.</td>
                                                                                <td><input type="text" name='second_title' class="form-control" placeholder=""></td>
                                                                                <td>
                                                                                    <input class="filestyle form-control" type='file' name='second_doc' id="doc1" >
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>3.</td>
                                                                                <td><input type="text" name='third_title' class="form-control" placeholder=""></td>
                                                                                <td>
                                                                                    <input class="filestyle form-control" type='file' name='third_doc' id="doc1" >
                                                                                </td>
                                                                            </tr>
                                                                        </tbody></table>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <table class="table">
                                                                        <tbody><tr>
                                                                                <th style="width: 10px">#</th>
                                                                                <th>Title</th>
                                                                                <th></th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>4.</td>
                                                                                <td><input type="text" name='fourth_title' class="form-control" placeholder=""></td>
                                                                                <td>
                                                                                    <input class="filestyle form-control" type='file' name='fourth_doc' id="doc1" >
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>5.</td>
                                                                                <td><input type="text" name='fifth_title' class="form-control" placeholder=""></td>
                                                                                <td>
                                                                                    <input class="filestyle form-control" type='file' name='fifth_doc' id="doc1" >
                                                                                </td>
                                                                            </tr>
                                                                        </tbody></table>
                                                                </div>
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" name="update" class="btn btn-info pull-right">Update</button>
                            </div>
                    </form>
                </div>               
            </div>
			
			
			
			</div> 
		</div>
	</section>

	
	
      
    <?php
					}
					}
	?>
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 