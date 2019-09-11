 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  <section class="content-header">
        <h1>
            <i class="fa fa-bus"></i> Transport <small></small>        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="box box-primary" >
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Route</h3>
                    </div>
                    <form id="form1" action="https://demo.smart-school.in/admin/route/create"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8">
                        <div class="box-body">
                                                              
                            <input type='hidden' name='ci_csrf_token' value=''/>                     
                            <div class="form-group">
                                <label for="exampleInputEmail1">Route Title</label>
                                <input autofocus="" id="route_title" name="route_title" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Fare</label>
                                <input id="fare" name="fare" placeholder="" type="text" class="form-control"  value="" />
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
                <div class="box box-primary" id="route">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Route List</h3>

                    </div>
                    <div class="box-body">
                        <div class="mailbox-controls">                         
                            <div class="pull-right">
                            </div>
                        </div>
                        <div class="table-responsive mailbox-messages">
						<div class="download_label">Route List</div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th>Route Title                                        </th>

                                        <th>Fare</th>
                                        <th class="text-right no-print">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                                <tr>
                                                <td class="mailbox-name"> Brooklyn East</td>

                                                <td class="mailbox-name"> Rp.80.00</td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/route/edit/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/route/delete/2"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name"> Brooklyn South</td>

                                                <td class="mailbox-name"> Rp.80.00</td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/route/edit/3" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/route/delete/3"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name"> Brooklyn West</td>

                                                <td class="mailbox-name"> Rp.100.00</td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/route/edit/4" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/route/delete/4"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name"> Brooklyn Central</td>

                                                <td class="mailbox-name"> Rp.50.00</td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/route/edit/5" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/route/delete/5"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name"> Uppal</td>

                                                <td class="mailbox-name"> Rp.0.00</td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/route/edit/6" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/route/delete/6"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name"> MAHE</td>

                                                <td class="mailbox-name"> Rp.50.00</td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/route/edit/7" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/route/delete/7"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name"> CMD Chowk</td>

                                                <td class="mailbox-name"> Rp.100.00</td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/route/edit/8" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/route/delete/8"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name"> Agrasen Chowk</td>

                                                <td class="mailbox-name"> Rp.120.00</td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/route/edit/9" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/route/delete/9"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name"> R-17</td>

                                                <td class="mailbox-name"> Rp.300.00</td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/route/edit/10" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/route/delete/10"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
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

 
 