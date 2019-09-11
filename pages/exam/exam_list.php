 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  
<section class="content-header">
        <h1>
            <i class="fa fa-map-o"></i> Examinations <small></small>
        </h1>
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
						
						$exam_name	=	test_input($_POST['exam_name']);
						$des			=	test_input($_POST['des']);
						
						
						$q="UPDATE exam_list
						
						SET
						
						exam_name='$exam_name',
						des='$des'
					
						WHERE id=$edit_id";
						
						$update=$obj->selectDataInsert($q);
						
						if($update){
							echo"<script>window.location='exam_list.php';</script>";
							
						}else{
							echo"<script>alert('This Data Update Unsuccesfull.');</script>";
						}
						
					}
			
					
					$obj=new shop();
					
				
					
					$q="SELECT * FROM exam_list WHERE id='$edit_id'";
					$read=$obj->selectDataFetch($q);
					if($result=$read->fetch_array())
					{
					
								
                            
				?>
                <!-- Horizontal Form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Exam</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form id="form1" action=""  id="" name="" method="post" accept-charset="utf-8">
                        <div class="box-body">

                                      <input type='hidden' name='ci_csrf_token' value=''/> 
							 <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input autofocus="" id="exam_name" name="exam_name" placeholder="" type="text" class="form-control"  value="<?php echo $result['exam_name']?>" />
                                <span class="text-danger"></span>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Note</label>
                                <textarea class="form-control" id="des" name="des" placeholder="" rows="3" placeholder="Enter ..."><?php echo $result['des']?></textarea>
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
                        <h3 class="box-title">Add Exam</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form id="form1" action=""  id="" name="" method="post" accept-charset="utf-8">
                        <div class="box-body">

                                    <input type='hidden' name='ci_csrf_token' value=''/>                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input autofocus="" id="name" name="exam_name" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Note</label>
                                <textarea class="form-control" id="des" name="des" placeholder="" rows="3" placeholder="Enter ..."></textarea>
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
						
						
						$exam_name	=	test_input($_POST['exam_name']);
						$des			=	test_input($_POST['des']);
						
						$q="INSERT INTO exam_list (exam_name,des)
								VALUES ('$exam_name','$des')";
								
						$obj=new shop();	
						$inserted=$obj->selectDataInsert($q);
						
						if($inserted){
							echo"<script>window.location='exam_list.php';</script>";
							
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
                        <h3 class="box-title titlefix">Exam List</h3>
                        <div class="box-tools pull-right">

                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="mailbox-controls">
                            <!-- Check all button -->

                            <div class="pull-right">

                            </div><!-- /.pull-right -->
                        </div>
                        <div class="table-responsive mailbox-messages">
                            <div class="download_label">Exam List</div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="text-right">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
								$obj=new shop();
								
								$q="SELECT * FROM exam_list";
								$read=$obj->selectDataFetch($q);
								if($read)
								{
								while($result=$read->fetch_array())
								{
								?>
									<tr>

										<td class="mailbox-name">
											<a href="#" data-toggle="popover" class="detail_popover" ><?php echo $result['exam_name'];?></a>

											<div class="fee_detail_popover" style="display: none">
											<?php
											if($result['des']==""){
											?>
												<p class="text text-danger">No Description</p>
											<?php
											}else{
											?>
											<p class="text text-info"><?php echo $result['des']?></p>
											<?php
											}
											?>
											</div>
											
										</td>
										<td class="mailbox-date pull-right">
											<a href="?edit_id=<?php echo $result['id'];?>" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
											</a>
											<a href="?del_id=<?php echo $result['id'];?>"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
												<i class="fa fa-remove"></i>
											</a>
											<a href=""class="btn btn-info btn-xs">
												View Status</i>
											</a>
										</td>
									</tr>
									
									<?php
								}
								}
			
									?>
                                           
                                </tbody>
                            </table><!-- /.table -->

                        </div><!-- /.mail-box-messages -->
                    </div><!-- /.box-body -->
                </div>
            </div><!--/.col (left) -->
            <!-- right column -->

        </div>
        <div class="row">
            <!-- left column -->

            <!-- right column -->
            <div class="col-md-12">

                <!-- Horizontal Form -->

                <!-- general form elements disabled -->

            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section>

</div>

<?php 
	if(isset($_GET['del_id']))
	{
		$delID=$_GET['del_id'];
		$q="DELETE FROM exam_list WHERE id=$delID";
		$obj=new shop();
		$deleted=$obj->selectDataDelete($q);
		
		if($deleted)
		{
			echo"<script>window.location='exam_list.php'</script>";
		}
		
	}
	?>


 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 