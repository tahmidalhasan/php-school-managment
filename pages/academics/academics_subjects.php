 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">        
            <div class="col-md-4">  



				<?php
				if(isset($_GET['edit_subject_id'])){
					
					$subject_id = $_GET['edit_subject_id'];
					$obj=new shop();
					
					// update query start
					
					if(isset($_POST['update_subject']))
				
					{
					function test_input($data)
						{
						$data = trim($data);//Removes whitespaces from both sides
						$data = addslashes($data);// Add backslashes to the predefined characters in a string
						$data = htmlspecialchars($data);//The htmlspecialchars() function converts some predefined characters to HTML entities.
						$data =filter_var($data,FILTER_SANITIZE_STRING);
						return $data;
						}
						
						$subject_name	=test_input($_POST['subject_name']);
						$subject_type	=test_input($_POST['subject_type']);
						$subject_code	=test_input($_POST['subject_code']);
						
						
						$q="UPDATE academics_subject
						
						SET
						
						subject_name='$subject_name',
						subject_type='$subject_type',
						subject_code='$subject_code'
						
						WHERE id=$subject_id";
						
						$update=$obj->selectDataInsert($q);
						
						if($update){
							echo"<script>window.location='academics_subjects.php';</script>";
							
						}else{
							echo"<script>alert('This Data Update Unsuccesfull.');</script>";
						}
						
					}
					
					
					// update query end
					
					
					
					
					//update fatch query start
					
					$q="SELECT * FROM academics_subject WHERE id=$subject_id";
					
					$read=$obj->selectDataFetch($q);
					
					if($result1=$read->fetch_array()){
					?>
					
					 <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Subject</h3>
                    </div>
                    <form  id="" name="" method="post" accept-charset="utf-8">
                        <div class="box-body">
                                 
                            
							
							<div class="form-group">
                                <label for="">Subject Name</label> <span class="text-danger">*</span>
                                <input id="" name="subject_name" type="text" class="form-control"  value="<?php echo$result1['subject_name'];?>" required/>
                                
                            </div>
							
							<?php
							if($result1['subject_type']=="Theory"){
							?>
							
								<label class="radio-inline">
									<input type="radio" value="Theory" name="subject_type"   checked>Theory  
								</label>
								
								<label class="radio-inline">
									<input type="radio" name="subject_type"  value="Practical">Practical    
								</label>
								
							<?php
							}else{
							?>
								<label class="radio-inline">
									<input type="radio" value="Theory" name="subject_type">Theory  
								</label>
								
								<label class="radio-inline">
									<input type="radio" name="subject_type"  value="Practical" checked>Practical    
								</label>
							<?php
							
							}
							?>
                            <div class="form-group"><br>
                                <label for="">Subject Code</label>
                                <input id="" name="subject_code" placeholder="" type="text" class="form-control"  value="<?php echo $result1['subject_code'];?>" />
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" name="update_subject" class="btn btn-info pull-right">Update</button>
                        </div>
						
						
						
			
						
                    </form>
                </div>
					
					<?php
					
					
		}
		}else{
			
			
			if(isset($_POST['submit']))
				
					{
						// Function for filtering input values.
						function test_input($data)
						{
						$data = trim($data);//Removes whitespaces from both sides
						$data = addslashes($data);// Add backslashes to the predefined characters in a string
						$data = htmlspecialchars($data);//The htmlspecialchars() function converts some predefined characters to HTML entities.
						$data =filter_var($data,FILTER_SANITIZE_STRING);
						return $data;
						}
						
						$subject_name	=test_input($_POST['subject_name']);
						$subject_type	=test_input($_POST['subject_type']);
						$subject_code	=test_input($_POST['subject_code']);
						
						$q="INSERT INTO academics_subject (subject_name,subject_type,subject_code)
								VALUES ('$subject_name','$subject_type','$subject_code')";
						$inserted=$obj->selectDataInsert($q);
						
						if($inserted){
							echo"<script>window.location='academics_subjects.php';</script>";
							
						}else{
							echo"<script>alert('This Data Inserted Unsuccesfull.');</script>";
						}
					}	

			?>
				

            
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Subject</h3>
                    </div>
                    <form  id="" name="" method="post" accept-charset="utf-8">
                        <div class="box-body">
                                 
                            
							
							<div class="form-group">
                                <label for="">Subject Name</label> <span class="text-danger">*</span>
                                <input id="" name="subject_name" type="text" class="form-control"  value="" required/>
                                
                            </div>
							
							
                            <label class="radio-inline">
                                <input type="radio" value="Theory" name="subject_type"   checked>Theory  
							</label>
							
                            <label class="radio-inline">
                                <input type="radio" name="subject_type"  value="Practical">Practical    
							</label>
							
                            <div class="form-group"><br>
                                <label for="">Subject Code</label>
                                <input id="category" name="subject_code" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" name="submit" class="btn btn-info pull-right">Save</button>
                        </div>
                    </form>
                </div>
				
				
				<?php
				}
				?>
				
            </div>
            <div class="col-md-8">            
                <div class="box box-primary" id="sublist">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Subject List</h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive mailbox-messages">
                            <div class="download_label">Subject List</div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Subject Code</th>
                                        <th>Subject Type </th>
                                        <th class="text-right no-print">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								
								<?php
								$obj=new shop();
								
								$q="SELECT * FROM academics_subject";
								$read=$obj->selectDataFetch($q);
								if($read)
								{
								while($result=$read->fetch_array())
								{
								?>
										<tr>
                                            <td class="mailbox-name"> <?php echo $result['subject_name'];?></td>
                                            <td class="mailbox-name"><?php echo $result['subject_code'];?></td>
                                            <td class="mailbox-name"><?php echo $result['subject_type'];?></td>
                                            <td class="mailbox-date pull-right no-print">
                                                <a href="?edit_subject_id=<?php echo$result['id'];?>" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="?del_id=<?php echo$result['id'];?>"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
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
                </div>
            </div> 
        </div> 
    </section>



</div>

<?php 
	if(isset($_GET['del_id']))
	{
		$delID=$_GET['del_id'];
		$q="DELETE FROM academics_subject WHERE id=$delID";
		$obj=new shop();
		$deleted=$obj->selectDataDelete($q);
		
		if($deleted)
		{
			echo"<script>window.location='academics_subjects.php'</script>";
		}
		
	}
	?>

 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 