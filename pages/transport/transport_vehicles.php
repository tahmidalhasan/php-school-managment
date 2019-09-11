 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>
<style type="text/css">
    @media print
    {
        .no-print, .no-print *
        {
            display: none !important;
        }
    }
</style>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  
 <section class="content-header">
        <h1>
            <i class="fa fa-bus"></i> Transport</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="box box-primary" >
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Vehicle</h3>
                    </div>
                    <form id="form1" action="https://demo.smart-school.in/admin/vehicle/index"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8">

                        <div class="box-body">
                                                              
                            <input type='hidden' name='ci_csrf_token' value=''/>                     
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vehicle Number</label>
                                <input autofocus="" id="vehicle_no" name="vehicle_no" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vehicle Model</label>
                                <input id="vehicle_model" name="vehicle_model" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Year Made </label>
                                <input id="manufacture_year" name="manufacture_year" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Driver Name</label>
                                <input id="driver_name" name="driver_name" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Driver License</label>
                                <input id=" driver_licence" name="driver_licence" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Driver Contact</label>
                                <input id="driver_contact" name="driver_contact" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Note</label>
                                <textarea class="form-control" id="note" name="note" placeholder="" rows="3" placeholder="Enter ..."></textarea>
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
                <div class="box box-primary" id="vehicle">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Vehicle List</h3>
                    </div>
                    <div class="box-body">
                        <div class="mailbox-controls">                         
                            <div class="pull-right">
                            </div>
                        </div>
                        <div class="table-responsive mailbox-messages">
						<div class="download_label">Vehicle List</div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th>Vehicle Number                                        </th>
                                        <th>Vehicle Model                                        </th>
                                        <th>Year Made</th>
                                        <th>Driver Name</th>
                                        <th>Driver License</th>
                                        <th>Driver Contact</th>
                                        <th class="text-right no-print">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                                <tr>
                                                <td class="mailbox-name">
                                                    <a href="#" data-toggle="popover" class="detail_popover" >1010</a>

                                                    <div class="vehicle_detail_popover" style="display: none">
                                                                                                                    <p class="text text-danger">No Description</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-name"> 55</td>
                                                <td class="mailbox-name"> 2016</td>      <td class="mailbox-name"> aaa</td>
                                                <td class="mailbox-name"> 544575854</td>
                                                <td class="mailbox-name"> 9999999999,888888888</td>

                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/vehicle/edit/1" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/vehicle/delete/1"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    <a href="#" data-toggle="popover" class="detail_popover" >1011</a>

                                                    <div class="vehicle_detail_popover" style="display: none">
                                                                                                                    <p class="text text-info">ug</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-name"> 56</td>
                                                <td class="mailbox-name"> 2017</td>      <td class="mailbox-name"> bbb</td>
                                                <td class="mailbox-name"> 657657656</td>
                                                <td class="mailbox-name"> 0987654321</td>

                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/vehicle/edit/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/vehicle/delete/2"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    <a href="#" data-toggle="popover" class="detail_popover" >333</a>

                                                    <div class="vehicle_detail_popover" style="display: none">
                                                                                                                    <p class="text text-danger">No Description</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-name"> 145</td>
                                                <td class="mailbox-name"> 2005</td>      <td class="mailbox-name"> arjun</td>
                                                <td class="mailbox-name"> 131231</td>
                                                <td class="mailbox-name"> 8281311</td>

                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/vehicle/edit/3" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/vehicle/delete/3"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    <a href="#" data-toggle="popover" class="detail_popover" >444</a>

                                                    <div class="vehicle_detail_popover" style="display: none">
                                                                                                                    <p class="text text-danger">No Description</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-name"> 12312</td>
                                                <td class="mailbox-name"> 3112</td>      <td class="mailbox-name"> asdsa</td>
                                                <td class="mailbox-name"> 31231231</td>
                                                <td class="mailbox-name"> 123123123</td>

                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/vehicle/edit/4" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/vehicle/delete/4"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
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

 
 