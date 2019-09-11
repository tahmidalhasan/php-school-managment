 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  <section class="content-header">
        <h1>
            <i class="fa fa-building-o"></i> Hostel</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-4">               
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Room Type</h3>
                    </div>
                    <form id="form1" action="https://demo.smart-school.in/admin/roomtype/create"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8">
                        <div class="box-body">
                                                                                    <input type='hidden' name='ci_csrf_token' value=''/>                            <div class="form-group">
                                <label for="exampleInputEmail1">Room Type</label>
                                <input autofocus="" id="amount" name="room_type" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="" rows="3" placeholder=""></textarea>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8">              
                <div class="box box-primary" id="rtype">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Room Type List</h3>
                    </div>
                    <div class="box-body">
                        <div class="mailbox-controls">                           
                            <div class="pull-right">

                            </div><!-- /.pull-right -->
                        </div>
                        <div class="table-responsive mailbox-messages">
						<div class="download_label">Room Type List</div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th>Room Type</th>
                                        <th class="text-right no-print">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                                <tr>
                                                <td class="mailbox-name">
                                                    <a href="#" data-toggle="popover" class="detail_popover">One Bed</a>
                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-danger">No Description</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/roomtype/edit/1" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/roomtype/delete/1"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    <a href="#" data-toggle="popover" class="detail_popover">Two Bed</a>
                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-danger">No Description</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/roomtype/edit/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/roomtype/delete/2"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    <a href="#" data-toggle="popover" class="detail_popover">Three Bed</a>
                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-danger">No Description</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/roomtype/edit/3" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/roomtype/delete/3"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    <a href="#" data-toggle="popover" class="detail_popover">Four Bed</a>
                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-danger">No Description</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/roomtype/edit/4" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/roomtype/delete/4"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    <a href="#" data-toggle="popover" class="detail_popover">One Bed AC</a>
                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-danger">No Description</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/roomtype/edit/5" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/roomtype/delete/5"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    <a href="#" data-toggle="popover" class="detail_popover">Two Bed AC</a>
                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-danger">No Description</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/roomtype/edit/6" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/roomtype/delete/6"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>     

        </div>
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </section>



</div>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 