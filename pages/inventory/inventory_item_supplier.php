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
                        <h3 class="box-title">Add Item Supplier</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form  action="https://demo.smart-school.in/admin/itemsupplier/create"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8">
                        <div class="box-body">                            
                                                        <input type='hidden' name='ci_csrf_token' value=''/>                            <div class="form-group">
                                <label for="exampleInputEmail1"> Name</label>
                                <input autofocus="" id="name" name="name" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Phone</label>
                                <input id="phone" name="phone" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Email</label>
                                <input id="text" name="email" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <textarea class="form-control" id="address" name="address" placeholder="" rows="3" placeholder="Enter ..."></textarea>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Contact Person Name</label>
                                <input id="contact_person_name" name="contact_person_name" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contact Person Phone</label>
                                <input id="contact_person_phone" name="contact_person_phone" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Contact Person Email</label>
                                <input id="contact_person_email" name="contact_person_email" placeholder="" type="email" class="form-control"  value="" />
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
                        <h3 class="box-title titlefix">Item Supplier List</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body  ">
                        <div class="table-responsive mailbox-messages">
                            <div class="download_label">Item Supplier List</div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th>Item Supplier</th>
                                        <th>Contact Person</th>
                                        <th>Address</th>
                                        <th class="text-right no-print">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                                <tr>   


                                                <td class="mailbox-name">

                                                    <a href="#" data-toggle="popover" class="detail_popover" >
                                                        Camlin Stationers                                                        <br>
                                                    </a>
                                                                                                            <i class="fa fa-phone-square"></i> 8458436583                                                        <br>
                                                                                                                                                                    <i class="fa fa-envelope"></i> camlin@gmail.com
                                                        
                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-info">dfjfhdsj</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-name">
                                                                                                            <i class="fa fa-user"></i> Bruce Stark                                                        <br>
                                                                                                                                                                    <i class="fa fa-phone-square"></i> 847487932                                                        <br>
                                                                                                                                                                    <i class="fa fa-envelope"></i> bruce@gmail.com                                                                                                        </td>
                                                <td class="mailbox-name">
                                                                                                            <i class="fa fa-building"></i> 22 Cristal Way. CA                                                        
                                                </td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/itemsupplier/edit/1" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/itemsupplier/delete/1" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>   


                                                <td class="mailbox-name">

                                                    <a href="#" data-toggle="popover" class="detail_popover" >
                                                        Best Enterprises                                                        <br>
                                                    </a>
                                                                                                            <i class="fa fa-phone-square"></i> 9743473243                                                        <br>
                                                                                                                                                                    <i class="fa fa-envelope"></i> bestent@gmail.com
                                                        
                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-info">dsjdgsajasgds dsfsa </p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-name">
                                                                                                            <i class="fa fa-user"></i> Prakash Singh                                                        <br>
                                                                                                                                                                    <i class="fa fa-phone-square"></i> 8473827832                                                        <br>
                                                                                                                                                                    <i class="fa fa-envelope"></i> prakash@gmail.com                                                                                                        </td>
                                                <td class="mailbox-name">
                                                                                                            <i class="fa fa-building"></i> 3743 main street, ca                                                        
                                                </td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <a href="https://demo.smart-school.in/admin/itemsupplier/edit/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/itemsupplier/delete/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
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

 
 