 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  <section class="content-header">
        <h1>
            <i class="fa fa-money"></i> Fees Collectionsss</h1>
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
						
						$accountant_name	=	test_input($_POST['accountant_name']);
						$accountant_email	=	test_input($_POST['accountant_email']);
						$gender				=	test_input($_POST['gender']);
						$dob				=	test_input($_POST['dob']);
						$address			=	test_input($_POST['address']);
						$accountant_phone	=	test_input($_POST['accountant_phone']);
					
						// image file input start
						
						$image_name		=	$_FILES['image']['name'];
						$image_size		=	$_FILES['image']['size'];
						$temp_image		=	$_FILES['image']['tmp_name'];
						$div			=	explode('.',$image_name);
						$f_ext			=	strtolower(end($div));
						$uni_file		=	substr(md5(time()),0,10).'.'.$f_ext;
						$uploaded_file	=	"upload/".$uni_file;
			
						// image file input end
						if($image_name==""){
						
						$q="UPDATE accountant
						
						SET
						
						accountant_name='$accountant_name',
						accountant_email='$accountant_email',
						gender='$gender',
						dob='$dob',
						address='$address',
						accountant_phone='$accountant_phone'
					
						WHERE id=$edit_id";
						
						$update=$obj->selectDataInsert($q);
						
						if($update){
							echo"<script>window.location='accountants.php';</script>";
							
						}else{
							echo"<script>alert('This Data Update Unsuccesfull.');</script>";
						}
						
					}else{
						move_uploaded_file($temp_image,$uploaded_file);
						
						  $obj=new shop();
						
						
						$q="UPDATE accountant
						
						SET
						
						accountant_name='$accountant_name',
						accountant_email='$accountant_email',
						gender='$gender',
						dob='$dob',
						address='$address',
						accountant_phone='$accountant_phone',
						image='$uni_file'
						
						WHERE id=$edit_id";
					
						$update=$obj->selectDataInsert($q);
						
						if($update){
							echo"<script>window.location='accountants.php';</script>";
							
						}else{
							echo"<script>alert('This Data Update Unsuccesfull.');</script>";
						}
						
					}
					}
					
					
					$obj=new shop();
					
					$q="SELECT * FROM accountant WHERE id='$edit_id'";
					$read=$obj->selectDataFetch($q);
					if($result=$read->fetch_array())
					{
					
								
                            
				?>			
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Accountant</h3>
                    </div> 
                    <form id="" action=""  id="" name="employeeform" method="post" accept-charset="utf-8"  enctype="multipart/form-data">
                        <div class="box-body">
                                    
                            <input type='hidden' name='ci_csrf_token' value=''/> 
							<div class="form-group">
                                <label for="accountant_name">Name</label>
                                <input autofocus="" id="accountant_name" name="accountant_name" placeholder="" type="text" class="form-control"  value="<?php echo $result['accountant_name']?>" required/>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="accountant_email">Email</label>
                                <input id="accountant_email" name="accountant_email"  placeholder="" type="text" class="form-control"  value="<?php echo $result['accountant_email']?>" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="gender"> Gender &nbsp;&nbsp;</label>
                                <select class="form-control" name="gender"required>
								
								<?php
								if($result['gender']=="Male"){
								?>
                                    <option value="<?php echo $result['gender']?>" selected><?php echo $result['gender']?></option>
									
									<option value="Female" >Female</option>
									
									<?php
									}else{
									?>
									
									<option value="<?php echo $result['gender']?>" selected><?php echo $result['gender']?></option>
									
									<option value="Male" >Male</option>
									<?php
									}
									?>
								</select>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
								<label for="dob">Date Of Birth</label>
								 <input type="text" name="dob"class="form-control pull-right" id="datepicker" value="<?php echo $result['dob']?>" required/>
								<span class="text-danger"></span>
							</div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea id="address" name="address" placeholder=""  class="form-control" ><?php echo $result['address']?></textarea>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="accountant_phone">Phone</label>
                                <input id="accountant_phone" name="accountant_phone" placeholder="" type="text" class="form-control"  value="<?php echo $result['accountant_phone']?>" required/>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="image">Accountant Photo (150px X 150px)</label>
								<img src="upload/<?php echo $result['image']?>" alt="" width="50px" height="50px" />
                                <input class="filestyle form-control" type="file" name="image" id="file" size="20" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);"><div class="bootstrap-filestyle" style="display: inline-block;" tabindex="0"><input type="text" class="input-large" disabled=""> <label for="file" class="btn btn-default chosebtn"> <i class="icon-folder-open"></i> <span>Choose File</span></label></div>
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
				<div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Accountant</h3>
                    </div> 
                    <form id="" action=""  id="" name="employeeform" method="post" accept-charset="utf-8"  enctype="multipart/form-data">
                        <div class="box-body">
                                    
                            <input type='hidden' name='ci_csrf_token' value=''/> 
							<div class="form-group">
                                <label for="accountant_name">Name</label>
                                <input autofocus="" id="accountant_name" name="accountant_name" placeholder="" type="text" class="form-control"  value="" required/>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="accountant_email">Email</label>
                                <input id="accountant_email" name="accountant_email"  placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="gender"> Gender &nbsp;&nbsp;</label>
                                <select class="form-control" name="gender"required>
                                    <option value="">Select</option>
									<option value="Male" >Male</option>
									<option value="Female" >Female</option>
								</select>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
								<label for="dob">Date Of Birth</label>
								 <input type="text" name="dob"class="form-control pull-right" id="datepicker" required/>
								<span class="text-danger"></span>
							</div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea id="address" name="address" placeholder=""  class="form-control" ></textarea>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="accountant_phone">Phone</label>
                                <input id="accountant_phone" name="accountant_phone" placeholder="" type="text" class="form-control"  value="" required/>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="image">Accountant Photo (150px X 150px)</label>
                                <input class="filestyle form-control" type="file" name="image" id="file" size="20" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);"><div class="bootstrap-filestyle" style="display: inline-block;" tabindex="0"><input type="text" class="input-large" disabled=""> <label for="file" class="btn btn-default chosebtn"> <i class="icon-folder-open"></i> <span>Choose File</span></label></div>
                            </div>
                        </div>
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
						
						
						$accountant_name	=	test_input($_POST['accountant_name']);
						$accountant_email	=	test_input($_POST['accountant_email']);
						$gender				=	test_input($_POST['gender']);
						$dob				=	test_input($_POST['dob']);
						$address			=	test_input($_POST['address']);
						$accountant_phone	=	test_input($_POST['accountant_phone']);
					
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
						
						$q="INSERT INTO accountant (accountant_name,accountant_email,gender,dob,address,accountant_phone)
								VALUES ('$accountant_name','$accountant_email','$gender','$dob','$address','$accountant_phone')";
								
						$obj=new shop();	
						$inserted=$obj->selectDataInsert($q);
						
						if($inserted){
							echo"<script>window.location='accountants.php';</script>";
							
						}else{
							echo"<script>alert('This Data Inserted Unsuccesfull.');</script>";
						}
					  }else{
						  move_uploaded_file($temp_image,$uploaded_file);
						  $obj=new shop();
						  $q="INSERT INTO accountant (accountant_name,accountant_email,gender,dob,address,accountant_phone,image)
								VALUES ('$accountant_name','$accountant_email','$gender','$dob','$address','$accountant_phone','$uni_file')";
								
								
							$inserted=$obj->selectDataInsert($q);
							
								
						  if($inserted){
							//echo"<script>window.location='accountants.php';</script>";
							
						}else{
							echo"<script>alert('This Data Inserted Unsuccesfull.');</script>";
						}
						  
					  }
					}	
			}
			
				?>
				

				
            </div>  
            <div class="col-md-8">              
                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Accountant List</h3>
                    </div>
                    <div class="box-body">
                        <div class="mailbox-controls">
                        </div>
                        <div class="table-responsive mailbox-messages">
                            <div class="download_label">Accountant List</div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date Of Birth</th>
                                        <th>Phone</th>
                                        <th class="text-right no-print">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								$obj=new shop();
								
								$q="SELECT * FROM accountant";
								$read=$obj->selectDataFetch($q);
								if($read)
								{
								while($result=$read->fetch_array())
								{
								?>
								
									<tr>
										<td class="mailbox-name"> <?php echo $result['accountant_name']?></td>
										<td class="mailbox-name"> <?php echo $result['accountant_email']?></td>
										<td class="mailbox-name"> <?php echo $result['dob']?></td>
										<td class="mailbox-name"> <?php echo $result['accountant_phone']?></td>
										<td class="mailbox-date pull-right no-print">
											<a href="accountant_show.php?show_id=<?php echo $result['id']?>" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Show">
												<i class="fa fa-list"></i>
											</a>
											<a href="?edit_id=<?php echo $result['id']?>" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
												<i class="fa fa-pencil"></i>
											</a>
											<a href="?del_id=<?php echo $result['id']?>"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')";>
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
		$q="DELETE FROM accountant WHERE id=$delID";
		$obj=new shop();
		$deleted=$obj->selectDataDelete($q);
		
		if($deleted)
		{
			echo"<script>window.location='accountants.php'</script>";
		}
		
	}
	?>

 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 