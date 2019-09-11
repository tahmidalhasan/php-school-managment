 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
	 <section class="content-header">
			<h1><i class="fa fa-user-plus"></i> Student Information <small></small></h1>
		</section>
	
  <section class="content">
        <div class="row">
		
		
            <div class="col-md-4">
			
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
						
						$category	=	test_input($_POST['category']);
						
						
						
						$q="UPDATE student_cat
						
						SET
						category='$category'
						
						WHERE id=$edit_id";
						
						$update=$obj->selectDataInsert($q);
						
						if($update){
							echo"<script>window.location='student_categores.php';</script>";
							
						}else{
							echo"<script>alert('This Data Update Unsuccesfull.');</script>";
						}
						
					}
					?>
				
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Category</h3>
                    </div> 
                    <form id="" action=""  id="" name="" method="post" accept-charset="utf-8">
                        <div class="box-body">
						
						<?php
							$q="SELECT * FROM student_cat WHERE id=$edit_id";
							
							$read=$obj->selectDataFetch($q);
							
							if($result=$read->fetch_array()){
						?>
                                
                            <input type='hidden' name='' value=''/>  
							<div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <input autofocus="" id="" name="category" placeholder="" type="text" class="form-control"  value="<?php echo $result['category'] ?>" required />
                                <span class="text-danger"></span>
                            </div>
							
							<?php
							}
							?>
                        </div>
                        <div class="box-footer">
                            <button type="submit" name="update" class="btn btn-info pull-right">Update</button>
                        </div>
                    </form>
                </div>  
				
				<?php
				}else{	
				?>

				<div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Category</h3>
                    </div> 
                    <form id="" action=""  id="" name="" method="post" accept-charset="utf-8">
                        <div class="box-body">
						
						
                                
                            <input type='hidden' name='' value=''/>  
							<div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <input autofocus="" id="" name="category" placeholder="" type="text" class="form-control" required />
                                <span class="text-danger"></span>
                            </div>
							
                        </div>
                        <div class="box-footer">
                            <button type="submit" name="submit" class="btn btn-info pull-right">Save</button>
                        </div>
                    </form>
                </div>  
				
<?php
			
			// category insert start
			
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
						
						
						$category	=	test_input($_POST['category']);
						
						
						$q="INSERT INTO student_cat (category)
								VALUES ('$category')";
								
						$obj=new shop();	
						$inserted=$obj->selectDataInsert($q);
						
						if($inserted){
							echo"<script>window.location='student_categores.php';</script>";
							
						}else{
							echo"<script>alert('This Data Inserted Unsuccesfull.');</script>";
						}
					}
				
				
				
				
				// category insert end
				?>

				<?php				
				}
				?>
				
            </div> 
            <div class="col-md-8">             
                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Category List</h3>                   
                    </div>
                    <div class="box-body">
                        <div class="download_label">Category List</div>
                        <div class="table-responsive mailbox-messages">
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								
									<?php
										  $q="SELECT * FROM student_cat";
								
											$read=$obj->selectDataFetch($q);
											if($read){
											
											while($result=$read->fetch_array()){
									  ?>
                                         <tr>
                                            <td class="mailbox-name"><?php echo $result['category'] ?></td>
                                            <td  class="mailbox-date pull-right">
                                                <a href="?edit_id=<?php echo $result['id'];?>" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="?del_id=<?php echo $result['id'];?>"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
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
		$q="DELETE FROM student_cat WHERE id=$delID";
		$obj=new shop();
		$deleted=$obj->selectDataDelete($q);
		
		if($deleted)
		{
			echo"<script>window.location='student_categores.php'</script>";
		}
		
	}
	?>

 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 