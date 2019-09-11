 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  
<section class="content-header">
        <h1>
            <i class="fa fa-mortar-board"></i> Academics <small></small>        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-4">
			<?php
			if(isset($_GET['edit_id'])){
				
				$edit_id=$_GET['edit_id'];
				
				
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
						
						$section	=test_input($_POST['section']);
						
						
						
						$q="UPDATE academic_sections
						
						SET
						
						section='$section'
						
						
						WHERE id=$edit_id";
						
						$update=$obj->selectDataInsert($q);
						
						if($update){
							echo"<script>window.location='academics_sections.php';</script>";
							
						}else{
							echo"<script>alert('This Data Update Unsuccesfull.');</script>";
						}
						
					}
				
				?>
				
				 <div class="box box-primary">
				 <div class="box-header with-border">
                        <h3 class="box-title">Update Section</h3>
                    </div> 
                    <form action="" method="post" accept-charset="utf-8">
                        <div class="box-body">
                              
							  <?php
							  $q="SELECT * FROM academic_sections WHERE id=$edit_id";
					
					$read=$obj->selectDataFetch($q);
					
					if($result=$read->fetch_array()){
							  ?>
							  
                             <div class="form-group">
                                <label for="exampleInputEmail1">Section Name </label>
								<span class="text-danger"> *</span>
                                <input autofocus="" id="" name="section" placeholder="" type="text" class="form-control"  value="<?php echo $result['section'];?>" required/>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" name="update" class="btn btn-info pull-right">Update</button>
                        </div>
                    </form>
				
                </div>  
				
				
			<?php
					}
			}else{
			?>
			
			
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
						
						
						$section	=	test_input($_POST['section']);
						
						$q="INSERT INTO academic_sections (section)
								VALUES ('$section')";
								
						$obj=new shop();	
						$inserted=$obj->selectDataInsert($q);
						
						if($inserted){
							echo"<script>window.location='academics_sections.php';</script>";
							
						}else{
							echo"<script>alert('This Data Inserted Unsuccesfull.');</script>";
						}
					}	

				?>
				
				 <div class="box box-primary">
				 <div class="box-header with-border">
                        <h3 class="box-title">Add Section</h3>
                    </div> 
                    <form action="" method="post" accept-charset="utf-8">
                        <div class="box-body">
                              
                             <div class="form-group">
                                <label for="exampleInputEmail1">Section Name </label>
								<span class="text-danger"> *</span>
                                <input autofocus="" id="" name="section" placeholder="" type="text" class="form-control"  value="" required/>
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
                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Section List</h3>
                    </div>
                    <div class="box-body ">
                        <div class="table-responsive mailbox-messages">
						<div class="download_label">Section List</div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th>Section</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>  
								
								<?php
								$obj=new shop();
								
								$q="SELECT * FROM academic_sections";
								$read=$obj->selectDataFetch($q);
								if($read)
								{
								while($result=$read->fetch_array())
								{
								?>
                                        <tr>
                                            <td class="mailbox-name"> <?php echo $result['section'];?></td>
                                            <td class="mailbox-date pull-right">
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
<?php 
	if(isset($_GET['del_id']))
	{
		$delID=$_GET['del_id'];
		$q="DELETE FROM academic_sections WHERE id=$delID";
		$obj=new shop();
		$deleted=$obj->selectDataDelete($q);
		
		if($deleted)
		{
			echo"<script>window.location='academics_sections.php'</script>";
		}
		
	}
	?>

 

</div>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 