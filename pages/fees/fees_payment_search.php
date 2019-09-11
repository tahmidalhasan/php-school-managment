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
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i>                          
                            Search                            Fees                            Payment                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="https://demo.smart-school.in/studentfee/searchpayment" method="post" class="form-inline">
                                    <input type='hidden' name='ci_csrf_token' value=''/>                                    <div class="form-group">
                                        <div class="col-sm-">
                                            <label>Payment Id                                            </label>
                                            <input autofocus="" id="paymentid" name="paymentid" placeholder="" type="text" class="form-control date"  value=""/>
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <button type="submit" name="search" value="search_filter" class="btn btn-primary btn-sm checkbox-toggle mmius15"><i class="fa fa-search"></i> Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
				
				      
                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Category List</h3>                   
                    </div>
                    <div class="box-body">
                        <div class="download_label">Category List</div>
                        <div class="table-responsive mailbox-messages">
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Payment Id: activate to sort column descending" style="width: 79px;">Payment Id</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 39px;">Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 47px;">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Class: activate to sort column ascending" style="width: 44px;">Class</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Fees Group: activate to sort column ascending" style="width: 79px;">Fees Group</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Fees Type: activate to sort column ascending" style="width: 72px;">Fees Type</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Mode: activate to sort column ascending" style="width: 46px;">Mode</th><th class="text text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 59px;">Amount</th><th class="text text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Discount: activate to sort column ascending" style="width: 66px;">Discount</th><th class="text text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Fine: activate to sort column ascending" style="width: 38px;">Fine</th><th class="text text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 39px;">Action</th></tr>
                                </thead>
								<tbody>
									 <tr class="odd">
									 <td valign="top" colspan="11" class="dataTables_empty">No data available in table <br> <br>
									 <img src="img/addnewitem.svg" width="150"><br><br> 
									 <span class="text-success bolds"><i class="fa fa-arrow-left"></i> Add new record or search with different criteria.</span></td>
									 <td></td>
									 <td></td>
									 <td></td>
									 <td></td>
									 <td></td>
									 <td></td>
									 <td></td>
									 <td></td>
									 <td></td>
									 <td></td>
									 </tr>
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
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 