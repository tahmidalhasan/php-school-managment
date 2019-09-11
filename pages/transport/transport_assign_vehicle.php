 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  <section class="content-header">
        <h1>
            <i class="fa fa-credit-card"></i> Transport</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <!-- Horizontal Form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Assign Vehicle On Route</h3>
                    </div><!-- /.box-header -->
                    <form id="form1" action="https://demo.smart-school.in/admin/vehroute"  method="post" accept-charset="utf-8">
                        <div class="box-body">
                                                                                    <input type='hidden' name='ci_csrf_token' value=''/>                            <div class="form-group">
                                <label for="exampleInputEmail1">Route</label>

                                <select autofocus="" id="route_id" name="route_id" class="form-control" >
                                    <option value="">Select</option>
                                                                            <option value="2">Brooklyn East</option>

                                                                                <option value="3">Brooklyn South</option>

                                                                                <option value="4">Brooklyn West</option>

                                                                                <option value="5">Brooklyn Central</option>

                                                                                <option value="6">Uppal</option>

                                                                                <option value="7">MAHE</option>

                                                                                <option value="8">CMD Chowk</option>

                                                                                <option value="9">Agrasen Chowk</option>

                                                                                <option value="10">R-17</option>

                                                                        </select>
                                <span class="text-danger"></span>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Vehicle</label>


                                                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="vehicle[]" value="1"  >1010                                        </label>
                                    </div>
                                                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="vehicle[]" value="2"  >1011                                        </label>
                                    </div>
                                                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="vehicle[]" value="3"  >333                                        </label>
                                    </div>
                                                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="vehicle[]" value="4"  >444                                        </label>
                                    </div>
                                    
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
                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Vehicle Route List</h3>
                        <div class="box-tools pull-right">
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive mailbox-messages">
						<div class="download_label">Vehicle Route List</div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>

                                        <th>Route                                        </th>
                                        <th>Vehicle                                        </th>

                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                                <tr>
                                                <td class="mailbox-name">
                                                    Uppal
                                                </td>


                                                <td>
                                                    <div><b>444</b></div><div><b>333</b></div><div><b>1011</b></div><div><b>1010</b></div>
                                                </td>
                                                <td class="mailbox-date pull-right">
                                                    <a href="https://demo.smart-school.in/admin/vehroute/edit/6" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/vehroute/delete/6"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    MAHE
                                                </td>


                                                <td>
                                                    <div><b>1011</b></div>
                                                </td>
                                                <td class="mailbox-date pull-right">
                                                    <a href="https://demo.smart-school.in/admin/vehroute/edit/7" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/vehroute/delete/7"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    R-17
                                                </td>


                                                <td>
                                                    <div><b>1011</b></div><div><b>1010</b></div>
                                                </td>
                                                <td class="mailbox-date pull-right">
                                                    <a href="https://demo.smart-school.in/admin/vehroute/edit/10" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/vehroute/delete/10"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    Agrasen Chowk
                                                </td>


                                                <td>
                                                    <div><b>1011</b></div>
                                                </td>
                                                <td class="mailbox-date pull-right">
                                                    <a href="https://demo.smart-school.in/admin/vehroute/edit/9" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/vehroute/delete/9"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    CMD Chowk
                                                </td>


                                                <td>
                                                    <div><b>1011</b></div>
                                                </td>
                                                <td class="mailbox-date pull-right">
                                                    <a href="https://demo.smart-school.in/admin/vehroute/edit/8" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/vehroute/delete/8"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    Brooklyn South
                                                </td>


                                                <td>
                                                    <div><b>1010</b></div>
                                                </td>
                                                <td class="mailbox-date pull-right">
                                                    <a href="https://demo.smart-school.in/admin/vehroute/edit/3" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/vehroute/delete/3"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    Brooklyn East
                                                </td>


                                                <td>
                                                    <div><b>1010</b></div>
                                                </td>
                                                <td class="mailbox-date pull-right">
                                                    <a href="https://demo.smart-school.in/admin/vehroute/edit/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/vehroute/delete/2"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            
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
    </section><


</div>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 