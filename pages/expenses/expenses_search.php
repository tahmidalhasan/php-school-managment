 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
 <section class="content-header">
        <h1>
            <i class="fa fa-credit-card"></i> Expenses</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                 <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> Select Criteria</h3>
                    </div>
					
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <form role="form" action="" method="post" class="">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Date From</label>
                                                 <div class="input-group date"> 
												  <input type="text" name="date_from" class="form-control pull-right" id="datepicker1" value="<?php echo date('m/d/Y')?>">
												</div>
											  <span class="text-danger"></span>
                                            </div> 
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Date To</label>
												<div class="input-group date"> 
												  <input type="text" name="date_to" class="form-control pull-right" id="datepicker" value="<?php echo date('m/d/Y')?>">
												</div>
										   </div> 
                                        </div>
										
										
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <button type="submit" name="search" value="search_filter" class="btn btn-primary btn-sm checkbox-toggle pull-right"><i class="fa fa-search"></i> Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>  
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <form role="form" action="" method="post" class="">
                                        <input type='hidden' name='ci_csrf_token' value=''/>   
										<div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Search</label>
                                                <input autofocus="" type="text" name="search_key" value="" name="search_text"  class="form-control" placeholder="Search by Expense Head, Name, Amount, Date etc..." required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <button type="submit" name="search_by_key" value="search_full" class="btn btn-primary btn-sm checkbox-toggle pull-right"><i class="fa fa-search"></i> Search</button>
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
				
				<div class="box box-info" id="exp">

                        <div class="box-header ptbnull">
                            <h3 class="box-title titlefix"><i class="fa fa-money"></i> Expense Result</h3>
                        </div>
                        <div class="box-body table-responsive">
							<div class="download_label">Expense Result</div>
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
							
								<table class="table table-striped table-bordered table-hover example dataTable no-footer" id="DataTables_Table_0" role="grid">
								   

								   <thead>
										<tr role="row">
											<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 146px;">Date</th>
											<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 160px;">Expense Head</th>
											<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 160px;">Name</th>
											<th class="text-right sorting_enable" rowspan="1" colspan="1" style="width: 267px;">Amount <span>($)</span></th>
										</tr>
									</thead>
									<tbody>

																				
									<?php
										$obj=new shop();
										
										$date_from	=	$_POST['date_from'];
										$date_to	=	$_POST['date_to'];
										
										$q="SELECT * FROM expense_add WHERE expense_date>='$date_from' AND expense_date<='$date_to'";
										$read=$obj->selectDataFetch($q);
										if($read)
										{
										$sum=0;
										
										while($result=$read->fetch_array())
										{
										
									?>										
										
										<tr role="row" class="">

											<td> <?php echo $result['expense_date']?></td>
											<td><?php echo $result['expense_head']?></td>
											<td> <?php echo $result['expense_name']?> </td>
											<td class="pull-right"><?php echo $result['expense_amount']?> </td>
										</tr>
									
									<?php
									 $sum += $result['expense_amount'];
										}
										
									?>
										<tr class="total-bg even" role="row">
											<td></td>
											<td></td>
											<td></td>
											<td class="pull-right text-bold">Grand Total : <?php echo $sum;?>
											</td>
										</tr>
									<?php
										}else{
									?>
									 <tr class="odd">
										<td valign="top" colspan="4" class="dataTables_empty">No data available in table <br> <br>
											<img src="img/addnewitem.svg" width="150"><br><br>
											<span class="text-success bolds"><i class="fa fa-arrow-left"> </i> Add new record or search with different criteria.</span>
										</td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									
									
									<?php
										}
									?>
									</tbody>
								</table>
							</div>

                        </div>

                    </div>
					
			<?php
				}else if(isset($_POST['search_by_key'])){
			?>
				
					   <div class="box box-info" id="exp">

                        <div class="box-header ptbnull">
                            <h3 class="box-title titlefix"><i class="fa fa-money"></i> Expense Result</h3>
                        </div>
                        <div class="box-body table-responsive">
							<div class="download_label">Expense Result</div>
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
							
								<table class="table table-striped table-bordered table-hover example dataTable no-footer" id="DataTables_Table_0" role="grid">
								   

								   <thead>
										<tr role="row">
											<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 146px;">Date</th>
											<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 160px;">Expense Head</th>
											<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 160px;">Name</th>
											<th class="text-right sorting_enable" rowspan="1" colspan="1" style="width: 267px;">Amount <span>(<i class="fa fa-bdt #5211"></i>)</span></th>
										</tr>
									</thead>
									<tbody>

																				
									<?php
										$obj=new shop();
										
										 
											 $search_key=$_POST['search_key'];
											 
										$q="SELECT * FROM expense_add WHERE expense_head LIKE '%$search_key%' or expense_date LIKE '%$search_key%'
											   or expense_amount LIKE '%$search_key%' or expense_name LIKE '%$search_key%'";
									
										
										$read=$obj->selectDataFetch($q);
										if($read)
										{
										$sum=0;
										
										while($result=$read->fetch_array())
										{
										
									?>										
										
										<tr role="row" class="">

											<td> <?php echo $result['expense_date']?></td>
											<td><?php echo $result['expense_head']?></td>
											<td> <?php echo $result['expense_name']?> </td>
											<td class="pull-right"><?php echo $result['expense_amount']?> </td>
										</tr>
									
									<?php
									 $sum += $result['expense_amount'];
										}
										
									?>
										<tr class="total-bg even" role="row">
											<td></td>
											<td></td>
											<td></td>
											<td class="pull-right text-bold"> Total : <?php echo $sum;?>
											</td>
										</tr>
									<?php
										}else{
									?>
									 <tr class="odd">
										<td valign="top" colspan="4" class="dataTables_empty">No data available in table <br> <br>
											<img src="img/addnewitem.svg" width="150"><br><br>
											<span class="text-success bolds"><i class="fa fa-arrow-left"> </i> Add new record or search with different criteria.</span>
										</td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									
									
									<?php
										}
									?>
									</tbody>
								</table>
							</div>

                        </div>

                    </div>
				
				<?php
				}
				?>
                
            </div>      

        </div>   <!-- /.row -->

    </section>
</div>


 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 