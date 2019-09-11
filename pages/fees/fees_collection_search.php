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
				
				<div class="box box-info">
                        <div class="box-header ptbnull">
                            <h3 class="box-title titlefix"><i class="fa fa-users"></i> Student List                                 </h3>
                            <div class="box-tools pull-right">
                            </div>
                        </div>
                        <div class="box-body table-responsive">

                            <div class="download_label">Student List</div>
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
						
							
							<table class="table table-striped table-bordered table-hover example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
								
								

                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Class: activate to sort column descending" style="width: 35px;">Class</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Section: activate to sort column ascending" style="width: 46px;">Section</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Admission Number: activate to sort column ascending" style="width: 64px;">Admission Number</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Student Name: activate to sort column ascending" style="width: 84px;">Student Name</th>
										
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Father Name: activate to sort column ascending" style="width: 70px;">Father Name</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date Of Birth: activate to sort column ascending" style="width: 67px;">Date Of Birth</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 48px;">Phone</th>
										<th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 79px;">Action</th>
									</tr>
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
										<td class="sorting_1"><?php echo$result['class']?></td>
										<td><?php echo$result['section']?></td>
										<td><?php echo$result['admission_number']?></td>
										<td><?php echo$result['first_name']?> <?php echo$result['last_name']?></td>
										<td><?php echo$result['father_name']?></td>
										<td><?php echo$result['dob']?></td>
										<td><?php echo$result['mobile_no']?></td>
										<td class="pull-right">
											<a href="fees_collection.php?collect_fees=<?php echo$result['id']?>" class="btn btn-info btn-xs" data-toggle="tooltip" title="" data-original-title="">
												$ Collect Fees  
											</a>
										</td>
									</tr>
									
									<?php
										}
										}
									?>
								</tbody>
							</table>
								
								<div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
								<a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">
								<i class="fa fa-angle-left"></i></a>
								<span><a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a></span>
								<a class="paginate_button next disabled" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" id="DataTables_Table_0_next">
								<i class="fa fa-angle-right"></i></a>
								</div>
					</div>
				</div>
			</div>
					
					<?php
				}else if(isset($_POST['search_by_key'])){
					?>
					
					<div class="box box-info">
                        <div class="box-header ptbnull">
                            <h3 class="box-title titlefix"><i class="fa fa-users"></i> Student List                                 </h3>
                            <div class="box-tools pull-right">
                            </div>
                        </div>
                        <div class="box-body table-responsive">

                            <div class="download_label">Student List</div>
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
						
							
							<table class="table table-striped table-bordered table-hover example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
								
								

                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Class: activate to sort column descending" style="width: 35px;">Class</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Section: activate to sort column ascending" style="width: 46px;">Section</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Admission Number: activate to sort column ascending" style="width: 64px;">Admission Number</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Student Name: activate to sort column ascending" style="width: 84px;">Student Name</th>
										
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Father Name: activate to sort column ascending" style="width: 70px;">Father Name</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date Of Birth: activate to sort column ascending" style="width: 67px;">Date Of Birth</th>
										<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 48px;">Phone</th>
										<th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 79px;">Action</th>
									</tr>
                                </thead>            
                                <tbody>  

								<?php
									  
									 
									 $search_key=$_POST['search_key'];
									   
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
										<td class="sorting_1"><?php echo$result['class']?></td>
										<td><?php echo$result['section']?></td>
										<td><?php echo$result['admission_number']?></td>
										<td><?php echo$result['first_name']?> <?php echo$result['last_name']?></td>
										<td><?php echo$result['father_name']?></td>
										<td><?php echo$result['dob']?></td>
										<td><?php echo$result['mobile_no']?></td>
										<td class="pull-right">
											<a href="fees_collection.php?collect_fees=<?php echo$result['id']?>" class="btn btn-info btn-xs" data-toggle="tooltip" title="" data-original-title="">
												$ Collect Fees  
											</a>
										</td>
									</tr>
									
									<?php
										}
										}
									?>
								</tbody>
							</table>
								
								<div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
								<a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">
								<i class="fa fa-angle-left"></i></a>
								<span><a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a></span>
								<a class="paginate_button next disabled" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" id="DataTables_Table_0_next">
								<i class="fa fa-angle-right"></i></a>
								</div>
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

 
 