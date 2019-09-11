 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  
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
						
						
						$expense_head	=	test_input($_POST['expense_head']);
						$expense_name	=	test_input($_POST['expense_name']);
						$expense_date	=	test_input($_POST['expense_date']);
						$expense_amount	=	test_input($_POST['expense_amount']);
						$des			=	test_input($_POST['des']);
						// image file input start
						
						$image_name		=$_FILES['expense_document']['name'];
						$image_size		=$_FILES['expense_document']['size'];
						$temp_image		=$_FILES['expense_document']['tmp_name'];
						$div			=explode('.',$image_name);
						$f_ext			=strtolower(end($div));
						$uni_file		=substr(md5(time()),0,10).'.'.$f_ext;
						$uploaded_file	="upload/".$uni_file;
			
						// image file input end
			
						
						if($image_name==""){
							$q="UPDATE expense_add
						
							SET
							
							expense_head='$expense_head',
							expense_name='$expense_name',
							expense_date='$expense_date',
							expense_amount='$expense_amount',
							des='$des'
						
							WHERE id=$edit_id";
							
						}else{
							move_uploaded_file($temp_image,$uploaded_file);
							
							$q="UPDATE expense_add
						
							SET
							
							expense_head='$expense_head',
							expense_name='$expense_name',
							expense_date='$expense_date',
							expense_amount='$expense_amount',
							expense_document='$uni_file',
							des='$des'
						
							WHERE id=$edit_id";
						}
						$update=$obj->selectDataUpdate($q);
						if($update){
							
							//echo"<script>alert('This Succesfull  With Image.');</script>";
							echo"<script>window.location='expenses_add.php';</script>";
							
						}else{
							echo"<script>alert('This Data Update Unsuccesfull.');</script>";
						}
						
					}
				
				$obj=new shop();
					
					$q1="SELECT * FROM expense_add WHERE id='$edit_id'";
					$read=$obj->selectDataFetch($q1);
					if($result=$read->fetch_array())
					{
						
			?>
			    <!-- Horizontal Form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Expense</h3>
                    </div><!-- /.box-header -->
                    <form id="" action=""  id="" name="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <div class="box-body">
                           <input type='hidden' name='ci_csrf_token' value=''/>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Expense Head</label>

                                <select autofocus="" id="expense_head" name="expense_head" class="form-control" required>
                                    <option value="">Select</option>
                                    <option value="<?php echo$result['expense_head']?>" selected><?php echo$result['expense_head']?></option>
									
									<?php
									$obj=new shop();
										   $q="SELECT * FROM expenses_head";
								
											$read=$obj->selectDataFetch($q);
											if($read){
											
											while($row=$read->fetch_array()){
									  ?>
										
										<option value="<?php echo$row['expenses_head']?>"><?php echo$row['expenses_head']?></option>
										<?php
											}
											} 
										?>
								</select>

                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input id="expense_name" name="expense_name" placeholder="" type="text" class="form-control"  value="<?php echo$result['expense_name']?>" required>
                                <span class="text-danger"></span>
                            </div>
							
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date</label>
                                <input id="datepicker" name="expense_date" placeholder="" type="text" class="form-control"  value="<?php echo$result['expense_date']?>" readonly="readonly" required>
                                
								<span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Amount</label>
                                <input id="income_amount" name="expense_amount" step="0.01" placeholder="" type="text" class="form-control"  value="<?php echo$result['expense_amount']?>"" required>
                                <span class="text-danger"></span>
                            </div>
                           
							<div class="form-group">
							<div><img width="80px" src="upload/<?php echo$result['expense_document']?>" alt="" /></div>
						   
                                <label for="exampleInputFile">Attach Document</label>
                                <input class="filestyle form-control" name="expense_document" type="file" name="file" id="file" size="20" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);"><div class="bootstrap-filestyle" style="display: inline-block;" tabindex="0"><input type="text" class="input-large" disabled=""> <label for="file" class="btn btn-default chosebtn"> <i class="icon-folder-open"></i> <span>Choose File</span></label></div>
								
						   </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control" id="des" name="des" placeholder="" rows="3" placeholder="Enter ..."><?php echo$result['des']?>"</textarea>
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
                        <h3 class="box-title">Add Expense</h3>
                    </div><!-- /.box-header -->
                    <form id="" action=""  id="" name="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <div class="box-body">
                           <input type='hidden' name='ci_csrf_token' value=''/>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Expense Head</label>

                                <select autofocus="" id="expense_head" name="expense_head" class="form-control" required>
                                    <option value="">Select</option>
									
									<?php
										  $q="SELECT * FROM expenses_head";
								
											$read=$obj->selectDataFetch($q);
											if($read){
											
											while($result=$read->fetch_array()){
									  ?>
										
										<option value="<?php echo$result['expenses_head']?>"><?php echo$result['expenses_head']?></option>
										<?php
											}
											}
										?>
								</select>

                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input id="income_name" name="expense_name" placeholder="" type="text" class="form-control"  value="" required>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date</label>
                                <input id="datepicker" name="expense_date" placeholder="" type="text" class="form-control"  value="" readonly="readonly" required>
                                
								<span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Amount</label>
                                <input id="income_amount" name="expense_amount" step="0.01" placeholder="" type="text" class="form-control"  value="" required>
                                <span class="text-danger"></span>
                            </div>
                           
							<div class="form-group">
                                <label for="exampleInputFile">Attach Document</label>
                                <input class="filestyle form-control" name="expense_document" type="file" name="file" id="file" size="20" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);"><div class="bootstrap-filestyle" style="display: inline-block;" tabindex="0"><input type="text" class="input-large" disabled=""> <label for="file" class="btn btn-default chosebtn"> <i class="icon-folder-open"></i> <span>Choose File</span></label></div>
								
						   </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
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
						
						
						$expense_head	=	test_input($_POST['expense_head']);
						$expense_name	=	test_input($_POST['expense_name']);
						$expense_date	=	test_input($_POST['expense_date']);
						$expense_amount	=	test_input($_POST['expense_amount']);
						$des			=	test_input($_POST['des']);
						// image file input start
						
						$image_name		=$_FILES['expense_document']['name'];
						$image_size		=$_FILES['expense_document']['size'];
						$temp_image		=$_FILES['expense_document']['tmp_name'];
						$div			=explode('.',$image_name);
						$f_ext			=strtolower(end($div));
						$uni_file		=substr(md5(time()),0,10).'.'.$f_ext;
						$uploaded_file	="upload/".$uni_file;
			
						// image file input end
						
						if($image_name==""){
							
							$q="INSERT INTO expense_add (expense_head,expense_name,expense_date,expense_amount,des)
								VALUES ('$expense_head','$expense_name','$expense_date','$expense_amount','$des')";
							
							
						}else{
							move_uploaded_file($temp_image,$uploaded_file);
							
							
							$q="INSERT INTO expense_add (expense_head,expense_name,expense_date,expense_amount,expense_document,des)
								VALUES ('$expense_head','$expense_name','$expense_date','$expense_amount','$uni_file','$des')";
							
							
						}
						$obj=new shop();	
							$inserted=$obj->selectDataInsert($q);
							
							if($inserted){
								echo"<script>window.location='expenses_add.php';</script>";
								
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
                        <h3 class="box-title titlefix">Expense List</h3>
                        <div class="box-tools pull-right">
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive mailbox-messages">
                            <div class="download_label">Expense List</div>
                            <table class="table table-hover table-striped table-bordered example">
                                <thead>
                                    <tr>
                                        <th>Name    </th>
                                        <th>Date   </th>
                                        <th>Expense Head  </th>
                                        <th>Amount    </th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
								$obj=new shop();
								
								$q="SELECT * FROM expense_add";
								$read=$obj->selectDataFetch($q);
								if($read)
								{
								while($result=$read->fetch_array())
								{
								?>
									  <tr>
										<td class="mailbox-name">
											<a href="#" data-toggle="popover" class="detail_popover"><?php echo $result['expense_name']?></a>

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
										
										<td class="mailbox-name"><?php echo $result['expense_date']?></td>

										<td class="mailbox-name"><?php echo $result['expense_head']?></td>

										
										<td class="mailbox-name"><?php echo $result['expense_amount']?></td>
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

            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section>
<?php 
	if(isset($_GET['del_id']))
	{
		$delID=$_GET['del_id'];
		$q="DELETE FROM expense_add WHERE id=$delID";
		$obj=new shop();
		$deleted=$obj->selectDataDelete($q);
		
		if($deleted)
		{
			echo"<script>window.location='expenses_add.php'</script>";
		}
		
	}
	?>
 
</div>

<script>
    $(document).ready(function () {
        $('.detail_popover').popover({
            placement: 'right',
            trigger: 'hover',
            container: 'body',
            html: true,
            content: function () {
                return $(this).closest('td').find('.fee_detail_popover').html();
            }
        });
    });
</script>

 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 