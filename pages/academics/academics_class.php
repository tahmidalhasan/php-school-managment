 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
   <section class="content-header">
        <h1>
            <i class="fa fa-mortar-board"></i> Academics     </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
	
            <div class="col-md-4">
                <!-- Horizontal Form -->
				<?php
				if(isset($_GET['edit_id'])){
					
					$edit_id=$_GET['edit_id'];
					
				// update quiery start	
				
				if(isset($_POST['update']))
				
					{
					function test_input($data)
						{
						$data = trim($data);//Removes whitespaces from both sides
						$data = addslashes($data);// Add backslashes to the predefined characters in a string
						$data = htmlspecialchars($data);//The htmlspecialchars() function converts some predefined characters to HTML entities.
						$data =filter_var($data,FILTER_SANITIZE_STRING);
						return $data;
						}
						
						$class	=	test_input($_POST['class']);
						$class_section	=	test_input($_POST['class_section']);
						
						
						
						$q="UPDATE academic_classes
						
						SET
						
						classes='$class',
						class_section='$class_section'
						
						
						WHERE id=$edit_id";
						
						$update=$obj->selectDataInsert($q);
						
						if($update){
							echo"<script>window.location='academics_class.php';</script>";
							
						}else{
							echo"<script>alert('This Data Update Unsuccesfull.');</script>";
						}
						
					}
				
				
				// update quiery end	
					
					
					
				$q="SELECT * FROM academic_classes WHERE id=$edit_id";
					
					$read=$obj->selectDataFetch($q);
					
					if($result=$read->fetch_array()){
							  
					
				 ?>
					 <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Class</h3>
                    </div><!-- /.box-header -->
                    <form id="" action=""  method="post" accept-charset="utf-8">
                        <div class="box-body">
                           <div class="form-group">
                                <label for="">Class</label>
                                <input autofocus="" id="class" name="class" placeholder="" type="text" class="form-control"  value="<?php echo$result['classes']?>" required/>
                                <span class="text-danger"></span>
                            </div>
							
                            <div class="form-group">
                                <label for="">Sections</label>
									<select name="class_section" class="form-control" id="">
										<option value=""></option>
										<option value="<?php echo$result['class_section']?>" selected><?php echo$result['class_section']?></option>
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

                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" name="update" class="btn btn-info pull-right">Update</button>
                        </div>
                    </form>
					
				
                </div>
				
					
				<?php	
				}
				}else{
				?>
				
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Class</h3>
                    </div><!-- /.box-header -->
                    <form id="" action=""  method="post" accept-charset="utf-8">
                        <div class="box-body">
                           <div class="form-group">
						   
                                <label for="">Class</label> <span class="text-danger">*</span>
                                <input autofocus="" id="class" name="class" placeholder="" type="text" class="form-control"  value="" required/>
                                <span class="text-danger"></span>
                            </div>
							
                            <div class="form-group">
                                <label for="">Sections</label>
									<select name="class_section" class="form-control" id="">
										<option value=""></option>
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

                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" name="submit" class="btn btn-info pull-right">Save</button>
                        </div>
                    </form>
					
				
                </div>
				
				<?php
				if(isset($_POST['submit'])){
						// Function for filtering input values.
						function test_input($data)
						{
						$data = trim($data);//Removes whitespaces from both sides
						$data = addslashes($data);// Add backslashes to the predefined characters in a string
						$data = htmlspecialchars($data);//The htmlspecialchars() function converts some predefined characters to HTML entities.
						$data =filter_var($data,FILTER_SANITIZE_STRING);
						return $data;
						}
						
						
						$class	=	test_input($_POST['class']);
						$class_section	=	test_input($_POST['class_section']);
						
						$q="INSERT INTO academic_classes (classes,class_section)
								VALUES ('$class','$class_section')";
								
						$obj=new shop();	
						$inserted=$obj->selectDataInsert($q);
						
						if($inserted){
							echo"<script>window.location='academics_class.php';</script>";
							
						}else{
							echo"<script>alert('This Data Inserted Unsuccesfull.');</script>";
						}
					}
				
				}
				?>

            </div><!--/.col (right) -->
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Class List</h3>
                        <div class="box-tools pull-right">
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive mailbox-messages">
						<div class="download_label">Class List</div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>

                                        <th>Class                                        </th>
                                        <th>Sections                                        </th>

                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								
									<?php
										  $q="SELECT * FROM academic_classes";
								
											$read=$obj->selectDataFetch($q);
											if($read){
											
											while($result=$read->fetch_array()){
									  ?>
                                        <tr>
                                            <td class="mailbox-name">
                                                <?php echo$result['classes']?>
                                            </td>


                                            <td>
                                                <div><?php echo$result['class_section']?></div>
                                            </td>
                                            <td class="mailbox-date pull-right">
                                                <a href="?edit_id=<?php echo $result['id'];?>"  class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href=""class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </td>
                                     
                                         </tr>
										 <?php
											}
											}
										 ?>
										 
                                         <tr>
                                            <td class="mailbox-name">
                                                Class 4
                                            </td>


                                            <td>
                                                <div>A</div>
                                            </td>
                                            <td class="mailbox-date pull-right"">
                                                <a href="https://demo.smart-school.in/classes/edit/4" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/classes/delete/4"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="mailbox-name">
                                                Class 2
                                            </td>


                                            <td>
                                                <div>A</div><div>B</div>
                                            </td>
                                            <td class="mailbox-date pull-right"">
                                                <a href="https://demo.smart-school.in/classes/edit/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/classes/delete/2"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                </tbody>
                            </table><!-- /.table -->



                        </div><!-- /.mail-box-messages -->
                    </div><!-- /.box-body -->
                </div>
            </div><!--/.col (left) -->
            <!-- right column -->

        </div>
       
    </section>


</div>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 