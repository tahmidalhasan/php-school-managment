 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  <section class="content-header">
        <h1>
            <i class="fa fa-object-group"></i> Inventory</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <!-- Horizontal Form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Item Store</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form  action="https://demo.smart-school.in/admin/itemstore/create"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8">
                        <div class="box-body">                            
                                                        <input type='hidden' name='ci_csrf_token' value=''/>                            <div class="form-group">
                                <label for="exampleInputEmail1">Item Store Name</label>
                                <input autofocus="" id="name" name="name" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Item Store Code</label>
                                <input id="code" name="code" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="" rows="3" placeholder="Enter ..."></textarea>
                                <span class="text-danger"></span>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right">Save</button>
                        </div>
                    </form>
                </div>            
            </div><!--/.col (right) -->
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary" id="exphead">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Item Store List</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body  ">
                        <div class="table-responsive mailbox-messages">
						<div class="download_label">Item Store List</div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th>Item Store Name</th>
                                        <th>Item Store Code</th>
                                        <th class="text-right no-print">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                                <tr>   
                                                <td class="mailbox-name">

                                                    <a href="#" data-toggle="popover" class="detail_popover" >
                                                        Sports Store                                                    </a>

                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-danger">No Description</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-name">

                                                    ss1
                                                </td>                                       

                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/itemstore/edit/1" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/itemstore/delete/1" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>   
                                                <td class="mailbox-name">

                                                    <a href="#" data-toggle="popover" class="detail_popover" >
                                                        Science Store                                                    </a>

                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-danger">No Description</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-name">

                                                    SC1
                                                </td>                                       

                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/itemstore/edit/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/itemstore/delete/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>   
                                                <td class="mailbox-name">

                                                    <a href="#" data-toggle="popover" class="detail_popover" >
                                                        Library Store                                                    </a>

                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-info">Book store</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-name">

                                                    LS2
                                                </td>                                       

                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/itemstore/edit/3" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/itemstore/delete/3" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            
                                </tbody>
                            </table><!-- /.table -->
                        </div><!-- /.mail-box-messages -->
                    </div><!-- /.box-body -->
                </div>
            </div>

            <!-- right column -->

        </div>   <!-- /.row -->
    </section>


</div>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 