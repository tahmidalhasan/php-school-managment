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
                            <div class="col-md-6">
                                <div class="row">
                                    <form role="form" action="" method="post" class="">
                                        <input type="hidden" name="ci_csrf_token" value="">                 
										<div class="col-sm-6">
                                            <div class="form-group"> 
											
                                                <label>Class</label>
                                                <select autofocus="" id="class" name="class" class="form-control" required>
												 <option value="">Select</option>
												 
                                                   <?php
													  $q="SELECT * FROM academic_classes";
											
														$read=$obj->selectDataFetch($q);
														if($read){
														
														while($result=$read->fetch_array()){
												  ?>
													
													<option value="<?php echo$result['classes']?>"><?php echo$result['classes']?></option>
													<?php
														}
														}
													?>
												</select>
                                                </select>
                                                <span class="text-danger"></span>
                                            </div>  
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Section</label>
                                                <select id="section" name="section" class="form-control">
													<option value="">Select</option>
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

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <button type="submit" name="search" value="" class="btn btn-primary btn-sm pull-right checkbox-toggle"><i class="fa fa-search"></i> Search</button>
												
                                            </div>
                                        </div>
                                </form>
							</div>  
                                
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <form role="form" action="" method="post" class="">
                                        <input type="hidden" name="ci_csrf_token" value="">                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Search By Keyword</label>
                                                <input type="text" name="search_key" class="form-control" placeholder="Search By Name, Roll Number, Enroll Number, National Id, Local Id Etc..">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <button type="submit" name="search_by_key" value="search_full" class="btn btn-primary pull-right btn-sm checkbox-toggle"><i class="fa fa-search"></i> Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				<?php
				
				if(isset($_POST['search'])){
				?>
                      <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i> List  View</a></li>
                            <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false"><i class="fa fa-newspaper-o"></i> Details View</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="download_label">Student Details for Class 5(A)</div>
                            <div class="tab-pane active table-responsive no-padding" id="tab_1">
							
							
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
								
								
								<table class="table table-striped table-bordered table-hover example dataTable no-footer" cellspacing="0" width="100%" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 100%;">
								
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Admission Number: activate to sort column descending" style="width: 72px;">Admission Number</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Student Name: activate to sort column ascending" style="width: 48px;">Student Name</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Class: activate to sort column ascending" style="width: 34px;">Class</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Father Name: activate to sort column ascending" style="width: 44px;">Father Name</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date Of Birth: activate to sort column ascending" style="width: 67px;">Date Of Birth</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 43px;">Gender</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 54px;">Category</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Mobile Number: activate to sort column ascending" style="width: 71px;">Mobile Number</th>
										<th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 39px;">Action</th></tr>
                                    </thead>
                                    <tbody>
											 <?php
											 
											  $class=$_POST['class'];
											 $section=$_POST['section'];
											  
											  $q="SELECT * FROM students_info WHERE class='$class' AND section='$section'";
									
												$read=$obj->selectDataFetch($q);
												if($read){
												
												while($result=$read->fetch_array()){
										  ?>                                    
																						
										 <tr role="row" class="odd">
											<td class="sorting_1"><?php echo$result['admission_number']?></td>
											<td><a href="student_details_show.php?show_id=<?php echo $result['id'];?>"><?php echo$result['first_name']?> <?php echo$result['last_name']?>   </a></td>
											<td><?php echo$result['class']?>(<?php echo$result['section']?>)</td>
											<td><?php echo$result['father_name']?></td>
											<td><?php echo$result['dob']?></td>
											<td><?php echo$result['gender']?></td>
											<td><?php echo$result['category']?></td>
											<td><?php echo$result['mobile_no']?></td>

											<td class="pull-right">
												<a href="student_details_show.php?show_id=<?php echo $result['id'];?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="" data-original-title="Show">
													<i class="fa fa-reorder"></i>
												</a>
												<a href="student_info_edit.php?edit_id=<?php echo $result['id'];?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="" data-original-title="Edit">
													<i class="fa fa-pencil"></i>
												</a>
												<a href="fees_collection.php" class="btn btn-default btn-xs" data-toggle="tooltip" title="" data-original-title="Add Fees">
													$ 
												</a>
											</td>
										</tr>
										
										<?php
												}
												}
										?>
												
									</tbody>
                                </table>
								
								
								
								</div>
                           
						   </div>  
	
                            <div class="tab-pane" id="tab_2">
							
							
								<?php
									 
										$read=$obj->selectDataFetch($q);
										if($read){
										
										while($result=$read->fetch_array()){
											
											
								  ?>                                    
												
                                        <div class="carousel-row">
                                            <div class="slide-row">
                                                <div id="carousel-1" class="carousel slide slide-carousel" data-ride="carousel">
                                                    <div class="carousel-inner">
													<?php 
													if($result['image']==""){
													?>
                                                        <div class="item active">
                                                            <a href=""> <img class="img-responsive img-thumbnail width150" alt="Cinque Terre" src="img/no_image.png"></a>
                                                        </div>
														<?php
													}else{
														
														?>
														
														<div class="item active">
                                                            <a href=""> <img class="img-responsive img-thumbnail width150" alt="Cinque Terre" src="upload/<?php echo$result['image']?>"></a>
                                                        </div>	
														
														<?php
														
													}
														
														?>
														
                                                    </div>
                                                </div>
                                                <div class="slide-content">
                                                    <h4><a href="student_details_show.php?show_id=<?php echo $result['id'];?>"> <?php echo$result['first_name']?> <?php echo$result['last_name']?> </a></h4>
                                                    <div class="row">
                                                        <div class="col-xs-6 col-md-6">
                                                            <address>
                                                                <strong><b>Class: </b><?php echo$result['class']?>(<?php echo$result['section']?>)</strong><br>
                                                                <b>Admission Number: </b><?php echo$result['admission_number']?><br>
                                                                <b>Date Of Birth:<?php echo$result['dob']?><br>
                                                                    <b>Gender:&nbsp;</b><?php echo$result['gender']?><br>
                                                                    </b></address><b>
                                                                    </b></div><b>
                                                                    <div class="col-xs-6 col-md-6">
                                                                        <b>Local Identification Number:&nbsp;</b><br>
                                                                        <b>Guardian Name:&nbsp;</b><?php echo$result['guardian_name']?><br>
                                                                        <b>Guardian Phone: </b> <abbr title="Phone"><i class="fa fa-phone-square"></i>&nbsp;</abbr> <?php echo$result['guardian_phone']?><br>
                                                                        <b>Current Address:&nbsp;</b> <br>
                                                                    </div>
                                                                    </b></div><b>
                                                                    </b></div><b>
                                                                    <div class="slide-footer">
                                                                        <span class="pull-right buttons">
                                                                            <a href="student_details_show.php?show_id=<?php echo $result['id'];?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                                                <i class="fa fa-reorder"></i>
                                                                            </a>
                                                                            <a href="student_info_edit.php?edit_id=<?php echo $result['id'];?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                                                <i class="fa fa-pencil"></i>
                                                                            </a>
                                                                            <a href="" class="btn btn-default btn-xs" data-toggle="tooltip" title="" data-original-title="Add Fees">    
                                                                                $                                                                            </a>
                                                                        </span>
																	</div>
                                                         </b></div>
												</div>
                                            
												<?php
										}
										}
												?>		
										</div>
									</div>
								</div>
								
								<?php
				}else if(isset($_POST['search_by_key'])){
				
								?>
								
					<div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i> List  View</a></li>
                            <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false"><i class="fa fa-newspaper-o"></i> Details View</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="download_label">Student Details for Class 5(A)</div>
                            <div class="tab-pane active table-responsive no-padding" id="tab_1">
							
							
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
								
								
								<table class="table table-striped table-bordered table-hover example dataTable no-footer" cellspacing="0" width="100%" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 100%;">
								
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Admission Number: activate to sort column descending" style="width: 72px;">Admission Number</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Student Name: activate to sort column ascending" style="width: 48px;">Student Name</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Class: activate to sort column ascending" style="width: 34px;">Class</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Father Name: activate to sort column ascending" style="width: 44px;">Father Name</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date Of Birth: activate to sort column ascending" style="width: 67px;">Date Of Birth</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 43px;">Gender</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 54px;">Category</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Mobile Number: activate to sort column ascending" style="width: 71px;">Mobile Number</th>
										<th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 39px;">Action</th></tr>
                                    </thead>
                                    <tbody>
											 <?php
											 
											 
											 $search_key=$_POST['search_key'];
											 
											 //WHERE content LIKE '%$pattern%'
											  
											  $q="SELECT * FROM students_info WHERE class LIKE '%$search_key%' or section LIKE '%$search_key%'
											   or roll_number LIKE '%$search_key%' or admission_number LIKE '%$search_key%' or first_name LIKE '%$search_key%'
											   or last_name LIKE '%$search_key%' or gender LIKE '%$search_key%' or category LIKE '%$search_key%'
											   or mobile_no LIKE '%$search_key%' or father_name LIKE '%$search_key%' or religion LIKE '%$search_key%'
											   or admission_date LIKE '%$search_key%' or email LIKE '%$search_key%'";
									
												$read=$obj->selectDataFetch($q);
												if($read){
												
												while($result=$read->fetch_array()){
										  ?>                                    
																						
										 <tr role="row" class="odd">
											<td class="sorting_1"><?php echo$result['admission_number']?></td>
											<td><a href="student_details_show.php?show_id=<?php echo $result['id'];?>"><?php echo$result['first_name']?> <?php echo$result['last_name']?>   </a></td>
											<td><?php echo$result['class']?>(<?php echo$result['section']?>)</td>
											<td><?php echo$result['father_name']?></td>
											<td><?php echo$result['dob']?></td>
											<td><?php echo$result['gender']?></td>
											<td><?php echo$result['category']?></td>
											<td><?php echo$result['mobile_no']?></td>

											<td class="pull-right">
												<a href="student_details_show.php?show_id=<?php echo $result['id'];?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="" data-original-title="Show">
													<i class="fa fa-reorder"></i>
												</a>
												<a href="student_info_edit.php?edit_id=<?php echo $result['id'];?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="" data-original-title="Edit">
													<i class="fa fa-pencil"></i>
												</a>
												<a href="fees_collection.php" class="btn btn-default btn-xs" data-toggle="tooltip" title="" data-original-title="Add Fees">
													$ 
												</a>
											</td>
										</tr>
										
										<?php
												}
												}
										?>
												
									</tbody>
                                </table>
								
								
								
								</div>
                           
						   </div>  
	
                            <div class="tab-pane" id="tab_2">
							
							
								<?php
									 
										$read=$obj->selectDataFetch($q);
										if($read){
										
										while($result=$read->fetch_array()){
											
											
								  ?>                                    
												
                                        <div class="carousel-row">
                                            <div class="slide-row">
                                                <div id="carousel-1" class="carousel slide slide-carousel" data-ride="carousel">
                                                    <div class="carousel-inner">
													<?php 
													if($result['image']==""){
													?>
                                                        <div class="item active">
                                                            <a href=""> <img class="img-responsive img-thumbnail width150" alt="Cinque Terre" src="img/no_image.png"></a>
                                                        </div>
														<?php
													}else{
														
														?>
														
														<div class="item active">
                                                            <a href=""> <img class="img-responsive img-thumbnail width150" alt="Cinque Terre" src="upload/<?php echo$result['image']?>"></a>
                                                        </div>	
														
														<?php
														
													}
														
														?>
														
                                                    </div>
                                                </div>
                                                <div class="slide-content">
                                                    <h4><a href="student_details_show.php?show_id=<?php echo $result['id'];?>"> <?php echo$result['first_name']?> <?php echo$result['last_name']?> </a></h4>
                                                    <div class="row">
                                                        <div class="col-xs-6 col-md-6">
                                                            <address>
                                                                <strong><b>Class: </b><?php echo$result['class']?>(<?php echo$result['section']?>)</strong><br>
                                                                <b>Admission Number: </b><?php echo$result['admission_number']?><br>
                                                                <b>Date Of Birth:<?php echo$result['dob']?><br>
                                                                    <b>Gender:&nbsp;</b><?php echo$result['gender']?><br>
                                                                    </b></address><b>
                                                                    </b></div><b>
                                                                    <div class="col-xs-6 col-md-6">
                                                                        <b>Local Identification Number:&nbsp;</b><br>
                                                                        <b>Guardian Name:&nbsp;</b><?php echo$result['guardian_name']?><br>
                                                                        <b>Guardian Phone: </b> <abbr title="Phone"><i class="fa fa-phone-square"></i>&nbsp;</abbr> <?php echo$result['guardian_phone']?><br>
                                                                        <b>Current Address:&nbsp;</b> <br>
                                                                    </div>
                                                                    </b></div><b>
                                                                    </b></div><b>
                                                                    <div class="slide-footer">
                                                                        <span class="pull-right buttons">
                                                                            <a href="student_details_show.php?show_id=<?php echo $result['id'];?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                                                <i class="fa fa-reorder"></i>
                                                                            </a>
                                                                            <a href="student_info_edit.php?edit_id=<?php echo $result['id'];?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                                                <i class="fa fa-pencil"></i>
                                                                            </a>
                                                                            <a href="" class="btn btn-default btn-xs" data-toggle="tooltip" title="" data-original-title="Add Fees">    
                                                                                $                                                                            </a>
                                                                        </span>
																	</div>
                                                         </b></div>
												</div>
                                            
												<?php
										}
										}
												?>		
										</div>
									</div>
								</div>
								
								
				<?php
				}
				?>
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

 
 