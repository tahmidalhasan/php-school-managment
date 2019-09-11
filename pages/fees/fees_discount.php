 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
      <section class="content-header">
        <h1>
            <i class="fa fa-money"></i> Fees Collection</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <!-- Horizontal Form -->
				
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
						$fees_discount		=	test_input($_POST['fees_discount']);
						$discount_code		=	test_input($_POST['discount_code']);
						$discount_amount	=	test_input($_POST['discount_amount']);
						$des				=	test_input($_POST['des']);
						
						
						
						$q="UPDATE fees_discount
						
						SET
						
						fees_discount='$fees_discount',
						discount_code='$discount_code',
						discount_amount='$discount_amount',
						des='$des'
						
						
						WHERE id=$edit_id";
						
						$update=$obj->selectDataInsert($q);
						
						if($update){
							echo"<script>window.location='fees_discount.php';</script>";
							
						}else{
							echo"<script>alert('This Data Update Unsuccesfull.');</script>";
						}
						
					}
					
					
					$obj=new shop();
					
					$q="SELECT * FROM fees_discount";
					$read=$obj->selectDataFetch($q);
					if($result=$read->fetch_array())
					{
					
								
                            
				?>
				
				
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Fees Discount</h3>
                    </div><!-- /.box-header -->
                    <form id="" action=""  id="" name="" method="post" accept-charset="utf-8">
                        <div class="box-body">
                            
                            <input type='hidden' name='ci_csrf_token' value=''/>                              

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input autofocus=""  id="fees_discount" name="fees_discount" type="text" class="form-control"  value="<?php echo $result['fees_discount']?>" required/>
                                <span class="text-danger"></span>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Discount Code</label>
                                <input id="discount_code" name="discount_code" type="text" class="form-control"  value="<?php echo $result['discount_code']?>" />
                                <span class="text-danger"></span>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Amount</label>
                                <input id="discount_amount" name="discount_amount" type="text" class="form-control"  value="<?php echo $result['discount_amount']?>" required/>
                                <span class="text-danger"></span>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control" id="des" name="des" rows="3"><?php echo $result['des']?></textarea>
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
                        <h3 class="box-title">Add Fees Discount</h3>
                    </div><!-- /.box-header -->
                    <form id="" action=""  id="" name="" method="post" accept-charset="utf-8">
                        <div class="box-body">
                            
                            <input type='hidden' name='ci_csrf_token' value=''/>                              

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input autofocus="" id="fees_discount" name="fees_discount" type="text" class="form-control"  value="" required/>
                                <span class="text-danger"></span>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Discount Code</label>
                                <input id="discount_code" name="discount_code" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Amount</label>
                                <input id="discount_amount" name="discount_amount" type="text" class="form-control"  value="" required />
                                <span class="text-danger"></span>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control" id="des" name="des" rows="3"></textarea>
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
						
						
						$fees_discount	=	test_input($_POST['fees_discount']);
						$discount_code	=	test_input($_POST['discount_code']);
						$discount_amount	=	test_input($_POST['discount_amount']);
						$des	=	test_input($_POST['des']);
						
						$q="INSERT INTO fees_discount (fees_discount,discount_code,discount_amount,des)
								VALUES ('$fees_discount','$discount_code','$discount_amount','$des')";
								
						$obj=new shop();	
						$inserted=$obj->selectDataInsert($q);
						
						if($inserted){
							echo"<script>window.location='fees_discount.php';</script>";
							
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
                        <h3 class="box-title titlefix">Fees Discount List</h3>
                        <div class="box-tools pull-right">
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive mailbox-messages">
						<div class="download_label">Fees Discount List</div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>

                                        <th>Name     </th>
										<th>Discount Code </th>
                                        <th>Amount </th>
                                        <th class="text text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								
								<?php
								$obj=new shop();
								
								$q="SELECT * FROM fees_discount";
								$read=$obj->selectDataFetch($q);
								if($read)
								{
								while($result=$read->fetch_array())
								{
								?>
                                        <tr>
                                            <td class="mailbox-name" title="<?php echo $result['des']?>"> <?php echo $result['fees_discount']?>
												
											</td>
                                            <td class="mailbox-name"> <?php echo $result['discount_code']?> </td>

                                            <td class="mailbox-name"> <?php echo $result['discount_amount']?> </td>


                                            <td class="mailbox-date pull-right"">
                                                <a href="" class="btn btn-default btn-xs" data-toggle="tooltip" title="Assign / View">
                                                    <i class="fa fa-tag"></i>
                                                </a>
                                                <a href="?edit_id=<?php echo $result['id']?>" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="?del_id=<?php echo $result['id']?>" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
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

</div>
<?php 
	if(isset($_GET['del_id']))
	{
		$delID=$_GET['del_id'];
		$q="DELETE FROM fees_discount WHERE id=$delID";
		$obj=new shop();
		$deleted=$obj->selectDataDelete($q);
		
		if($deleted)
		{
			echo"<script>window.location='fees_discount.php'</script>";
		}
		
	}
	?>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 