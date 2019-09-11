 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<style type="text/css">
    .liststyle1 {
        margin: 0;
        list-style: none;
        line-height: 28px;
    }
</style>


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
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Fees Master : 2017-18</h3>
                    </div><!-- /.box-header -->
                    <form id="form1" action=""  id="feemasterform" name="feemasterform" method="post" accept-charset="utf-8">
                        <div class="box-body">
                            
                            <input type='hidden' name='ci_csrf_token' value=''/>                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Fees Group</label>

                                        <select autofocus="" id="fees_group" name="fees_group" class="form-control" >
                                            <option value="">Select</option>
											<?php
												$obj=new shop();
												
												$q="SELECT * FROM fees_groups";
												$read=$obj->selectDataFetch($q);
												if($read)
												{
												while($result=$read->fetch_array())
												{
												?>
											<option value="<?php echo $result['fees_group']?>"><?php echo $result['fees_group']?></option>
											
											<?php
												}
												}
											?>

											
										</select>
                                        <span class="text-danger"></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Fees Type</label>

                                        <select  id="fees_type" name="fees_type" class="form-control" >
										
                                            <option value="">Select</option>
											<?php
												$obj=new shop();
												
												$q="SELECT * FROM fees_type";
												$read=$obj->selectDataFetch($q);
												if($read)
												{
												while($result=$read->fetch_array())
												{
												?>
											<option value="<?php echo $result['fees_type']?>"><?php echo $result['fees_type']?></option>
											
											<?php
												}
												}
											?>


										</select>
                                        <span class="text-danger"></span>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Due Date</label>
                                        <input id="due_date" name="due_date" placeholder="" type="text" class="form-control"  value="" readonly="readonly"/>
                                        <span class="text-danger"></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Amount</label>
                                        <input id="amount" name="amount" placeholder="" type="text" class="form-control"  value="" />
                                        <span class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                </div>
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
						
						
						$fees_group	=	test_input($_POST['fees_group']);
						$fees_type	=	test_input($_POST['fees_type']);
						$due_date				=	test_input($_POST['due_date']);
						$amount				=	test_input($_POST['amount']);
						
					
						
						
						$q="INSERT INTO fees_master (fees_group,fees_type,due_date,amount)
								VALUES ('$fees_group','$fees_type','$due_date','$amount')";
								
						$obj=new shop();	
						$inserted=$obj->selectDataInsert($q);
						
						if($inserted){
							echo"<script>window.location='fees_master.php';</script>";
							
						}else{
							echo"<script>alert('This Data Inserted Unsuccesfull.');</script>";
						}
					  
					}	
			
			
				?>
				
				
				

            </div><!--/.col (right) -->
            <!-- left column -->

            <div class="col-md-8">
                <!-- Horizontal Form -->
                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Fees Master List : 2017-18</h3>

                    </div><!-- /.box-header -->

                    <div class="box-body">
                        <div class="download_label">Fees Master List : 2017-18</div>
                        <div class="table-responsive mailbox-messages">
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th>Fees Group</th>
                                        <th>Fees Code</th>

                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td class="mailbox-name">
                                                <a href="#" data-toggle="popover" class="detail_popover">Class 6 General</a>


                                            </td>


                                            <td class="mailbox-name">
                                                <ul class="liststyle1">
                                                        <li> <i class="fa fa-money"></i>  
                                                            admission-fees $1000.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/1"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/1" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                       <li> <i class="fa fa-money"></i>  
                                                            apr-month-fees $400.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/2"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/2" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                        <li> <i class="fa fa-money"></i>  
                                                            may-month-fees $400.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/3"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/3" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                         <li> <i class="fa fa-money"></i>  
                                                            jun-month-fees $400.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/4"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/4" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            aug-month-fees $400.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/6"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/6" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            sep-month-fees $400.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/7"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/7" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            oct-month-fees $400.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/8"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/8" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            nov-month-fees $400.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/9"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/9" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            dec-month-fees $400.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/10"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/10" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            jan-month-fees $400.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/11"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/11" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            feb-month-fees $400.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/12"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/12" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            mar-month-fees $400.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/13"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/13" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            exam-fees $200.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/15"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/15" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            caution-money-fees $500.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/18"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/18" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            2-installment-fees $300.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/74"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/74" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            trans-bus-fees $989.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/84"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/84" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            jan-month-fees $40.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/86"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/86" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            sep-tution-fees $100.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/89"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/89" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                        </ul>
                                            </td>

                                            <td class="mailbox-date pull-right">
                                                <a href="https://demo.smart-school.in/admin/feemaster/assign/1" 
                                                   class="btn btn-default btn-xs" data-toggle="tooltip" title="Assign / View">
                                                    <i class="fa fa-tag"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/feemaster/deletegrp/1" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
                                                </a>

                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="mailbox-name">
                                                <a href="#" data-toggle="popover" class="detail_popover">Route Brooklyn West</a>


                                            </td>


                                            <td class="mailbox-name">
                                                <ul class="liststyle1">
                                                                                                            <li> <i class="fa fa-money"></i>  
                                                            trans-bus-fees $1500.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/16"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/16" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                        </ul>
                                            </td>

                                            <td class="mailbox-date pull-right">
                                                <a href="https://demo.smart-school.in/admin/feemaster/assign/2" 
                                                   class="btn btn-default btn-xs" data-toggle="tooltip" title="Assign / View">
                                                    <i class="fa fa-tag"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/feemaster/deletegrp/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
                                                </a>

                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="mailbox-name">
                                                <a href="#" data-toggle="popover" class="detail_popover">Class 10 General</a>


                                            </td>


                                            <td class="mailbox-name">
                                                <ul class="liststyle1">
                                                                                                            <li> <i class="fa fa-money"></i>  
                                                            jan-month-fees $35.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/26"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/26" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            admission-fees $5000.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/82"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/82" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                        </ul>
                                            </td>

                                            <td class="mailbox-date pull-right">
                                                <a href="https://demo.smart-school.in/admin/feemaster/assign/5" 
                                                   class="btn btn-default btn-xs" data-toggle="tooltip" title="Assign / View">
                                                    <i class="fa fa-tag"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/feemaster/deletegrp/5" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
                                                </a>

                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="mailbox-name">
                                                <a href="#" data-toggle="popover" class="detail_popover">Class 2 General</a>


                                            </td>


                                            <td class="mailbox-name">
                                                <ul class="liststyle1">
                                                                                                            <li> <i class="fa fa-money"></i>  
                                                            exam-fees $200.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/27"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/27" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            apr-month-fees $800.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/30"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/30" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            apr-month-fees $10000.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/33"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/33" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            admission-fees $10000.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/36"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/36" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            may-month-fees $500.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/55"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/55" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            sep-month-fees $550.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/80"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/80" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            admission-fees $10000.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/83"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/83" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                        </ul>
                                            </td>

                                            <td class="mailbox-date pull-right">
                                                <a href="https://demo.smart-school.in/admin/feemaster/assign/6" 
                                                   class="btn btn-default btn-xs" data-toggle="tooltip" title="Assign / View">
                                                    <i class="fa fa-tag"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/feemaster/deletegrp/6" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
                                                </a>

                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="mailbox-name">
                                                <a href="#" data-toggle="popover" class="detail_popover">Class 11 General</a>


                                            </td>


                                            <td class="mailbox-name">
                                                <ul class="liststyle1">
                                                                                                            <li> <i class="fa fa-money"></i>  
                                                            admission-fees $100.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/32"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/32" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            admission-fees $20000.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/34"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/34" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            aug-month-fees $100.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/65"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/65" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                        </ul>
                                            </td>

                                            <td class="mailbox-date pull-right">
                                                <a href="https://demo.smart-school.in/admin/feemaster/assign/8" 
                                                   class="btn btn-default btn-xs" data-toggle="tooltip" title="Assign / View">
                                                    <i class="fa fa-tag"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/feemaster/deletegrp/8" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
                                                </a>

                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="mailbox-name">
                                                <a href="#" data-toggle="popover" class="detail_popover">Slab tution 1 to 5</a>


                                            </td>


                                            <td class="mailbox-name">
                                                <ul class="liststyle1">
                                                                                                            <li> <i class="fa fa-money"></i>  
                                                            101 $5000.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/35"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/35" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                        </ul>
                                            </td>

                                            <td class="mailbox-date pull-right">
                                                <a href="https://demo.smart-school.in/admin/feemaster/assign/9" 
                                                   class="btn btn-default btn-xs" data-toggle="tooltip" title="Assign / View">
                                                    <i class="fa fa-tag"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/feemaster/deletegrp/9" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
                                                </a>

                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="mailbox-name">
                                                <a href="#" data-toggle="popover" class="detail_popover">Class 3 General</a>


                                            </td>


                                            <td class="mailbox-name">
                                                <ul class="liststyle1">
                                                                                                            <li> <i class="fa fa-money"></i>  
                                                            aug-month-fees $1000.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/40"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/40" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                         
                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            apr-month-fees $0.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/98"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/98" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                        </ul>
                                            </td>

                                            <td class="mailbox-date pull-right">
                                                <a href="https://demo.smart-school.in/admin/feemaster/assign/11" 
                                                   class="btn btn-default btn-xs" data-toggle="tooltip" title="Assign / View">
                                                    <i class="fa fa-tag"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/feemaster/deletegrp/11" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
                                                </a>

                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="mailbox-name">
                                                <a href="#" data-toggle="popover" class="detail_popover">junaid </a>


                                            </td>


                                            <td class="mailbox-name">
                                                <ul class="liststyle1">
                                                                                                            <li> <i class="fa fa-money"></i>  
                                                            may-month-fees $5000.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/57"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/57" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                        </ul>
                                            </td>

                                            <td class="mailbox-date pull-right">
                                                <a href="https://demo.smart-school.in/admin/feemaster/assign/14" 
                                                   class="btn btn-default btn-xs" data-toggle="tooltip" title="Assign / View">
                                                    <i class="fa fa-tag"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/feemaster/deletegrp/14" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
                                                </a>

                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="mailbox-name">
                                                <a href="#" data-toggle="popover" class="detail_popover">Class 3rd</a>


                                            </td>


                                            <td class="mailbox-name">
                                                <ul class="liststyle1">
                                                                                                            <li> <i class="fa fa-money"></i>  
                                                            admission-fees $700.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/68"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/68" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            library-fees $300.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/69"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/69" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            trans-van-fess $1200.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/70"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/70" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            sep-month-fees $2000.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/72"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/72" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                        </ul>
                                            </td>

                                            <td class="mailbox-date pull-right">
                                                <a href="https://demo.smart-school.in/admin/feemaster/assign/17" 
                                                   class="btn btn-default btn-xs" data-toggle="tooltip" title="Assign / View">
                                                    <i class="fa fa-tag"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/feemaster/deletegrp/17" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
                                                </a>

                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="mailbox-name">
                                                <a href="#" data-toggle="popover" class="detail_popover">Class 4 General</a>


                                            </td>


                                            <td class="mailbox-name">
                                                <ul class="liststyle1">
                                                                                                            <li> <i class="fa fa-money"></i>  
                                                            jun-month-fees $200.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/71"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/71" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                        </ul>
                                            </td>

                                            <td class="mailbox-date pull-right">
                                                <a href="https://demo.smart-school.in/admin/feemaster/assign/18" 
                                                   class="btn btn-default btn-xs" data-toggle="tooltip" title="Assign / View">
                                                    <i class="fa fa-tag"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/feemaster/deletegrp/18" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
                                                </a>

                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="mailbox-name">
                                                <a href="#" data-toggle="popover" class="detail_popover">Class 12 General</a>


                                            </td>


                                            <td class="mailbox-name">
                                                <ul class="liststyle1">
                                                                                                            <li> <i class="fa fa-money"></i>  
                                                            1-installment-fees $5000.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/73"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/73" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                        </ul>
                                            </td>

                                            <td class="mailbox-date pull-right">
                                                <a href="https://demo.smart-school.in/admin/feemaster/assign/19" 
                                                   class="btn btn-default btn-xs" data-toggle="tooltip" title="Assign / View">
                                                    <i class="fa fa-tag"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/feemaster/deletegrp/19" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
                                                </a>

                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="mailbox-name">
                                                <a href="#" data-toggle="popover" class="detail_popover">september month fees</a>


                                            </td>


                                            <td class="mailbox-name">
                                                <ul class="liststyle1">
                                                                                                            <li> <i class="fa fa-money"></i>  
                                                            sep-tution-fees $5000.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/75"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/75" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                                <li> <i class="fa fa-money"></i>  
                                                            Buss-fees $500.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/76"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/76" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                        </ul>
                                            </td>

                                            <td class="mailbox-date pull-right">
                                                <a href="https://demo.smart-school.in/admin/feemaster/assign/20" 
                                                   class="btn btn-default btn-xs" data-toggle="tooltip" title="Assign / View">
                                                    <i class="fa fa-tag"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/feemaster/deletegrp/20" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
                                                </a>

                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="mailbox-name">
                                                <a href="#" data-toggle="popover" class="detail_popover">Monthly</a>


                                            </td>


                                            <td class="mailbox-name">
                                                <ul class="liststyle1">
                                                                                                            <li> <i class="fa fa-money"></i>  
                                                            T01 $600.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/93"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/93" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                        </ul>
                                            </td>

                                            <td class="mailbox-date pull-right">
                                                <a href="https://demo.smart-school.in/admin/feemaster/assign/21" 
                                                   class="btn btn-default btn-xs" data-toggle="tooltip" title="Assign / View">
                                                    <i class="fa fa-tag"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/feemaster/deletegrp/21" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
                                                </a>

                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="mailbox-name">
                                                <a href="#" data-toggle="popover" class="detail_popover">Class 8 General</a>


                                            </td>


                                            <td class="mailbox-name">
                                                <ul class="liststyle1">
                                                                                                            <li> <i class="fa fa-money"></i>  
                                                            1-installment-fees $10000.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/99"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/99" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                        </ul>
                                            </td>

                                            <td class="mailbox-date pull-right">
                                                <a href="https://demo.smart-school.in/admin/feemaster/assign/23" 
                                                   class="btn btn-default btn-xs" data-toggle="tooltip" title="Assign / View">
                                                    <i class="fa fa-tag"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/feemaster/deletegrp/23" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
                                                </a>

                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="mailbox-name">
                                                <a href="#" data-toggle="popover" class="detail_popover">Class 9 General</a>


                                            </td>


                                            <td class="mailbox-name">
                                                <ul class="liststyle1">
                                                                                                            <li> <i class="fa fa-money"></i>  
                                                            aug-month-fees $4000.00 &nbsp;&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/edit/100"   data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>&nbsp;
                                                            <a href="https://demo.smart-school.in/admin/feemaster/delete/100" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>

                                                        </li>

                                                                                                        </ul>
                                            </td>

                                            <td class="mailbox-date pull-right">
                                                <a href="https://demo.smart-school.in/admin/feemaster/assign/24" 
                                                   class="btn btn-default btn-xs" data-toggle="tooltip" title="Assign / View">
                                                    <i class="fa fa-tag"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/feemaster/deletegrp/24" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-remove"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        
                                </tbody>
                            </table><!-- /.table -->
                        </div><!-- /.mail-box-messages -->
                    </div><!-- /.box-body -->


                    </form>
                </div>

            </div><!--/.col (right) -->
            <!-- left column -->


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
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 